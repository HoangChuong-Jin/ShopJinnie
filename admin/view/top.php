<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang quản trị</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/shop1.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/color.css" />
    <script src="../public/js/ckeditor/ckeditor.js"></script>
    <script src="../public/js/slide.js"></script>
    <link rel="stylesheet" type="text/css" href="../public/css/slide.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/cursor.css" />
    <link rel="stylesheet" type="text/css" href="../public/css/scrollbar.css" />
    <link rel="shortcut icon" href="../public/images/icon/short-icon.svg" />
    
</head>
<body>

<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-3 px-3 mb-4 text-white" style="background-color: #FD5961">
    <div class="media d-flex align-items-center">
        <img class="rounded-circle shadow-lg" src="../public/images/<?php if($_SESSION['nguoidung']['hinhanh']==null){
            echo 'user.png'; 
        }else {
            echo $_SESSION['nguoidung']['hinhanh'];
        }
        ?>"  width="100px">
      <div class="media-body">
        <h5 class="m-0">
        <?php 
            if(isset($_SESSION["nguoidung"])){
              echo $_SESSION["nguoidung"]["hoten"];
            }
            ?>
        </h5>
        <p class="font-weight-dark  mb-0">
            <?php 
            if($_SESSION["nguoidung"]["loai"]!=1)
                echo "Nhân viên";
            else
                echo "Adminnistrator"
            ?>
        </p>
      </div>
    </div>
  </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">
      QUẢN LÝ
    </p>

    <ul class="nav flex-column mb-0">
        <li class="nav-item">
            <a href="../ktnguoidung/index.php" class="nav-link text-dark font-italic bg-white">
                <i class="fa fa-th-large mr-3 fa-fw" style="color: #FD5961;"></i>
                Bảng điều khiển
            </a>
        </li>
        <li class="nav-item">
            <a href="../qlsanpham/index.php" class="nav-link text-dark font-italic">
                <i class="fa fa-gift mr-3 fa-fw" style="color: #FD5961;"></i>
                Quản lý sản phẩm
            </a>
        </li>
        <li class="nav-item">
            <a href="../qlloaisanpham/index.php" class="nav-link text-dark font-italic">
                <i class="fa fa-bars mr-3 fa-fw" style="color: #FD5961;"></i>
                Quản lý loại sản phẩm
            </a>
        </li>
        <li class="nav-item">
            <a href="../qldonhang/index.php" class="nav-link text-dark font-italic">
                <i class="fa fa-clipboard mr-3 fa-fw" style="color: #FD5961;"></i>
                Quản lý đơn hàng
            </a>
        </li>
        <?php
        if($_SESSION["nguoidung"]["loai"]==1)
            {
        ?>
            <li class="nav-item">
            <a href="../qlnguoidung/index.php" class="nav-link text-dark font-italic">
                        <i class="fa fa-users mr-3 fa-fw" style="color: #FD5961;"></i>
                        Quản lý người dùng
                    </a>
            </li>
        <?php 
            }
        ?>
     </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-2 py-3 mb-0">TÀI KHOẢN</p>
    <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
            <a href="#" data-toggle="modal" data-target="#fcapnhatthongtin" class="nav-link text-dark font-italic">
                <i class="fa fa-address-card mr-3 fa-fw" style="color: #FD5961;"></i>
                Hồ sơ cá nhân
            </a>
        </li>
        <li class="nav-item">
            <a href="#" data-toggle="modal" data-target="#fdoimatkhau" class="nav-link text-dark font-italic">
                <i class="fa fa-lock mr-3 fa-fw" style="color: #FD5961;"></i>
                Đổi mật khẩu
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-dark font-italic" data-toggle="modal" data-target="#fdangxuat">
                <i class="fa fa-power-off mr-3 fa-fw" style="color: #FD5961;"></i>
                Thoát
            </a>
        </li>
        
    </ul>
</div>
<!--cập nhật thông tin người dùng-->
<div class="modal fade" id="fcapnhatthongtin" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Hồ sơ cá nhân</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
            <div class="modal-body">
                <form method="post" action="index.php" enctype="multipart/form-data">
                    <div class="text-center">
                        <img class="img-circle" src="../public/images/<?php if($_SESSION['nguoidung']['hinhanh']==null){
                          echo 'user.png'; 
                        }else {
                          echo $_SESSION['nguoidung']['hinhanh'];
                        }
                        ?>"  width="100px">

                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="txtemail"
                        placeholder="Email" value="<?php echo $_SESSION["nguoidung"]["email"]; ?>"
                        >
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input class="form-control" type="number" name="txtdienthoai"
                        placeholder="Email" value="<?php echo $_SESSION["nguoidung"]["sodienthoai"]; ?>"
                        >
                    </div>
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input class="form-control" type="text" name="txthoten"
                        placeholder="Họ tên" value="<?php echo $_SESSION["nguoidung"]["hoten"]; ?>"
                        required>
                    </div>
                    <div class="form-group">
                        <label>Đổi hình đại diện</label>
                        <input type="file" name="fhinh">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="txtid" value="<?php echo $_SESSION["nguoidung"]["id"];?>" >
                        <input type="hidden" name="txthinhanh" value="<?php echo $_SESSION["nguoidung"]["hinhanh"]; ?>" >
                        <input type="hidden" name="action" value="capnhat" >
                        <input class="btn btn-primary" type="submit" value="Lưu">
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    
<!--kết thúc cập nhật thông tin người dùng-->
<!--Bắt đầu đổi mật khẩu-->
<div class="modal fade" id="fdoimatkhau" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Đổi mật khẩu</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label>Mật khẩu mới</label>
                        <input class="form-control" type="password" name="txtmatkhaumoi"
                        placeholder="Nhập mật khẩu mới" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="hidden" name="txtemail" value="<?php echo $_SESSION["nguoidung"]["email"];?>" >
                        <input type="hidden" name="action" value="doimatkhau" >
                        <input class="btn btn-primary" type="submit" value="Lưu">
                        <input class="btn btn-warning" type="reset" value="Hủy">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Kết thúc đổi mật khẩu-->

<!--Bắt đầu đăng xuất-->
<div class="modal fade" id="fdangxuat" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Đăng xuất</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label>Bạn chắn chắn muốn đăng xuất?</label>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
              <a href="../ktnguoidung/index.php?action=dangxuat" class="btn btn-primary" type="button" >Đồng ý</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>