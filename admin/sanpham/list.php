<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Trang chủ admin</a></li>
                                <li class="breadcrumb-item active">Thêm danh mục</li>
                            </ol>
                        </div>
                        <h3 class="page-title">Danh sách sản phẩm</h3>
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="index.php?act=lissp" method="post">
                                        <input type="text" name="kyw">
                                        <select name="iddm">
                                            <option value="0" selected>Tât cả</option>
                                            <?php
                                            foreach ($listdanhmuc as $danhmuc) {
                                                extract($danhmuc);
                                                echo '<option value="' . $id . '">' . $name . '</option>';
                                            }
                                            ?>
                                        </select>
                                        <input class="btn-primary" type="submit" name="listok" value="GO">
                                    </form>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>STT</th>
                                                <th>TÊN SẢN PHẨM</th>
                                                <th>GÍA</th>
                                                <th>HÌNH ẢNH</th>
                                                <th>MÔ TẢ</th>
                                                <th>SIZE</th>
                                                <th>MÃ LOẠI</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                foreach ($listsanpham as $sanpham) {
                                                    extract($sanpham);
                                                    $suasp = "index.php?act=suasp&id=" . $id;
                                                    $xoasp = "index.php?act=xoasp&id=" . $id;
                                                    $hinhpath = "../upload/" . $img;
                                                    if (is_file($hinhpath)) {
                                                        $hinh = "<img src='" . $hinhpath . "' height = '80'>";
                                                    } else {
                                                        $hinh = "no photo";
                                                    }

                                                    echo '
                    <tr>
                        <td><input type="checkbox" name= "chk" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $price . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $size . '</td>
                        <td>' . $mota . '</td>
                        <td>' . $iddm . '</td>
                        <td><a href= "' . $suasp . '"><input style="margin-bottom: 5px" class="btn-primary" type="button" value="Sửa"></a> <a href= "' . $xoasp . '"><input  class="btn-danger" type="button" value="Xóa"></a> </td>
                    </tr>
                ';
                                                }
                                                ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="input_button">
                                        <input onclick="selects()" class="btn-info" type="button" value="Chọn tất cả">
                                        <input onclick="deSelect()" class="btn-info " type="button" value="Bỏ chọn tất cả">
                                        <input class="btn-danger" type="button" value="Xóa các mục đã chọn">
                                        <a href="index.php?act=addsp"><input class="btn-success" type="button" value="Nhập thêm"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">
                            function selects() {
                                var ele = document.getElementsByName('chk');
                                for (var i = 0; i < ele.length; i++) {
                                    if (ele[i].type == 'checkbox')
                                        ele[i].checked = true;
                                }
                            }

                            function deSelect() {
                                var ele = document.getElementsByName('chk');
                                for (var i = 0; i < ele.length; i++) {
                                    if (ele[i].type == 'checkbox')
                                        ele[i].checked = false;
                                }
                            }
                        </script>
                    </div>

                </div>
            </div>

        </div>