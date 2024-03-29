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
<!-- Phần nhập hàng hóa sửa -->
                    <h1> Phần sửa hàng hóa </h1>

                    <a href="HH_HangHoa.php"><span><i class="fa fa-gift"></i></span> Danh sách hàng hóa</a> <br></br>

                    <div class="card mt-3">
                        <h5 class="card-header">Thông tin hàng hóa</h5>
                        <div class="card-body">
                            <form action="HH_HangHoa_Sua.php" method="post">
                                <input type="text" id="id" name="id" hidden >
                                <div class="form-group">
                                    <label for="TenHangHoa">Tên hàng hóa</label>
                                    <input type="text" class="form-control" id="TenHangHoa" name="TenHangHoa" required />
                                </div>

                                <div class="form-group">
                                    <label for="Loai">Loại</label>
                                    <input type="text" class="form-control" id="Loai" name="Loai" required />
                                </div>

                                <div class="form-group">
                                    <label for="NhaSanXuat">Nhà sản xuất</label>
                                    <input type="text" class="form-control" id="NhaSanXuat" name="NhaSanXuat" required />
                                </div>

                                <div class="form-group">
                                    <label for="Donvitinh">Đơn vị tính</label>
                                    <select type="text" class="form-control" id="Donvitinh" name="Donvitinh" >
                                        <option value=""></option>
                                        <option value="Chai">Chai</option>
                                        <option value="Bịt">Bịt</option>
                                        <option value="Hộp">Hộp</option>
                                        <option value="Cục">Cục</option>
                                        <option value="Lon">Lon</option>
                                        <option value="Cái">Cái</option>
                                        <option value="Lốc">Lốc</option>
                                        <option value="Ly">Ly</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="SoLuong">Số lượng</label>
                                    <input type="number" max= "1000" min = "0" class="form-control" id="SoLuong" name="SoLuong" required />
                                </div>

                                <div class="form-group">
                                    <label for="GiaGoc">Giá gốc</label>
                                    <input type="text" class="form-control" id="GiaGoc" name="GiaGoc" required />
                                </div>
                                
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

<!-- Javascript -->
    <?php include "Javascript.php"; ?>        
    <script>
        var docRef = db.collection("hanghoa").doc("<?php echo $_GET['id'];?>");
        docRef.get().then((doc) => {
            if (doc.exists) {
                //console.log("Document data:", doc.data
                $('#id').val(doc.id);
                $('#TenHangHoa').val(doc.data().tenhang);
                $('#Loai').val(doc.data().loai);  
                $('#NhaSanXuat').val(doc.data().nhasanxuat);
                $('#Donvitinh').val(doc.data().donvitinh);  
                $('#SoLuong').val(doc.data().soluong);
                $('#GiaGoc').val(doc.data().giagoc);  
            } else {
                // doc.data() will be undefined in this case
                console.log("No such document!");
            }
        }).catch((error) => {
            console.log("Error getting document:", error);
        });
    </script>
    <?php
        if(isset($_POST['TenHangHoa'])){
    ?>
            <script>
                var docRef = db.collection("hanghoa").doc("<?php echo $_POST['id'];?>");
                
                    docRef.update({
                    tenhang: "<?php echo $_POST['TenHangHoa'];?>",
                    loai: "<?php echo $_POST['Loai'];?>",
                    nhasanxuat: "<?php echo $_POST['NhaSanXuat'];?>",
                    donvitinh: "<?php echo $_POST['Donvitinh'];?>",
                    soluong: "<?php echo $_POST['SoLuong'];?>",
                    giagoc: "<?php echo $_POST['GiaGoc'];?>"  
                })
                .then(() => {
                    //console.log("Document successfully updated!");
                    location.href="HH_HangHoa.php";
                })
                .catch((error) => {
                    // The document probably doesn't exist.
                    console.error("Error updating document: ", error);
                }); 

            </script>
    <?php
    }
    ?>
</body>
</html>