
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        section
        {
            margin-top: 100px;
            position: relative;
            width: 100%;
            height: 100vh;
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login
        {
            position: relative;
            width: 440px;
            background: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #fff;
            border:2px solid #3a5d4c;
        }

        .login h2
        {
            text-align: center;
            color: #FF6633;
            font-size: 2em;
            color: #3a5d4c;
        }

        .input-box 
        {
            position: relative;
            width: 100%;
            height: 50px;
            margin-bottom: 20px;
        }

        .input-box .input
        {
            width: 100%;
            height: 50px;
            border: 2px solid #FF6633;
            border-radius: 40px;
            background: transparent;
            outline: none;
            padding: 0 20px;
            color: black;
            background-color: #fff;
            border:2px solid #3a5d4c;
        }

        .input-box .icon
        {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #FF6633;
        }

        .remember-forgot
        {
            color: #3a5d4c;
            display: flex;
            justify-content: space-between;
            font-weight: 500;
            margin: 15px 0;
        }

        .remember-forgot a
        {
            color: #3a5d4c;
            text-decoration: none;
        }

        .remember-forgot a:hover
        {
            text-decoration: underline;
        }

        .buttum
        {
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 40px;
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 20px;
            transition: .5s;
            background-color: #FF6633;
            color: #fff;
            cursor: pointer;
            background-color: #3a5d4c;
            border: 2px solid black;
        }
        .buttum:hover{
            background-color: #fff;
            color: black;
        }

        .register-link
        {
            display: flex;
            justify-content: center;
            color: #3a5d4c;
            font-weight: 600;
        }

        .register-link a
        {
            text-decoration: none;
            color: #3a5d4c;
            margin-left: 5px;
        }

        .register-link a:hover
        {
            text-decoration: underline;
        }
    </style>
</head>
<body>  
    <section class="home">
        <div class="login">
            <h2> Đăng nhập </h2>
            <form action="index.php?act=dangnhap" method="POST">
                <div class="input-box">
                    <input type="text" name="user" class="input" placeholder="Enter user name" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="password" name="pass" class="input" placeholder="Enter your password" autocomplete="off" required>
                </div>
                <div class="remember-forgot">
                    <label> <input type="checkbox"> Nhớ</label>
                    <a href="index.php?act=quenmk"> Quên Mật Khẩu </a>
                </div>
                <input class="buttum" type="submit" value="Đăng nhập" name="dangnhap">
                <div class="register-link">
                    <p> Not a member?</p>
                    <a href="index.php?act=dangky"> Đăng ký tài khoản</a>
                </div>
            </form>
            <p class="thongbao">
                <?php

                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
            ?>
            </p>
        </div>
    </section>
</body>
</html>
