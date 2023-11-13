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
                <h4>Bản tin</h4>
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
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<section id="content-post">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
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
                        $news_content = substr($row['news_content'],0,500);
                        $news_tags = $row['news_tags'];
                ?>   

                    <h2>
                        <a href="#"><?php echo $news_title ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $news_author ?></a>
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

                        <h2>
                            <a href="#"><?php echo $noti_title ?></a>
                        </h2>
                        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $noti_date; ?></p>
                        <img class="img-fluid" src="images/<?php echo $noti_image; ?> " alt="" style="width: 900px;">
                        <hr>
                        <p><?php echo $noti_content; ?></p>

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