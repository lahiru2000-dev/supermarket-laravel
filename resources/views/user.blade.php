<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product page</title>
    

    <style>
    
    .search-controller{
        position: absolute;
        right:670px;
    }
    
                                                       
    .login-register-buttons {
        position: absolute;
        top: 10px;
        right: 20px; 
    }

    .product-card{
        width: 340px;
        height: 500px;
    }

    .product-card-category{
        width: 250px;
        height: 500px;
        box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.4); /* Increased values for a more visible shadow */
        transition: box-shadow 0.3s ease;
        
    }

    .product-card-category:hover {
        box-shadow: 0px 16px 32px rgba(0, 0, 0, 0.5); /* Adjusted values for the hover effect */
    }

    .product-card{
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4); /* Increased values for a more visible shadow */
        transition: box-shadow 0.3s ease;
        
    }



    
    
    
   /*-------------------------navbar-------------------*/

    .nav-logo {
        margin-bottom: 5px;
    }
    .nav-logo img {
        max-width: 50px;
    }
    .dropdown-menu{
        color: white;
    }
    
    


    /*-----------------------------navbar end-----------------------------*/

    .product-card .small-text {
    font-size: 14px; 
    color: #555; 
}

    .image-container {
    position: relative;
    display: inline-block;
    
}

    .view-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.3s ease;
    background-color:#333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}
.view-button:hover {
    background-color: #555; /* Darker background color on hover */
}

.image-container:hover .category-image{
    filter: brightness(50%);
}

    .image-container:hover .view-button {
    opacity: 1;
}

/*  ------animation----*/
@keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px) rotate(0.5deg); }
    50% { transform: translateX(5px) rotate(-0.5deg); }
    75% { transform: translateX(-5px) rotate(0.5deg); }
    100% { transform: translateX(0); }
}


.product-image:hover {
    animation: shake 0.5s;
}









/*-----------------------------------------slider--------------------*/
.slider-container {
    background-color: #000; /* Set the background color to match your slides */
    overflow: hidden; /* Ensure overflow is hidden */
    position: relative;
    
}



.carousel-inner {
    height: 600px; /* Adjust this value to your desired height */
    overflow: hidden;/*new*/
   
}

.carousel-item {
    
    height: 600px; /* Adjust this value to your desired height */
}



/* Center the images vertically within the slider */
.carousel-item img {
    object-fit: cover;
    height: 100%;
}
/*-----------------------special product section------------*/ 
.special-carousel-inner {
    height: 350px; 
    
}

.special-slide {
    height: 350px; 
}


.special-carousel-item img {
    object-fit: cover;
    height: 100%;
}




/*----------------------carousal end-------------------------*/

