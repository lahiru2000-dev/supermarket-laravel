<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        

        .alert-heading {
            font-size: 1.5rem;
        }

        table {
            margin-top: 20px;
        }

        .total-amount {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .payment-details {
            margin-top: 20px;
            border: 2px solid black;
            border-radius: 10px;
            padding: 15px;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Payment Successful!</h4>
            <p>Payment Status: {{ $paymentStatus }}</p>
        </div>

        <h2>Items Purchased:</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Unit Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $productId => $item)
                    <tr>
                        <td>{{ $item['product']->name }}</td>
                        <td>Rs.{{ $item['product']->price }}</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>Rs.{{ $item['product']->price * $item['quantity'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-right total-amount">
            <strong>Total Amount: Rs.{{ number_format($session->amount_total / 100, 2) }}</strong>
        </div>

        <div class="payment-details">
            <h2>Payment Details:</h2>
            <p>Total Amount Paid: Rs.{{ number_format($session->amount_total / 100, 2) }}</p>
            <p>Payment Method: {{ $session->payment_method_types[0] }}</p>
            
            <p>Payment Time: {{ \Carbon\Carbon::createFromTimestamp($session->created)->toDateTimeString() }}</p>
        </div>
    </div>
    

    

    <div style="display: flex; justify-content: center; align-items: center;">
        <a href="#" id="downloadPaymentDetails" download="payment_details.txt" class="btn btn-primary">Download Payment Details</a>
    </div>

    <script>
        document.getElementById('downloadPaymentDetails').addEventListener('click', function () {
            // Construct the payment details content
            var paymentDetailsContent = "Payment Successful!:\n";

            paymentDetailsContent += "Items Purchased:\n";
            paymentDetailsContent += "Product Name\tUnit Price\tQuantity\tSubtotal\n";
            paymentDetailsContent += "Richlife flavoured milk(chocolate) 180ml\tRs.150\t1\tRs.150\n";
            paymentDetailsContent += "Bairaha chicken meatballs 200g\tRs.350\t2\tRs.700\n";

            // Add the total amount to the content
            paymentDetailsContent += "\nTotal Amount: Rs.850.00\n";

            // Add the payment details to the content
            paymentDetailsContent += "\nPayment Details:\n";
            paymentDetailsContent += "Total Amount Paid: Rs.850.00\n";
            paymentDetailsContent += "Payment Method: card\n";
            paymentDetailsContent += "Payment Time: 2023-11-15 10:17:05\n";

            // Create a Blob with the payment details content
            var blob = new Blob([paymentDetailsContent], { type: 'text/plain' });

            // Create a link element to trigger the download
            var a = document.createElement('a');
            a.href = URL.createObjectURL(blob);
            a.download = 'payment_details.txt';

            // Append the link element to the document and trigger a click
            document.body.appendChild(a);
            a.click();

            // Remove the link element
            document.body.removeChild(a);
        });
    </script>


    
    

    
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>



