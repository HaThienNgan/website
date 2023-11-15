<?php 
    include "includes/header.php";
?>
<style>
    .nav-link {
        color: #fff;
    }
    .dropdown-toggle {
        text-decoration: none;
        color: #fff;
    }
    .dropdown {
        margin-top: 7px;
        margin-left: 5px;
    }
</style>
<section id="header">
    <div class="container">
        <div class="row ">
            <div class="col-4">
                <h4>Sản phẩm Dịch vụ</h4>
            </div>
            <div class="col-8">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav navbarSupportedContent" >
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="co-cau-to-chuc.php">Giới Thiệu</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class=" dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        Cơ cấu Tổ chức
                                    </a>
                                    <?php 
                                        $query = "SELECT * FROM structure";
                                        $select_structure_menu = mysqli_query($connect, $query);
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<section id="content-sanpham">
    <div class="container">
        <div class="row justify-content-center g-2">
            <?php
                    $query = "SELECT * FROM product";
                    $select_all_product_query = mysqli_query($connect, $query);
                    
                    while ($row = mysqli_fetch_assoc($select_all_product_query)){
                        $product_id = $row['product_id'];
                        $product_name = $row['product_name'];
                        $product_content = $row['product_content'];
                        $product_image = $row['product_image'];
                ?> 
                        <div style="border: 1px solid #9F0311; border-radius: 8px; margin-right: 15px;" class="col-5">
                            <p style="text-align: center;"><?php echo $product_name; ?></p>
                            <img class="img-fluid mx-auto d-block" src="images/<?php echo $product_image; ?>" alt="hinhanh-dichvu-chukyso" style="height: 300px;">
                            <p style="text-align: center;"><a href="post.php?product_id=<?php echo $product_id; ?>">Xem Chi Tiết</a></p>
                        </div>
                    
                <?php
                    }
            ?>

            <div style="border: 1px solid #9F0311; border-radius: 8px;" class="col-5">
                <p style="text-align: center;">Dịch vụ Chữ Ký Số</p>
                <img class="img-fluid mx-auto d-block" src="images/chukyso.jpg" alt="hinhanh-dichvu-chukyso" style="height: 300px;">
                <p style="text-align: center;"><a href="#">Xem Chi Tiết</a></p>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php 
    include "includes/footer.php";
?>