.special-product-card {
    max-width: 100%;
}

 /*------------------------------------------footer--------------------*/
 ul {
            margin: 0px;
            padding: 0px;
        }
        .footer-section {
        background: #151414;
        position: relative;
        }
        .footer-cta {
        border-bottom: 1px solid #373636;
        }
        .single-cta i {
        color: #ff5e14;
        font-size: 30px;
        float: left;
        margin-top: 8px;
        }
        .cta-text {
        padding-left: 15px;
        display: inline-block;
        }
        .cta-text h4 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 2px;
        }
        .cta-text span {
        color: #757575;
        font-size: 15px;
        }
        .footer-content {
        position: relative;
        z-index: 2;
        }
        .footer-pattern img {
        position: absolute;
        top: 0;
        left: 0;
        height: 330px;
        background-size: cover;
        background-position: 100% 100%;
        }
        .footer-logo {
        margin-bottom: 30px;
        }
        .footer-logo img {
            max-width: 200px;
        }
        .footer-text p {
        margin-bottom: 14px;
        font-size: 14px;
            color: #7e7e7e;
        line-height: 28px;
        }
        .footer-social-icon span {
        color: #fff;
        display: block;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
        }
        .footer-social-icon a {
        color: #fff;
        font-size: 16px;
        margin-right: 15px;
        }
        .footer-social-icon i {
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
        }
        .facebook-bg{
        background: #3B5998;
        }
        .twitter-bg{
        background: #55ACEE;
        }
        .google-bg{
        background: #DD4B39;
        }
        .footer-widget-heading h3 {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 40px;
        position: relative;
        }
        .footer-widget-heading h3::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: -15px;
        height: 2px;
        width: 50px;
        background: #ff5e14;
        }
        .footer-widget ul li {
        display: inline-block;
        float: left;
        width: 50%;
        margin-bottom: 12px;
        }
        .footer-widget ul li a:hover{
        color: #ff5e14;
        }
        .footer-widget ul li a {
        color: #878787;
        text-transform: capitalize;
        }
        .subscribe-form {
        position: relative;
        overflow: hidden;
        }
        .subscribe-form input {
        width: 100%;
        padding: 14px 28px;
        background: #2E2E2E;
        border: 1px solid #2E2E2E;
        color: #fff;
        }
        .subscribe-form button {
            position: absolute;
            right: 0;
            background: #ff5e14;
            padding: 13px 20px;
            border: 1px solid #ff5e14;
            top: 0;
        }
        .subscribe-form button i {
        color: #fff;
        font-size: 22px;
        transform: rotate(-6deg);
        }
        .copyright-area{
        background: #202020;
        padding: 25px 0;
        }
        .copyright-text p {
        margin: 0;
        font-size: 14px;
        color: #878787;
        }
        .copyright-text p a{
        color: #ff5e14;
        }
        .footer-menu li {
        display: inline-block;
        margin-left: 20px;
        }
        .footer-menu li:hover a{
        color: #ff5e14;
        }
        .footer-menu li a {
        font-size: 14px;
        color: #878787;
        color: #878787;}
        .img-fluid{
            max-width:150px;
            max-height:150px;
            border-radius: 50%;
        }

        .special-product-card {
            max-width: 150px;
            margin: 0 10px 20px 10px;
        }

        .special-product-image {
            max-width: 100%;
            max-height: 80%;
        }

        .card-body {
            height: 100px;
            overflow-y: auto;
        }

        .card-footer {
            text-align: center;
        }

        .dt-container {
            color: #fff; 
            text-shadow: 0 0 10px #0ff, 0 0 20px #0ff, 0 0 30px #0ff; 
            font-family: arial;
            font-weight: bold;
            border:1px solid #FFD700;
            width:340px;
            padding:10px;
            margin-left: auto;
            margin-right: 300px;
        }

        .footer-logo{
            margin-left: 130px;
            margin-right: auto; 
        }

        

        

        

        .quantity-input {
            width: 40px;
            margin-right: 5px;
            margin-left:10px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Align items vertically in the center */
        }

        .cart-icon {
            order: 1;
            margin-right: 20px;
        }

        .navbar a:nth-last-child(2) {
            margin-right: 20px; 
        }

        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            }

        
        .nav-item {
            position: relative;
            display: inline-block;
        }
        
        .dropdownz {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            background-color: grey;
        }

        .nav-item:hover .dropdownz {
            display: block;
        }  

        /*--------------------scroll up button-------*/

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 30px;
            border: none;
            outline: none;
            background-color: blue;
            color: white;
            cursor: pointer;
            padding: 10px;
            border-radius: 4px;
            animation: glow 1.5s infinite; /* Add the glowing effect */
            }

        #myBtn:hover {
            background-color: #555;
            }
        

            @keyframes glow {
                0% {
                    box-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff; /* Define the glow effect */
                }
                50% {
                    box-shadow: 0 0 20px #fff, 0 0 25px #fff, 0 0 30px #fff;
                }
                100% {
                    box-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff;
                }
                }


                .category-heading {
                    text-align: center;
                    position: relative;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
                }

                .category-heading h2 {
                    display: inline-block;
                    position: relative;
                    padding: 0 20px;
                    background-color:white; 
                    color: #3498db;; 
                    font-size: 24px; 
                    z-index: 1; 
                }

                .category-heading::before,
                .category-heading::after {
                    content: '';
                    position: absolute;
                    top: 50%;
                    width: 100%;
                    height: 1px; /* Line thickness */
                    background-color: #3498db; /* Line color */
                    z-index: 0; /* Behind the text */
                }

                .category-heading::before {
                    left: 0;
                }

                .category-heading::after {
                    right: 0;
                }


                .special-container {
                    text-align: center;
                    margin: 20px;
                }

                .special-text {
                    font-family: 'Poppins', sans-serif; /* Use a modern font, you can replace 'Poppins' with any other font */
                    font-size: 2em;
                    font-weight: bold;
                    position: relative;
                    display: inline-block;
                    padding: 0 20px;
                    color: black; /* Adjust text color */
                    text-shadow: 0 0 10px #00ff00; /* Add text shadow */
                }

                .special-line {
                    height: 2px;
                    width: 100%;
                    background-color: #00ff00; /* Adjust line color */
                    position: absolute;
                    top: 50%;
                    z-index: -1;
                }

                

        

        



    

    

