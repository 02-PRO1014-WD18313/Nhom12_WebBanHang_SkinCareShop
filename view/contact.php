<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trang Liên Hệ</title>
<style>
  /* body {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color: #333;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
  } */
  .contact-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    align-items: start;
    margin-bottom: 20px;
  }
  .map-container, .contact-info, .contact-form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  }
  h2 {
    color: #3366FF;
    font-weight: 300;
    margin-top: 0;
  }
  p {
    line-height: 1.6;
  }
  .map-container iframe {
    width: 100%;
    max-height: 250px;
    border-radius: 8px;
  }
  .contact-form input, .contact-form textarea {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  .contact-form input[type=submit] {
    background-color:  #3366FF;
    color: white;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .contact-form input[type=submit]:hover {
    background-color: #3f51b5;
  }
</style>
</head>
<body>

<div class="contact-container">
    <div class="map-container">
        <h2>BẢN ĐỒ</h2>
        <!-- Embedded Google Map -->
        <!-- Make sure to replace the src with your actual Google Maps link -->
        <iframe src="https://www.google.com/maps/dir/21.0277644,105.8341598/21.0102501,105.8354721/@21.0189311,105.8228805,15z/data=!3m1!4b1!4m5!4m4!1m1!4e1!1m0!3e0?entry=ttu" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="contact-info">
        <h2>ĐỊA CHỈ</h2>
        <p>CÔNG TY TNHH SKINCARE SHOP</p>
        <p>Số 51 Nguyễn Ngọc Vũ, Trung Hòa, Cầu Giấy, Hà Nội.</p>
        <h2>HOTLINE</h2>
        <p>+84 3774 8725</p>
        <p>+84 3932 8588</p>
        <h2>THÔNG TIN PHÒNG BAN</h2>
    </div>

    <div class="contact-form">
        <h2>LIÊN HỆ</h2>
        <form action="/submit_contact_form" method="post">
            <input type="text" id="name" name="name" placeholder="Họ và tên">
            <input type="email" id="email" name="email" placeholder="Email">
            <input type="text" id="phone" name="phone" placeholder="Điện thoại">
            <textarea id="message" name="message" placeholder="Lời nhắn" rows="4"></textarea>
            <input type="submit" value="Gửi">
        </form>
    </div>
</div>

</body>
</html>
