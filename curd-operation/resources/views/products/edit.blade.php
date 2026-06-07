<h2>Edit Product</h2>

<form action="/products/{{ $product->id }}" method="POST">
    @csrf
    @method('PUT')

    <input
        type="text"
        name="name"
        value="{{ $product->name }}"
    >

    <input
        type="number"
        name="price"
        value="{{ $product->price }}"
    >

    <button type="submit">
        Update
    </button>
</form>