</style>

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="..." crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="..." crossorigin="anonymous"></script>
    
   




</head>

<body onLoad="renderTime();">
    <!---------------------------------date and time script------------------------>
    <script>
        function renderTime(){
            //date
            var mydate = new Date();
            var year =mydate.getYear();
                if(year <1000){
                    year +=1900
                }
            var day = mydate.getDay();
            var month =mydate.getMonth();
            var daym = mydate.getDate();
            var dayarray = new Array("Sunday,","Monday,","Tuesday,","Wednesday,","Thursday,","Friday,","Saturday,");
            var montharray= new Array("January","February","March","April","May","June","July","August","September","October","November","December");
            //date end

            //Time
            var currentTime= new Date();
            var h= currentTime.getHours();
            var m= currentTime.getMinutes();
            var s= currentTime.getSeconds();
                if(h==24){
                    h=0;
                }else if(h>12){
                    h=h-0;
                }

                if(h<10){
                    h="0"+h;
                }
                if(m<10){
                    m="0"+m;
                }
                if(s<10){
                    s="0"+s;
                }
                var myClock=document.getElementById("clockDisplay");
                myClock.textContent=""+dayarray[day]+" "+daym+" "+montharray[month]+" "+year+" | "+h+":"+m+":"+s;
                myClock.innerText=""+dayarray[day]+" "+daym+" "+montharray[month]+" "+year+" | "+h+":"+m+":"+s;

                setTimeout("renderTime()",1000);
        } 
        renderTime();      
    </script>
    <!----------------navbar------------>
    <div class="nav-controller">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav-logo">
                <a href="index.html"><img src="logo/supermarket.jpg" class="img-fluid" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="/user">Dashboard</a>
                
                <a class="nav-item nav-link" href="/admin">Admin</a>
                
                </a>
                <a class="nav-item nav-link cart-icon" href="/cart">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge bg-danger">
                        {{ array_reduce(session('cart', []), function($carry, $item) {
                            return $carry + $item['quantity'];
                        }, 0) }}
                    </span>
                    <div class="dropdownz">
                    @if(!empty($cart) && count($cart) > 0)
                    <ul>
                        @foreach($cart as $productId => $item)
                        <li>
                            <span>{{ $item['product']->name }}</span>
                            <span>Rs.{{ $item['product']->price }}</span>
                            <span>{{ $item['quantity'] }}</span>
                            <span>Rs.{{ $item['product']->price * $item['quantity'] }}</span>
                        </li>
                        @endforeach
                    </ul>
                    @else
                        
                    @endif
                    </div>
                </a>

                
                    
                

                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script>
                    
                    $(document).ready(function() {
                        $('.cart-icon').hover(function() {
                            $('.dropdownz').toggle();
                        });
                    });
                </script>

                <!------------------------scroll up button---------------------->
                <button onclick="topFunction()" id="myBtn" title="Go to top">▲</button>
                
                <script>
                    // Get the button
                    let mybutton = document.getElementById("myBtn");

                    // When the user scrolls down 20px from the top of the document, show the button
                    window.onscroll = function() {scrollFunction()};

                    function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        mybutton.style.display = "block";
                    } else {
                        mybutton.style.display = "none";
                    }
                    }

                    // When the user clicks on the button, scroll to the top of the document
                    function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                    }
                </script>
                
                







                
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="categoryDropdown" style="background-color: #343a40;  ">
                    <!-- Add category-related links here -->
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'Chocolate') }} " style="color:grey;">Chocolate</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'biscuit') }}" style="color:grey;">Biscuit</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'bakery') }}" style="color:grey;">Bakery</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'beverages') }}" style="color:grey;">Beverages</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'diary food') }}" style="color:grey;">Diary Food</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'household') }}" style="color:grey;">Household</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'instant food') }}" style="color:grey;">Instant Food</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'meat') }}" style="color:grey;">Meat</a>
                        <a class="dropdown-item" href="{{ route('showProductsByCategory', 'fruit') }}" style="color:grey;">Fruit</a>
                
                    </div>
                </li>
                
                <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('searchProducts') }}">
                    {{csrf_field()}}
                <div class="search-controller">
                    <input  class="form-control mr-sm-2" name="searchTerm" placeholder="Search for products">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </div>
                    
                </form>
                
            </div>
            <div id="clockDisplay" class="dt-container"></div>
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



    
    <!-----------------image-slider-------------->

    <div class="slider-container" style="position: relative;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/slide-image/pepsi.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/slide-image/icecream2-slide.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/slide-image/cokee-slide.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/slide-image/meat2.jpg" alt="Fourth slide">
                </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
              
        
    </div>

    
    <!-------------------end of emage slider-------------->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>    


   
    
    <div class='container' >
            <div class="row">
                <div class='col-md-12 text-center'>
                     
                

                </div> 
            </div>
            <br>
            <br>
            
            
            
            
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
        </div>
        
            <br>
            <br>
        @if(isset($products) && count($products) > 0)
            <div class="row">
            
                @foreach($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card product-card" >
                            <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                <img src="{{ asset('storage/product_images/' . $product->image) }}" class="product-image" alt="{{ $product->name }}" width="150" height="180">
                            </div>
                
                            
                            <div class="card-body " style="height: 150px; overflow-y: auto;">
                                <h6 class="card-title text-center product-title" >{{ $product->name }}</h6>
                                <br>
                                
                                <p class="card-text">

                                
                                    
                                    <span class="small-text" style="margin-right: 10px;"><b>Price: Rs.{{ number_format($product->price ,2)}}</b>
                                
                                    
                                    
                                      
                                    &nbsp
                                    &nbsp
                                    &nbsp
                                    &nbsp
                                    &nbsp
                                    @if($product->quantity ==0)
                                        <span class=" text-danger"><b>Out of Stock</b></span>
                                    @else

                                        <span class="product-actions ">
                                            <label for="quantity{{ $product->id }}"><b>Quantity:</b></label>
                                            <input type="number" id="quantity{{ $product->id }}" name="quantity" class="quantity-input" min="1" max="{{ $product->quantity }}" value="1">
                                        </span>
                                    @endif


                                    <div class="product-details" style="display: none;">
                                            
                                        <p>{{ $product->description }}</p>
                                        <p>Category: {{ $product->category }}</p>
                                            
                                    </div>

                                


                                    
                                    
                                    
                                    
                                </p>
                                
                            </div>
                            <div class="card-footer text-center dark-mirror-footer">
                                @if($product->quantity > 0)
                                    <form action="{{ route('addToCart', $product->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="quantity" id="quantity-field{{ $product->id }}" value="1">
                                        <button type="submit" class="btn btn-success">Buy Now</button>
                                    </form>
                                @else
                                    <button class="btn btn-success" disabled>Buy Now</button>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                    <script>
                        // event listener to update the hidden input field when the quantity changes
                        document.getElementById('quantity{{ $product->id }}').addEventListener('change', function () {
                            document.getElementById('quantity-field{{ $product->id }}').value = this.value;
                        });
                    </script>
                @endforeach
            
            </div>
        @endisset

        <!-------------------------------------------------javascript -------------------------->
        
        
        
        <!-------------view by category---------------->
        <br>
        <br>
        <br>
            <!--<div style="text-align:center">
                <h2>shop by category</h2>
            </div>-->

            <div class="category-heading">
                <h2>Shop by Category</h2>
            </div>

            <br>
            <br>
            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="card product-card-category"  >
                        <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                            <div class="image-container">
                                <img src="/category_img/choc_category.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'Chocolate') }}" class="view-button">View</a>
                                
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Chocolate</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card-category"  >
                        <div class="d-flex justify-content-center align-items-center" >
                            <div class="image-container">
                                <img src="/category_img/biscuit-category.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'biscuit') }}" class="view-button">View</a>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Biscuit</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card-category" >
                        <div class="d-flex justify-content-center align-items-center" >
                            <div class="image-container">
                                <img src="/category_img/bakery.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'bakery') }}" class="view-button">View</a>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Bakery</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                

                


            </div>
            <br>
            <br>
            <br>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card product-card-category"  >
                        <div class="d-flex justify-content-center align-items-center" >
                            <div class="image-container">
                                <img src="/category_img/bev_cat.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'beverages') }}" class="view-button">View</a>
                            </div>
                            
                        
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Beverages</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card-category" >
                        <div class="d-flex justify-content-center align-items-center" >
                            <div class="image-container">
                                <img src="/category_img/diary-cat.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'diary food') }}" class="view-button">View</a>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Diary Food</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card-category"  >
                        <div class="d-flex justify-content-center align-items-center" >
                            <div class="image-container">
                                <img src="/category_img/household-cat.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'household') }}" class="view-button">View</a>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Household</h5>
                        </div> 
                    
                    
                    </div>    
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card product-card-category"  >
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="image-container">
                                <img src="/category_img/inst_cat.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'instant food') }}" class="view-button">View</a>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Instant Food</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card-category"  >
                        <div class="d-flex justify-content-center align-items-center" >
                            <div class="image-container">
                                <img src="/category_img/meat-cat.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'meat') }}" class="view-button">View</a>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Meat</h5>
                        </div> 
                    
                    
                    </div>    
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card product-card-category">
                        <div class="d-flex justify-content-center align-items-center" >
                            <div class="image-container">
                                <img src="/category_img/fruit.jpg" class="category-image" alt="" width="250" height="300">
                                <a href="{{ route('showProductsByCategory', 'fruit') }}" class="view-button">View</a>
                            </div>
                            
                        </div>
                        <div class="card-footer text-center">
                            <h5 class="text-center" style="font-family: 'Roboto', sans-serif;">Fruit</h5>
                        </div> 
                    
                    
                    </div>    
                </div>
            </div>
        

    </div>
    <br>
    <br>
    <br>
    <br>
    
    <div class="slider-container" style="position: relative;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="special-carousel-inner">
                <div class="carousel-item active special-slide">
                    <img class="d-block w-100" src="/slide-image/pizza-slide.jpg" alt="First slide">
                </div>
                <div class="carousel-item special-slide">
                    <img class="d-block w-100" src="/slide-image/biriyani.jpg" alt="Second slide">
                </div>
                <div class="carousel-item special-slide">
                    <img class="d-block w-100" src="/slide-image/soupy.jpg" alt="Third slide">
                </div>
                <div class="carousel-item special-slide">
                    <img class="d-block w-100" src="/slide-image/bbq.jpg" alt="Fourth slide">
                </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
    
        <br>
        <br>

        @if(isset($specialProducts) && count($specialProducts) > 0)
            <!--<div style="text-align: center">
                <h2>Family supermarket special</h2>
            </div>-->

            <div class="special-container">
                <div class="special-line"></div>
                <h2 class="special-text">Family supermarket special</h2>
                <div class="special-line"></div>
            </div>
            
            <br>
            <br>
            <div class="table-responsive">
                <div class="d-flex overflow-auto">
                    @foreach($specialProducts as $product)
                        <div class="col-md-4 mb-4 special-product-card">
                            <div class="card product-card">
                                <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                                    <img src="{{ asset('storage/product_images/' . $product->image) }}" class="product-image special-product-image" alt="{{ $product->name }}" width="150" height="180">
                                </div>
                                <div class="card-body" style="height: 150px; overflow-y: auto;">
                                    <h5 class="card-title text-center">{{ $product->name }}</h5>
                                    <p class="card-text">
                                        <span class="small-text">Price: Rs.{{ number_format($product->price, 2) }}</span>

                                        &nbsp
                                        &nbsp
                                        &nbsp
                                        &nbsp
                                        &nbsp
                                        @if($product->quantity ==0)
                                            <span class=" text-danger"><b>Out of Stock</b></span>
                                        @else

                                            <span class="product-actions ">
                                                <label for="quantity{{ $product->id }}"><b>Quantity:</b></label>
                                                <input type="number" id="quantity{{ $product->id }}" name="quantity" class="quantity-input" min="1" max="{{ $product->quantity }}" value="1">
                                            </span>
                                        @endif


                                        <div class="product-details" style="display: none;">
                                                
                                            <p>{{ $product->description }}</p>
                                            <p>Category: {{ $product->category }}</p>
                                                
                                        </div>
                                        
                                    </p>
                                </div>
                                
                                <div class="card-footer text-center dark-mirror-footer">
                                    @if($product->quantity > 0)
                                        <form action="{{ route('addToCart', $product->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="quantity" id="quantity-field{{ $product->id }}" value="1">
                                            <button type="submit" class="btn btn-success">Buy Now</button>
                                        </form>
                                    @else
                                        <button class="btn btn-success" disabled>Buy Now</button>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        <script>
                        
                        document.getElementById('quantity{{ $product->id }}').addEventListener('change', function () {
                            document.getElementById('quantity-field{{ $product->id }}').value = this.value;
                        });
                    </script>
                    @endforeach
                </div>
               
            </div>
            <script>
                function scrollProducts(amount) {
                    $("#productContainer").animate({
                        scrollLeft: $("#productContainer").scrollLeft() + amount
                    }, "slow");
                }
            </script>
        
        @endif
        
            

  
    <br>
    <br>
    <br>

     <!------------------------footer------------------------>
     <div class="footer">
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>+94 76 475 8136</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>lahiru123@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo" >
                                <a href="index.html"><img src="logo/supermarket.jpg" class="img-fluid" alt="logo"></a>
                            </div>
                            <br>
                            <br>
                            
                            <div class="footer-social-icon text-center" style="text-align: center; ">
                                <span>Follow us</span>
                                <a href="#" ><i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i></a>
                                <a href="#" ><i class="fab fa-twitter fa-2x" style="color: #55acee;"></i></a>
                                <a href="#"><i class="fab fa-google fa-2x" style="color: #dd4b39;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/aboutus">about us</a></li>
                                <li><a href="/user">Dashboard</a></li>
                                <li><a href="/cart">Shopping cart</a></li>
                                <li><a href="/contactus">Contact us</a></li>                            
                                
                            </ul>
                        </div>
                        
                        
                    </div>
                    
                    
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="/contactus">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <!-----------------------------end of footer------------------->
    </div>

    
</body>
</html>