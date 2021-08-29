<!-- Delete-User -->
<?php
    include("./config/connect.php");
    $id_user = $_GET['iddangnhap'];
    $sql = "DELETE FROM dangnhap WHERE iddangnhap = '$id_user'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:http://localhost/phenikaa_test2_BTL/admin/user.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:http://localhost/phenikaa_test2_BTL/admin/user.php');
    }

?>

<!-- Delete-Danhmuc -->
<?php
    include("./config/connect.php");
    $id_danh_muc = $_GET['iddanhmuc'];
    $sql = "DELETE FROM danhmuc WHERE iddanhmuc = '$id_danh_muc'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:http://localhost/phenikaa_test2_BTL/admin/danhmuc.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:http://localhost/phenikaa_test2_BTL/admin/danhmuc.php');
    }

?>

<!-- Delete-Tintuc -->
<?php
    include("./config/connect.php");
    $id_tintuc = $_GET['idtintuc'];
    $sql = "DELETE FROM tintuc WHERE idtintuc = '$id_tintuc'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:http://localhost/phenikaa_test2_BTL/admin/tintuc.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:http://localhost/phenikaa_test2_BTL/admin/tintuc.php');
    }

?>
<!-- Delate Hình ảnh -->

<?php
    include("./config/connect.php");
    $id_thuvien = $_GET['idhinhanh'];
    $sql = "DELETE FROM thuvien WHERE idhinhanh = '$id_thuvien'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:http://localhost/phenikaa_test2_BTL/admin/thuvienanh.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:http://localhost/phenikaa_test2_BTL/admin/thuvienanh.php');
    }

?>

<!-- Delete phân quyền -->
<?php
    include("./config/connect.php");
    $id_phanquyen = $_GET['iduser'];
    $sql = "DELETE FROM phanquyen WHERE idphanquyen = '$id_phanquyen'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:http://localhost/phenikaa_test2_BTL/admin/phanquyen.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:http://localhost/phenikaa_test2_BTL/admin/phanquyen.php');
    }

?>