<?php
	include("./admin/config/connect.php");
	$idBaiViet = '';
	if(isset($_GET['id'])){$idBaiViet=$_GET['id'];}
	else{$idBaiViet='5';}
	$getTinTuyenSinh ="SELECT idtintuc , tieude , noidung ,ngayviet, tenanh FROM tintuc , thuvien where tintuc.idhinhanh=thuvien.idhinhanh";
	$result1 = mysqli_query($conn, $getTinTuyenSinh);
	$row = mysqli_fetch_assoc($result1);
?>
        <!-- Slide_Show -->
        <div class="slide_show">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="http://#">
                            <img src="./image/slide1.jpg" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="http://#" target="_blank" rel="noopener noreferrer">
                            <img src="./image/sldie2.jpg" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="http://#" target="_blank" rel="noopener noreferrer">
                            <img src="./image/slide3.jpg" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="http://#" target="_blank" rel="noopener noreferrer">
                            <img src="./image/slide4.jpg" class="d-block w-100" alt="...">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- menu -->
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                <div class="col">
                    <div class="p-3 border bg-light">
                        <a href="http://#" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Văn bản pháp quy</a>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">
                        <a href="http://#" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Dịch vụ trực tuyến</a>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">
                        <a href="http://#" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Hỗ trợ CNTT</a>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">
                        <a href="http://" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Đảng - Đoàn thể</a>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">
                        <a href="http://#" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Virtual Tour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->

    <!-- Secsion Tin tuyển sinh -->
    <section>
        <h2 class="mt-5 text-center"><?php echo $row['tieude']?></h2>
		<br><img src=<?php echo $row['tenanh']?>><br><br>
        <p><?php echo $row['noidung']?></p>
    </section>

    

    <!-- Footer -->
<?php
include("./footer.php");
?>