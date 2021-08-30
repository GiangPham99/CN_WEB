<!-- Delete-User -->
<?php
    include("./config/connect.php");
    if(isset ($_GET['iddangnhap'])){
    $id_user = $_GET['iddangnhap'];
    $sql = "DELETE FROM dangnhap WHERE iddangnhap = '$id_user'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:./nguoiDung.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:./nguoiDung.php');
    }
    }
?>



<!-- Delete-Danhmuc -->
<?php
    include("./config/connect.php");
    if(isset ($_GET['iddanhmuc'])){
    $id_danh_muc = $_GET['iddanhmuc'];
    $sql = "DELETE FROM danhmuc WHERE iddanhmuc = '$id_danh_muc'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:http:./danhmuc.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:http:./danhmuc.php');
    }
    }
?>

<!-- Delete-Tintuc -->
<?php
    include("./config/connect.php");
    if(isset ($_GET['idtintuc'])){
    $id_tintuc = $_GET['idtintuc'];
    $sql = "DELETE FROM tintuc WHERE idtintuc = '$id_tintuc'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:./tintuc.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:./tintuc.php');
    }
    }
?>
<!-- Delate Hình ảnh -->

<?php
    include("./config/connect.php");
    if(isset ($_GET['idhinhanh'])){
    $id_thuvien = $_GET['idhinhanh'];
    $sql = "DELETE FROM thuvien WHERE idhinhanh = '$id_thuvien'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:./thuvienanh.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:./thuvienanh.php');
    }
    }
?>

<!-- Delete phân quyền -->
<?php
    include("./config/connect.php");
    if(isset ($_GET['iduser'])){
    $id_phanquyen = $_GET['iduser'];
    $sql = "DELETE FROM phanquyen WHERE idphanquyen = '$id_phanquyen'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("Location:./phanquyen.php");
        
    }else{
        echo "Xóa thất bại: " . mysqli_error($conn);
        header('location:./phanquyen.php');
    }
    }
?>