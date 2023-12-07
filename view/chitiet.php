<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>
    .flex-quantity {
		display: flex;
	}

	.buttontang {
		padding: 0px 5px;
	}

	.buttongiam {

		padding: 0px 5px;
	}

	.soluong {
		margin-top: 5px;
	}
  .quantity
{
	width: 100%;
	height: 40px;
	margin-top: 23px;
}
.quantity_selector
{
	display: -webkit-box;
	display: -moz-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	align-items: center;
	width: 132px;
	height: 100%;
	border: solid 1px #e5e5e5;
	margin-left: 29px;
}
.quantity_selector span
{
	font-weight: 500;
	color: #232530;
}
.plus,
.minus
{
	padding-left: 14px;
	padding-right: 14px;
	cursor: pointer;
}
.plus:hover,
.minus:hover
{
	color: #b5aec4;
}
.quantity
	{
		height: auto;
	}
	.quantity_selector
	{
		height: 40px;
		margin-left: 0px;
		margin-top: 15px;
	}
  
  </style>
</head>
  <body>
    <div class="container">
      <?php 
        extract($onesp);
        $img=$img_path.$img;
      ?>
      <div class="chitiet">
        <div class="ct_img">
          <div class="khung">
            <img src="<?= $img ?>" alt="">
          </div>
            <!-- <div class="more">
              <div class="more_img">
                <img src="./image/ha.jpg" alt="">
              </div>
              <div class="more_img">
                <img src="./image/hb.jpg" alt="">
              </div>
              
            </div> -->
        </div>
        <div class="ct_tt">
          <div class="ct_text">
            <h3><?= $name ?></h3>
            <p<?= $masp ?></p>
            <h2 class="gia"><?= $price ?></h2>
            <!-- <p>*Giá có thể thay đổi tùy thuộc vào kích thước và trọng lượng thực tế của sản phẩm.Vui lòng gọi 1800 1168 để được hỗ trợ.</p> -->
            <p class="mb">Mô tả: <?= $mota ?></p>


            <form action="index.php?act=addtocart" method="post">
              <input type="hidden" name="id" value="<?= $id ?>">
              <input type="hidden" name="name" value="<?= $name ?>">
              <input type="hidden" name="image" value="<?= $img ?>">
              <input type="hidden" name="masp" value="<?= $masp ?>">
              <input type="hidden" name="price" value="<?= $price ?>">
              <input type="submit" value="">
              <!-- <span>Số lượng:</span>
							<div class="quantity_selector">
								<span class="minus">
									<div class="buttongiam btn-secondary"><i class="fa fa-minus" aria-hidden="true"></i></div>
								</span>
								<input style="margin: 15px 0px;width: 30px;text-align:center;" type="text" id="quantity" name="soluong" value=1><br>
								<span class="plus">
									<div class="buttontang btn-secondary"><i class="fa fa-plus" aria-hidden="true"></i></div>
								</span>
							</div> -->

              <hr class="mb">
              <div class="ct_button">
                <button class="buynow">Mua Ngay</button>
                <input class="addtocart" type="submit" value="Thêm vào giỏ hàng" name="addtocart">
              </div>
            </form>
            <div class="chat">
              <img src="./image/icon-chat-voi-tu-van-vien.png" alt="">
              <h4>Liên Hệ Với Tư Vấn Viên</h>
            </div>
          </div>
          
        </div>
        
      </div>
      <hr style="width: 80%; margin: 0 auto; margin-top: 30px;">
      <!-- <div class="camket mb">
        <div class="ck_left">
          <div class="candong">
            <img src="./image/icv-titleh3.png" style="height: 40px; width: 40px;">
            <h3>CAM KẾT CHẤT LƯỢNG</h3>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Thương hiệu trang sức cưới thuộc Tập đoàn Vàng bạc đá quý DOJI</p>
          </div>
          <div class="candong" style="margin-bottom: 25px;">
            <img src="./image/icon_tix.png" alt="">
            <p>100% Chuẩn xác về hàm lượng. Tất cả các sản phẩm trang sức được kiểm định chặt chẽ với máy quang phổ, cam kết chuẩn xác hàm lượng.</p>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>100% chuẩn xác về trọng lượng.</p>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Mọi sản phẩm trang sức bán ra đều có hóa đơn, đầy đủ thông tin về hàm lượng, trọng lượng và điều kiện bảo hành.</p>
          </div>
        </div>
        <div class="ck_right">
          <div class="candong">
            <img src="./image/icvtitlth3.png" style="height: 35px; width: 35px;">
            <h3>HƯỚNG DẪN MUA HÀNG ONLINE</h3>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Lựa chọn sản phẩm tại các chuyên mục trên website</p>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Thêm vào giỏ hàng.</p>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Kiểm tra thông tin đơn hàng và đặt hàng</p>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Kiểm tra và xác nhận đơn hàng</p>
          </div>
          <div class="candong">
            <img src="./image/icon_tix.png" alt="">
            <p>Đơn hàng thành công sẽ được gửi về email & sms của quý khách</p>
          </div>
        </div>
      </div> -->
    
      <hr style="width: 85%; margin: 0 auto; margin-bottom: 5px;">
      <h2 style="margin-left: 7%; width: 200px;">ĐÁNH GIÁ</h2>
      <p style="margin-left:7%; width: 200px; margin-top: 10px;">Nhập đánh giá của bạn</p>
      <div class="binhluan mb">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
          $(document).ready(function() {
               $("#binhluan").load("view/binhluan.php", {idpro: <?= $id ?>});
          });
        </script>
        <div class="ok" id="binhluan">

        </div>
      </div>

      <div class="article">
        <h2>SẢN PHẨM CÙNG LOẠI</h2>
        <hr class="mb">
        <div class="sp">
          <?php
              foreach($dstop5 as $sp){
                  extract($sp);
                  $hinh =$img_path.$img;
                  $sale = $price*11/10;
                  $linksp = "index.php?act=sanphamct&idsp=".$id;
                  echo '
                  <div class="spnb mb">
                      <a href="'.$linksp.'">
                          <img src="'.$hinh.'" alt="">
                          
                      </a>
                      <div class="tt">
                          <h5>'.$name.'</h5>

                          <p>Giá gốc: <del>'.$sale.'</del></p>
                          <h3>'.$price.'</h3>
                      </div>
                      <a href="'.$linksp.'"><input type="button" value="Chi tiết"></a>
                  </div>';
              }
          ?>
        </div>
            
        <a href="#" class="btn mb">Xem thêm</a>
      </div>
    </div>
  </body>
</html>