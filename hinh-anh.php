<?php 
    include "includes/header.php";
?>

<style>
    li {
        list-style-type: none;
    }
</style>
<section id="content-chucnang">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <h5><b>Danh Mục Hình Ảnh</b></h5>
                <ul>
                    <?php
                        $query = "SELECT * FROM image";
                        $select_all_image_query = mysqli_query($connect, $query);
                        
                        while ($row = mysqli_fetch_assoc($select_all_image_query)){
                            $image_id = $row['image_id'];
                            $image_title = $row['image_title'];
                            $image_content = $row['image_content'];
                    ?>

                    <li>
                        <a href="hinh-anh.php?hinh-anh=<?php echo $image_id; ?>"><?php echo $image_title; ?></a>
                    </li>

                    <?php 
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-7">
                <?php
                    if(isset($_GET['hinh-anh'])){
                        $the_image_id = $_GET['hinh-anh'];

                        $query_image = "SELECT * FROM image";
                        $select_image_query = mysqli_query($connect, $query_image);

                        while ($row = mysqli_fetch_assoc($select_image_query)){
                            $image_id = $row['image_id'];
                            $image_title = $row['image_title'];
                            $image_content = $row['image_content'];
                ?>
                    <div style="width: 70%">
                        <?php echo $image_content; ?>
                    </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php 
    include "includes/footer.php";
?>