<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
    * {
        
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }
    /* body{
        background-color: rgb(247, 230, 232);
    } */

    .container {
        width: 330px;
        height: 400px;
        margin: auto;
        margin-top: 100px;
        padding: 10px 10px;
        border: none;
        border-radius: 10px;
        /* background-color: rgb(247, 230, 232); */
        border: 1px solid #0d0c0c;
    border-radius: 5px;
    }

    h2 {
        
        text-align: center;
        font-size: 30px;
        font-family: Asap;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .form-group {
        margin: 20px 20px;
       
    }

    .form-group>input {
        width: 250px;
        height: 35px;
        border: none;
        border-radius: 5px;
        border: 1px solid black;
    }

    .checkbox{
        display: flex;
        justify-content:space-between;
        margin: 20px;
    }
    
    .submit {
        text-align: center;
        line-height: 50px;
    }

    .submit>button {
        margin-top: 20px;
        width: 150px;
        height: 35px;
        
        border: none;
        border-radius: 15px;
        background-color: #c73333;
        
        
        
    }
    .submit button a{
        text-decoration: none;
        color:white;
        font-family: Asap;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
    }
   
    </style>
</head>
<body>
    <div class="container">
        <h2>Đăng Nhập</h2>
        <form action="#">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="checkbox">
                <div class="text">
                <input type="checkbox" name="" id=""> Lưu tài khoản
                </div>
                <a href="http://">Quên mật khẩu?</a>
            </div>
            
            <div class="submit">
                <button type="submit"><a href="../view/trangchu.php">Đăng Nhập</a></button>
            </div>
        </form>
        <div class="form-group" style="text-align: center;" >
            <a href="../view/dangky.php" target="_blank">Bạn chưa có tài khoản?</a>
        </div>
    </div>
</body>
</html>