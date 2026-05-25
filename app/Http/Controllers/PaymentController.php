<?php



namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Exception\InvalidRequestException;  // Import the InvalidRequestException class
use Stripe\Stripe;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReceiptEmail;

use Illuminate\Support\Facades\View;

use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Response;

use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        try {
            // Set your secret key. Remember to switch to your live secret key in production.
            // See your keys here: https://dashboard.stripe.com/apikeys
            Stripe::setApiKey(config('stripe.stripe_sk'));

            // Convert the amount to cents for LKR
            $totalAmountCents = $request->price * 100;

            // Ensure the total amount is at least 50 cents
            $minimumAmountCents = 50;

            // Log the total amount for debugging
            Log::info("Total Amount (Cents): $totalAmountCents");

            if ($totalAmountCents < $minimumAmountCents) {
                // Log an error message for debugging
                Log::error("Total amount is less than $minimumAmountCents cents.");

                // Throw a custom exception for amounts less than 50 cents
                throw new \Exception('The total amount must be at least 50 cents.');
            }

            $cart = session()->get('cart');

            $totalPriceCents = 0;
            foreach ($cart as $item) {
                $totalPriceCents += $item['product']->price * $item['quantity'] * 100;
            }

            
           

            $line_items = [];
            foreach ($cart as $item) {
                $line_items[] = [
                    'price_data' => [
                        'currency' => 'lkr',
                        'product_data' => ['name' => $item['product']->name],
                        
                        'unit_amount' => $item['product']->price * 100,
                        
                    ],
                    'quantity' => $item['quantity'],
                    
                    
                ];
            }
            

            // Set the Stripe Checkout Session unit amount.
            $response = \Stripe\checkout\Session::create([
                'line_items' => $line_items,
                'mode' => 'payment',
                'allow_promotion_codes' => true,
                'success_url' => route('stripe_success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('stripe_cancel'),
                
            ]);

            echo '<p>Total due: LKR ' . $totalPriceCents / 100 . '</p>';

            

            return redirect()->away($response->url);
        } catch (InvalidRequestException $e) {
            // Catch Stripe-specific exceptions
            Log::error("Stripe Error: " . $e->getMessage());
            return redirect()->route('cart')->with('error', 'There was an error processing your payment.');
        } catch (\Exception $e) {
            // Catch other exceptions
            Log::error("Error: " . $e->getMessage());
            return redirect()->route('cart')->with('error', $e->getMessage());
        }
    }

    public function success(Request $request)
    {
        

        Log::info('Entering success method.');

        try {
            // Set your secret key. Make sure to replace 'your_stripe_secret_key_here' with your actual secret key.
            Stripe::setApiKey(config('stripe.stripe_sk'));
    
            // Retrieve the session ID from the request
            $sessionId = $request->query('session_id');
    
            // Retrieve the session to get details about the payment
            $session = \Stripe\Checkout\Session::retrieve($sessionId);
    
            // Add logic to determine payment status based on the session or other criteria
            $paymentStatus = 'Payment Successful'; // Adjust this based on your actual logic
    
            
            
    
            // Retrieve line items from the session
            $cart = session()->get('cart', []);

            $line_items = $session->display_items;

            
    
            Log::info('Success block executed.');

            
    
            return view('success', [
                'paymentStatus' => $paymentStatus,
                'cart' => $cart,
                'session' => $session,
                'lineItems' => $line_items,
                // Add other data as needed
            ]);
            
        } catch (InvalidRequestException $e) {
            // Catch Stripe-specific exceptions
            Log::error("Stripe Error: " . $e->getMessage());
            return redirect()->route('cart')->with('error', 'There was an error processing your payment.');
        } catch (\Exception $e) {
            // Catch other exceptions
            Log::error("Error in success method: " . $e->getMessage());
            return redirect()->route('cart')->with('error', 'There was an error processing your payment.');
        }

}    
    

    

    
    

    public function cancel()
    {
        // Handle cancellation
    }

    

    public function downloadReceipt(Request $request)
    {
        try {
            Stripe::setApiKey(config('stripe.stripe_sk'));
            // Retrieve the session ID from the request
            $sessionId = $request->query('session_id');
            
            Log::info("Session ID: $sessionId");

            $session = \Stripe\Checkout\Session::retrieve($sessionId);

            Log::info("Session Data: " . json_encode($session));

            // Retrieve the cart and other data as needed
            $cart = session()->get('cart', []);
            
            

            
    
            // Render the HTML content
            $html = view('receipt', [
                'paymentStatus' => 'Payment Successful',
                'cart' => $cart,
                'session' => $session,
            ])->render();
    
            // Generate the PDF content
            $pdf = SnappyPdf::loadHTML($html);
    
            // Download the PDF
            return $pdf->download('receipt.pdf');
        } catch (\Exception $e) {
            // Handle exceptions, log errors, and redirect as needed
            Log::error("Error in downloadReceipt method: " . $e->getMessage());
        }
    }

    
    

}





    



    








