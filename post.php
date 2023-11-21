<?php 
    include "includes/header.php";
?>
<style>
    a {
        text-decoration:  none;
        color: #9F0311;
    }
    a:hover {
        color: #000;
    }
    .content-img img{
        width: 400px;
    }
</style>

<section id="content-post">
    <div class="container">
        <div class="row justify-content-center">
            <?php include "includes/sidebar.php"; ?>
            <div class="col-1"></div>
            <div class="col-7">
                <?php
                    if (isset($_GET['new_id'])){
                        $the_new_id = $_GET['new_id'];

                    $view_query = "UPDATE news SET news_views_count = news_views_count + 1 WHERE news_id = '$the_new_id' ";
                    $send_query = mysqli_query($connect, $view_query);
                    if (!$send_query){
                        die("Error:" . mysqli_error($connect));
                    }
                    
                    $query = "SELECT * FROM news WHERE news_id = $the_new_id";
                    $select_all_news_query = mysqli_query($connect, $query);
                    
                    while ($row = mysqli_fetch_assoc($select_all_news_query)){
                        $news_id = $row['news_id'];
                        $news_title = $row['news_title'];
                        $news_author = $row['news_author'];
                        $news_date = $row['news_date'];
                        $news_image = $row['news_image'];
                        $news_content = $row['news_content'];
                        $news_tags = $row['news_tags'];
                ?>   

                    <h4>
                        <a href="#"><b><?php echo $news_title ?></b></a>
                    </h4>
                    <p class="lead">
                        Đăng bởi <a href="index.php"><?php echo $news_author ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $news_date ?></p>
                    <img class="img-fluid" src="images/<?php echo $news_image; ?> " alt="" style="width: 900px;">
                    <hr>
                    <p><?php echo $news_content ?></p>

                    <hr>
                <?php
                    }
                }else if(isset($_GET['noti_id'])){
                    $the_noti_id = $_GET['noti_id'];
                    
                    $query = "SELECT * FROM notification WHERE noti_id = $the_noti_id";
                    $select_all_noti_query = mysqli_query($connect, $query);
                    
                    while ($row = mysqli_fetch_assoc($select_all_noti_query)){
                        $noti_id = $row['noti_id'];
                        $noti_title = $row['noti_title'];
                        $noti_date = $row['noti_date'];
                        $noti_image = $row['noti_image'];
                        $noti_content = $row['noti_content'];
                ?>   

                        <h4>
                            <a href="#"><?php echo $noti_title ?></a>
                        </h4>
                        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $noti_date; ?></p>
                        <img class="img-fluid" src="images/<?php echo $noti_image; ?> " alt="" style="width: 900px;">
                        <hr width="30%"
                            color="red"
                            align="center"
                            size="5px" />
                        <p><?php echo $noti_content; ?></p>

                        <hr>
                <?php 
                    }
                
                }else if (isset($_GET['product_id'])){
                    $the_product_id = $_GET['product_id'];
                    
                    $query = "SELECT * FROM product WHERE product_id = $the_product_id";
                    $select_all_product_query = mysqli_query($connect, $query);
                    
                    while ($row = mysqli_fetch_assoc($select_all_product_query)){
                        $product_id = $row['product_id'];
                        $product_name = $row['product_name'];
                        $product_intro = $row['product_intro'];
                        $product_content = $row['product_content'];
                        $product_image = $row['product_image'];
                ?>          
                        <div style="border: 0px solid; background-color: #EEE2DE; padding: 10px; padding-top: 20px; border-radius: 5px; z-index: 10;" class="row">
                            <div class="col-6">
                                <img class="img-fluid" src="images/<?php echo $product_image; ?> " alt="" style="width: 900px;">
                                <hr width="30%"
                                    color="red"
                                    align="center"
                                    size="5px" />
                            </div>
                            <div class="col-6">

                                <h4>
                                    <b><a href="#"><?php echo $product_name; ?></a></b> 
                                </h4>
                                <br />
                                <b>Giới thiệu Sản phẩm:</b>
                                <p><?php echo $product_intro; ?></p>
                            </div>
                        </div>
                        <div style="border: 0px solid; background-color: #EEE2DE; padding: 10px; padding-top: 20px; border-radius: 3px; z-index: 10;" class="row">
                            <div class="col-12">
                                Được phát triển bởi: 
                            </div>
                        </div>
                        <div style="border: 0px solid; background-color: #EEE2DE; padding: 10px; padding-top: 20px; border-radius: 3px; z-index: 10;" class="row">
                            <div class="col-12">
                                <h5><b>Mô Tả Chi Tiết</b></h5>
                                <p><?php echo $product_content; ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <h5><b>Các sản phẩm khác</b></h5>
                            <div style="border: 3px solid #fff; background-color: #EEE2DE; border-radius: 5px; padding: 10px; z-index: 10;" class="col-4">
                                <a href="post.php?product_id=<?php echo 1; ?>">
                                    
                                        <img class="img-fluid" src="images/<?php echo $product_image; ?> " alt="hinhanh-sanpham">
                                        <b><?php echo $product_name; ?></b>
                                        <br /> <br /> <br />
                                        Phát triển bởi: xxxxxx
                                </a>
                            </div>
                            <div style="border: 3px solid #fff; background-color: #EEE2DE; border-radius: 5px; padding: 10px; z-index: 10;" class="col-4">
                                <a href="post.php?product_id=<?php echo 2; ?>">
                                    
                                        <img class="img-fluid" src="images/<?php echo $product_image; ?> " alt="hinhanh-sanpham">
                                        <b><?php echo $product_name; ?></b>
                                        <br /> <br /> <br />
                                        Phát triển bởi: xxxxxx
                                </a>
                            </div>
                            <div style="border: 3px solid #fff; background-color: #EEE2DE; border-radius: 5px; padding: 10px; z-index: 10;" class="col-4">
                                <a href="post.php?product_id=<?php echo 2; ?>">
                                    
                                        <img class="img-fluid" src="images/<?php echo $product_image; ?> " alt="hinhanh-sanpham">
                                        <b><?php echo $product_name; ?></b>
                                        <br /> <br /> <br />
                                        Phát triển bởi: xxxxxx
                                </a>
                            </div>
                        </div>
                <?php 
                    }
                }else if (isset($_GET['acti_id'])){
                    $the_activity_id = $_GET['acti_id'];

                    $view_query = "UPDATE activities SET activity_views = activity_views + 1 WHERE activity_id = '$the_activity_id' ";
                    $send_query = mysqli_query($connect, $view_query);
                    if (!$send_query){
                        die("Error:" . mysqli_error($connect));
                    }
                    
                    $query = "SELECT * FROM activities WHERE activity_id = $the_activity_id";
                    $select_all_activities_query = mysqli_query($connect, $query);
                    
                    while ($row = mysqli_fetch_assoc($select_all_activities_query)){
                        $activity_id = $row['activity_id'];
                        $activity_title = $row['activity_title'];
                        $activity_author = $row['activity_author'];
                        $activity_date = $row['activity_date'];
                        $activity_image = $row['activity_image'];
                        $activity_content = $row['activity_content'];
                        $activity_tags = $row['activity_tags'];
                ?>
                        <h4>
                        <a href="#"><b><?php echo $activity_title ?></b></a>
                        </h4>
                        <p class="lead">
                            Đăng bởi <a href="index.php"><?php echo $activity_author ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $activity_date ?></p>
                        <img class="img-fluid" src="images/<?php echo $activity_image; ?> " alt="" >
                        <hr>
                        <div class="content-img">
                            <p><?php echo $activity_content ?></p>
                        </div>
                        

                        <hr>
                <?php 
                    }

                }else{
                    header("Location: index.php");
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