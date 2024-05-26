@foreach ($products as $product)
    <h2>{{ $product->name }}</h2>
    <h4>{{ $product->description }}</h4>
    <a href="{{ url('products/'.$product->id. '/edit') }}">Edit</a>
    <br>
    <a href="{{ route('products.create') }}">Create</a>
    <form action="{{ url('products/'.$product->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>

@endforeach

