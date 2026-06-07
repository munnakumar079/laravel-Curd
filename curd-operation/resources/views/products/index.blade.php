<h2>All Products</h2>

<a href="/products/create">Add Product</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>

            <a href="/products/{{ $product->id }}/edit">
                Edit
            </a>

            <form action="/products/{{ $product->id }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Delete
                </button>
            </form>

        </td>
    </tr>
    @endforeach
</table>