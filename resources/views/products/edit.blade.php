<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT') <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Product Name" 
        value="{{ old('name', $product->name)}}" required>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description"  class="form-control" placeholder="Enter Product Description"  rows="10" required> {{ old('name', 
        $product->description)}} </textarea>
    </div>

<button type="submit" class="btn btn-primary">Update Product</button>
</form>