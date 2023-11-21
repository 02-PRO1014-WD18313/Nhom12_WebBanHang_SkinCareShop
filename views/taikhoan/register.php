
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

.container {
    max-width: 400px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

h1 {
    text-align: center;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] ,
input[type="email"]{
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 10px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: #fff;
    border: none;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Đăng ký</h1>
        <form >
            <label for="username">Tên đăng nhập</label>
            <input type="text" id="username" name="username" required>

            <label for="sdt">Số điện thoại</label>
            <input type="text" id="sdt" name="sdt" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password" required>

            <label for="password">Nhập lại mật khẩu</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Đăng ký</button>
        </form>
        <p>Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
    </div>
</body>
</html>