<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add T-shirt</title>
</head>
<body>

<h1>Add a New T-shirt</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form action="{{ route('tshirts.store') }}" method="POST">
    @csrf
    <div>
        <label for="size">Size:</label>
        <input type="text" name="size" id="size" required>
    </div>

    <div>
        <label for="color">Color:</label>
        <input type="text" name="color" id="color" required>
    </div>

    <div>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" required>
    </div>

    <button type="submit">Add T-shirt</button>
</form>

</body>
</html>
