<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ایجاد محصول جدید</title>
</head>
<body>

    <h1>فرم ایجاد محصول جدید</h1>

    <form action="{{ url('/products') }}" method="POST">
        @csrf
        <label for="name">نام محصول</label>
        <input type="text" name="name" required><br>

        <label for="description">توضیحات</label>
        <textarea name="description" required></textarea><br>

        <label for="price">قیمت</label>
        <input type="text" name="price" required><br>

        <button type="submit">افزودن محصول</button>
    </form>

</body>
</html>
