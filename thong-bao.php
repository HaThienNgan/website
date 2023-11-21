<?php 
    include "includes/header.php";
?>
<style>
    a{
        text-decoration: none;
        color: #9F0311;
    }
    a:hover {
        text-decoration: underline;
    }

    li a{
        color: black;
    }
</style>

<section id="content-bantin">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-8">
                <?php
                    $per_page = 2;
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    }else{
                        $page = "";
                    }
                    if($page == "" || $page == 1){
                        $page_1 = 0;
                    }else {
                        $page_1 = ($page * $per_page) - $per_page;
                    }

                    $news_query_count = "SELECT * FROM notification ORDER BY noti_date DESC";
                    $find_count = mysqli_query($connect, $news_query_count);
                    $count = mysqli_num_rows($find_count);
                    $count = ceil($count / $per_page);

                    $query = "SELECT * FROM notification LIMIT $page_1, $per_page";
                    $select_all_noti_query = mysqli_query($connect, $query);
                    
                    while ($row = mysqli_fetch_assoc($select_all_noti_query)){
                        $noti_id = $row['noti_id'];
                        $noti_title = $row['noti_title'];
                        $noti_content = substr($row['noti_content'],0,10);
                        $noti_date = $row['noti_date'];
                        $noti_image = $row['noti_image'];
                            ?>   
                                <!-- First Blog Post -->
                                <h5 >
                                    <a class="" href="post.php?noti_id=<?php echo $noti_id; ?>"><b><?php echo $noti_title ?></b></a>
                                </h5>
                                <p><span class="glyphicon glyphicon-time"></span> Ngày đăng <?php echo $noti_date ?></p>
                                <div style="text-align: center;">
                                    <a href="#">
                                        <img class="img-fluid" src="images/<?php echo $noti_image; ?> " alt="" >
                                    </a>
                                </div>
                                <p><?php echo "<div>{$noti_content}</div> '" ?></p>
                                <a class="btn btn-outline-dark" href="post.php?noti_id=<?php echo $noti_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                                <div style="background-color:#9F0311; height: 2px; margin-top:25px; margin-bottom: 25px;"></div>
                            <?php
                        }
                ?>
            </div>
            <?php include "includes/sidebar.php"; ?>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php 
    include "includes/footer.php";
?>