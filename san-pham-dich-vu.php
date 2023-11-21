<?php 
    include "includes/header.php";
?>

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