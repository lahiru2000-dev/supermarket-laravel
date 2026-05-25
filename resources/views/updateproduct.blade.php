<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="/updateproducts" method="post">
            {{csrf_field()}}
            <br>
            <br>
            <label for="name">Product:</label>
            <input type="text" class="form-control" name="name" value="{{ $productdata->name }}"/>
            <br>
            <label for="category">Category:</label>
            <input type="text" class="form-control" name="category" value="{{ $productdata->category }}"/>
            <br>
            <label for="price">Price:</label>
            <input type="text" class="form-control" name="price" value="{{ $productdata->price }}"/>
            <br>
            <label for="quantity">Quantity:</label>
            <input type="text" class="form-control" name="quantity" value="{{ $productdata->quantity }}"/>
            <br>
            <input type="hidden" name="id" value="{{$productdata->id}}"/>
            <input type="submit" class="btn btn-warning" value="Update"/>
            &nbsp;&nbsp;<input type="button" class="btn btn-danger" value="cancel"/>
        </form>
    </div>
        
    
</body>
</html>