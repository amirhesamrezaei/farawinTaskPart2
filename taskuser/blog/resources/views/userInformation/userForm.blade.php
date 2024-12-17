<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت اطلاعات کاربر</title>
    <style>
        /* استایل برای کل صفحه */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* استایل برای فرم */
        .form-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-group textarea {
            resize: none;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #0056b3;
        }

        /* استایل برای دستگاه‌های کوچک‌تر */
        @media (max-width: 500px) {
            .form-container {
                padding: 15px;
            }

            .form-container h1 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>فرم ثبت اطلاعات</h1>
        <form action="/formuser2" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name">نام:</label>
                <input type="text" id="first_name" name="first_name" placeholder="نام خود را وارد کنید" required>
            </div>
            <div class="form-group">
                <label for="last_name">نام خانوادگی:</label>
                <input type="text" id="last_name" name="last_name" placeholder="نام خانوادگی خود را وارد کنید" required>
            </div>
            <div class="form-group">
                <label for="number">شماره تماس:</label>
                <input type="text" id="number" name="number" placeholder="09123456789" required>
            </div>
            <div class="form-group">
                <label for="address">آدرس:</label>
                <textarea id="address" name="address" rows="4" placeholder="آدرس خود را وارد کنید" required></textarea>
            </div>
            <div class="form-group">
                <label for="email">Gmail:</label>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
            </div>
            <button type="submit">ارسال</button>
        </form>
    </div>
</body>
</html>
