<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <link rel="stylesheet" href="dangky.css">
</head>
    <style>
        /* body{
    background-color: rgb(247, 230, 232);
} */
form {
    max-width: 400px;
    margin: 0 auto;
    padding: 1rem;
    border: 1px solid #0d0c0c;
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 0.5rem;
}
h1,h2{
    text-align: center;
}
input[type="text"],
input[type="password"],
input[type="email"],
button {
    width: 90%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    width: 120px;
    margin-left: 30%;
    border-radius: 50px;
    background-color: #c73333;
    
    cursor: pointer;
    text-align: center;
}
button a{
    color: #fff;
    text-decoration: none;
}

button:hover {
    background-color: #555;
}
    </style>
<body>
    <section>
        <h2>Đăng ký tài khoản</h2>
        <form action="#" method="post">
            <label for="new-username">Tên đăng nhập:</label>
            <input type="text" placeholder="Mời bạn nhập tên" id="new-username" name="new-username" required>

            <label for="new-password">Mật khẩu:</label>
            <input type="password" placeholder="Mời bạn nhập mật khẩu" id="new-password" name="new-password" required>

            <label for="email">Email:</label>
            <input type="email" placeholder="Mời bạn nhập email" id="email" name="email" required>

            <button type="submit"><a href="../view/dangnhap.php">Đăng ký</a></button>
        </form>
    </section>
</body>

</html>
