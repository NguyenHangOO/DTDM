<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include "header.php"; ?>

</head>
<body>

    <div class="wrapper">
        <!-- Menu -->
        <?php include "Menu.php"; ?>
        
        <div class="right-side">
            <div class="right-content">
<!-- Phần Home -->
<!-- Phần đăng nhập -->
                <div id="LogIn">
                    <h1> Phần đăng nhập </h1>

                    <div class="card mt-3">
                        <h5 class="card-header">Thông tin đăng nhập</h5>
                        <div class="card-body">
                            <form action="DangNhap_Xuly.php" method="post">

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required />
                                </div>

                                <div class="form-group">
                                    <label for="Password">Mật khẩu</label>
                                    <input type="password" class="form-control" class="pswrd" id="Password" name="Password" required />
                                    <span class="show"></span>
                                </div>
                                
                                <button type="submit" class="btn btn-primary"><i class=""></i> Đăng nhập</button>
                                <div class="signup">
                                    Bạn chưa có tài khoản? <a href="DangKy.php">Đăng ký</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<!-- Javascript -->
    <?php include "Javascript.php"; ?>
    
</body>
</html>