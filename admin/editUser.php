<?php
include("./config/connect.php");
$id_thay_doi = $_GET['iddangnhap'];
$sql = "SELECT * FROM dangnhap where iddangnhap = '$id_thay_doi'";
$result = mysqli_query($conn, $sql);
// echo"<prev>";
// print_r($result);
// echo"</prev>";
?>
<div class="container mt-5">
    <?php
    include("./component/header-edit.php")
    ?>

<?php
                while ($row = mysqli_fetch_array($result)) {
            ?>
    <h1 class="text-center mb-5">Chỉnh sửa thông tin</h1>
    <form class="row g-3 needs-validation" action="" method="POST">
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Tên đăng nhập</label>
            <input type="text" class="form-control" name="tendangnhap" placeholder="Tên đăng nhập" value="<?php echo $row['tendangnhap'];?>" required>
        </div>
        <div class="col-md-6">
            <label for="validationCustomUsername" class="form-label">Họ tên</label>
            <input type="text" class="form-control" name="hoten" placeholder="Họ tên" value="<?php echo $row['hoten'];?>" required>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ" value="<?php echo $row['diachi'];?>" required>
        </div>
        <div class="col-md-2">
            <label for="validationCustom04" class="form-label">Kích hoạt</label>
            <input type="text" class="form-control" name="kichhoat" placeholder="Ngày kích hoạt" value="<?php echo $row['kichhoat'];?>" required>
        </div>
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Ngày Lập</label>
            <input type="text" class="form-control" name="ngaylap" placeholder="Ngày lập" value="<?php echo $row['ngaylap'];?>" required>
        </div>
        <?php
                }               
            ?>
        <div class="col-md-2">
            <label for="validationCustom05" class="form-label">Phân quyền</label>
            <select class="form-select" name="phanquyen" required>
                <option selected disabled value="">Choose...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </div>
        <div class="col-12">
            <button class="btn btn-primary mt-3" type="submit" name="save" value="save">Lưu</button>
        </div>
    </form>
    <?php
    if (isset($_POST['save'])) {
        $tendangnhap = $_POST['tendangnhap'];
        $hoten = $_POST['hoten'];
        $diachi = $_POST['diachi'];
        $kichhoat = $_POST['kichhoat'];
        $ngaylap = $_POST['ngaylap'];
        $phanquyen = $_POST['phanquyen'];

        $sql = "UPDATE dangnhap
                SET tendangnhap = '$tendangnhap',hoten = '$hoten',diachi = '$diachi', kichhoat = '$kichhoat',ngaylap = '$ngaylap',idphanquyen = '$phanquyen'
                WHERE iddangnhap = '$id_thay_doi'";
        if ($conn->query($sql) === TRUE) {
            echo "thay dổi thành công";
            header("Location:http://localhost/phenikaa_test2_BTL/admin/user.php");
        } else {
            echo "Không thể thay đổi thông tin người dùng";
        }
    }

    ?>
</div>