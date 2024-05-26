<form action="{{ url('products') }}" method="post">
@csrf
<input type="text" name="name" placeholder="name" required>
<textarea name="description" placeholder="description" id="" colse="30" rows="10" required></textarea>
<button type="submit"> Create </button>
</form>
