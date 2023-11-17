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
    li {
        list-style-type: none;
    }
</style>

<section id="header">
    <div class="container">
        <div class="row ">
            <div class="col-4">
                <h4>Hình Ảnh</h4>
            </div>
            <div class="col-8">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav navbarSupportedContent" >
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#gioi-thieu">Giới Thiệu</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
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