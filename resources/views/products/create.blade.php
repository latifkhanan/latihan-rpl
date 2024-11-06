<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Create a Product</title>
</head>
<body>

<h1>Create a Product</h1>
<form method="post" action="{{route('products.store')}}">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Name" />
    </div>
    <div>
        <label>Qty</label>
        <input type="text" name="qty" placeholder="Qty" />
    </div>
    <div>
        <label>Price</label>
        <input type="text" name="price" placeholder="Price" />
    </div>
    <div>
        <label>Description</label>
        <input type="text" name="description" placeholder="Description" />
    </div>
    <input type="submit" value="Create Product" />
</form>

</body>
</html>
