<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #fbc2eb, #a6c1ee);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            width: 400px;
            text-align: center;
        }

        .register-container h2 {
            margin-bottom: 24px;
            color: #333;
        }

        .register-container input {
            width: 100%;
            padding: 12px 16px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        .register-container button {
            width: 100%;
            padding: 12px;
            background-color: #8e44ad;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .register-container button:hover {
            background-color: #732d91;
        }

        .register-container a {
            display: block;
            margin-top: 16px;
            color: #8e44ad;
            text-decoration: none;
        }

        .register-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Đăng ký</h2>
        <form method="POST" action="{{ url('register') }}">
            @csrf
            <input type="text" name="name" id="name" placeholder="Username" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Mật khẩu" required><br>
            <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" required><br>
            <button type="submit">Đăng ký</button>
        </form>
        <a href="{{ route('login') }}">Đăng nhập</a>
    </div>
</body>
</html>
