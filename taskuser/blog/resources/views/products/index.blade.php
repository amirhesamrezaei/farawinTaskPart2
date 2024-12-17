<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست محصولات</title>
</head>
<body>

    <h1>محصولات</h1>

    <!-- فرم جستجو -->
    <form action="{{ url('/products/search') }}" method="GET">
        <input type="text" name="query" placeholder="جستجو محصول..." required>
        <button type="submit">جستجو</button>
    </form>

    <h2>محصولات موجود</h2>
    <table border="1">
        <thead>
            <tr>
                <th>نام محصول</th>
                <th>توضیحات</th>
                <th>قیمت</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="{{ route('products.create') }}">ایجاد محصول جدید</a>

</body>
</html>
