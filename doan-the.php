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

                    $activities_query_count = "SELECT * FROM activities";
                    $find_count = mysqli_query($connect, $activities_query_count);
                    $count = mysqli_num_rows($find_count);
                    $count = ceil($count / $per_page);

                    $query = "SELECT * FROM activities LIMIT $page_1, $per_page";
                    $select_all_activity_query = mysqli_query($connect, $query);
                    
                    while ($row = mysqli_fetch_assoc($select_all_activity_query)){
                        $activity_id = $row['activity_id'];
                        $activity_title = $row['activity_title'];
                        $activity_author = $row['activity_author'];
                        $activity_date = $row['activity_date'];
                        $activity_image = $row['activity_image'];
                        $activity_tags = $row['activity_tags'];
                        $activity_content = substr($row['activity_content'],0,100);
                        $activity_status = $row['activity_status'];

                        if($activity_status == 'published'){
                            ?>   
                                <!-- First Blog Post -->
                                <h5 >
                                    <a class="" href="post.php?acti_id=<?php echo $activity_id; ?>"><b><?php echo $activity_title; ?></b></a>
                                </h5>
                                <span>Đăng bởi <a href="#"><?php echo $activity_author; ?></a></span>
                                <p><span class="glyphicon glyphicon-time"></span> Ngày đăng:  <?php echo $activity_date; ?></p>
                                <div style="text-align: center;">
                                    <a href="#">
                                        <img class="img-fluid" src="images/<?php echo $activity_image; ?> " alt="" >
                                    </a>
                                </div>
                                <p><?php echo $activity_content ?></p>
                                <span>Tags: <a href="#"><?php echo $activity_tags; ?></a></span> <br />
                                <a class="btn btn-outline-dark" href="post.php?acti_id=<?php echo $activity_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                                <div style="background-color:#9F0311; height: 2px; margin-top:25px; margin-bottom: 25px;"></div>
                            <?php
                        }
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