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
    

    
    
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>