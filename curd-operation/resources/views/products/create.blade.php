<h2>Add Product</h2>

<form action="/products" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Product Name">

    <input type="number" name="price" placeholder="Price">

    <button type="submit">Save</button>
</form>