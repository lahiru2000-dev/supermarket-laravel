<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <style>
        .login-register-buttons {
            position: absolute;
            top: 10px;
            right: 20px; 
        }
    </style>
</head>
<body>

         <!----------------navbar------------>
    <div class="nav-controller">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/home">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/user">Dashboard</a>
                <a class="nav-item nav-link" href="/cart">Shopping cart</a>
                <a class="nav-item nav-link" href="/">Admin</a>
            </div>
                <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('searchProducts') }}">
                    {{csrf_field()}}
                <div class="search-controller">
                    <input  class="form-control mr-sm-2" name="searchTerm" placeholder="Search for products">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
                    
                </form>
            </div>
        </nav>

    </div>
    
     
    <!-------------nav bar end--------->
    <div class="login-register-buttons">
            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
            @else
                <a href="#" class="btn btn-outline-primary"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
    </div>

    <div class='container'>
    <div class='text-center'>
        <h1>Product Manager</h1>
            <div class='row'>
                <div class='col-md-12'>
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                    @endforeach
                    <form method='Post' action="{{ route('saveProduct') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="input-group"  style="display: flex;">
                            <input type='text' class='form-control' name='name' placeholder='Enter product name;' style="width: 800px;  background-color: transparent; border: 1px solid #ccc; border-radius: 5px;" onfocus="this.style.color='white';" onblur="this.style.color='black';">
                        </div>
                       
                        <br>
                        <input type='text' class='form-control' name='price' placeholder='Enter price' style="width: 800px;  background-color: transparent; border: 1px solid #ccc; border-radius: 5px;" onfocus="this.style.color='white';" onblur="this.style.color='black';">
                        <br>
                        <input type='text' class='form-control' name='quantity' placeholder='Enter quantity' style="width: 800px;  background-color: transparent; border: 1px solid #ccc; border-radius: 5px;" onfocus="this.style.color='white';" onblur="this.style.color='black';">
                        <br>
                        <input type='text' class='form-control' name='category' placeholder='Enter category' style="width: 800px;  background-color: transparent; border: 1px solid #ccc; border-radius: 5px;" onfocus="this.style.color='white';" onblur="this.style.color='black';">
                        <br>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                        <input type='submit' class='btn btn-primary' value='SAVE'>
                        <input type='button' class='btn btn-warning' value='Clear'>
                    </form>
                    <br>
                    <br>
                        <table class="table table-dark">
                            <th>ID</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>price</th>
                            <th>quantity</th>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>
                                    
                                        @if($product->image)
                                        <img src="{{ asset('storage/product_images/' . $product->image) }}" alt="{{$product->name}} Image" width="50" height="50" class="img img-responsive"/>

                                        @endif
                                    </td>
                                    <td>
                                        <a href="/deleteproduct/{{$product->id}}" class="btn btn-warning">Delete</a>
                                    </td>
                                    <td>
                                    <a href="/updateproduct/{{$product->id}}" class="btn btn-success">Update</a>
                                    </td>
                                </tr>

                            @endforeach
                            
                        </table>
                    <br>
                    <br>
                    
                </div>
            </div>
    </div>
    </div>
    
</body>
</html>
</body>
</html>