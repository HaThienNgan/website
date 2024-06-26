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
                <div class="row">
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

                        $news_query_count = "SELECT * FROM news";
                        $find_count = mysqli_query($connect, $news_query_count);
                        $count = mysqli_num_rows($find_count);
                        $count = ceil($count / $per_page);

                        $query = "SELECT * FROM news LIMIT $page_1, $per_page";
                        $select_all_news_query = mysqli_query($connect, $query);
                        
                        while ($row = mysqli_fetch_assoc($select_all_news_query)){
                            $news_id = $row['news_id'];
                            $news_title = $row['news_title'];
                            $news_author = $row['news_author'];
                            $news_date = $row['news_date'];
                            $news_image = $row['news_image'];
                            $news_content = substr($row['news_content'],0,300);
                            $news_tags = $row['news_tags'];
                            $news_status = $row['news_status'];

                            if($news_status == 'published'){
                                ?>   
                                    <!-- First Blog Post -->
                                    <div class="col-4">
                                        <div>
                                            <a href="#">
                                                <img style="object-fit: cover; height: 150px; width: 200px;" class="img-fluid" src="images/<?php echo $news_image; ?> " alt="" >
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <h5 >
                                            <a class="" href="post.php?new_id=<?php echo $news_id; ?>"><b><?php echo $news_title ?></b></a>
                                        </h5>
                                        <span>Đăng bởi <a href="#"><?php echo $news_author ?></a></span>
                                        <p><span class="glyphicon glyphicon-time"></span> Ngày đăng <?php echo $news_date ?></p>
                                        <span>Tags: <a href="#"><?php echo $news_tags; ?></a></span> <br />
                                    </div>
                                    <div class=" d-grid d-md-flex justify-content-md-end ">
                                        <button class="btn btn-outline-danger"><a href="post.php?new_id=<?php echo $news_id; ?>">See More <i class='bx bx-right-arrow-alt'></i></a></button>
                                    </div>
                                    <div style="background-color:#9F0311; height: 1px; margin-top:25px; margin-bottom: 25px;"></div>
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <?php include "includes/sidebar.php"; ?>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php 
    include "includes/footer.php";
?>