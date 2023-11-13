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

<section id="header">
    <div class="container">
        <div class="row ">
            <div class="col-4">
                <h4>Thông Báo</h4>
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
                        $news_content = substr($row['news_content'],0,400);
                        $news_tags = $row['news_tags'];
                        $news_status = $row['news_status'];

                        if($news_status == 'published'){
                            ?>   
                                <!-- First Blog Post -->
                                <h5 >
                                    <a class="" href="post.php?new_id=<?php echo $news_id; ?>"><b><?php echo $news_title ?></b></a>
                                </h5>
                                <span>Đăng bởi <a href="#"><?php echo $news_author ?></a></span>
                                <p><span class="glyphicon glyphicon-time"></span> Ngày đăng <?php echo $news_date ?></p>
                                <div style="text-align: center;">
                                    <a href="#">
                                        <img class="img-fluid" src="images/<?php echo $news_image; ?> " alt="" >
                                    </a>
                                </div>
                                <p><?php echo $news_content ?></p>
                                <span>Tags: <a href="#"><?php echo $news_tags; ?></a></span> <br />
                                <a class="btn btn-outline-dark" href="post.php?p_id=<?php echo $post_id ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                                <div style="background-color:#9F0311; height: 2px; margin-top:25px; margin-bottom: 25px;"></div>
                            <?php
                        }
                    }
                ?>
            </div>
            <div style="padding: 15px" class="col-4">
                <div style="margin-bottom: 50px;"> 
                    <p style="color: #9F0311;"><b>Tin Nổi Bật</b></p>
                    <ul style="list-style-type: none;">
                        <li><a href="">Trung Tâm Tin học và Tính toán tham gia Bài giảng đại chúng "Thị giác người - Thị giác máy"</a></li>
                        <hr>
                        <li><a href="">Trung Tâm Tin học và Tính toán tham gia Bài giảng đại chúng "Thị giác người - Thị giác máy"</a></li>
                        <hr>
                        <li><a href="">Trung Tâm Tin học và Tính toán tham gia Bài giảng đại chúng "Thị giác người - Thị giác máy"</a></li>
                        <hr>
                        <li><a href="">Trung Tâm Tin học và Tính toán tham gia Bài giảng đại chúng "Thị giác người - Thị giác máy"</a></li>
                    </ul>
                </div>
                <div style="border: 1px solid #9F0311; background-color: #FFE6E6; border-radius: 8px; padding: 10px; margin-bottom: 40px;"> 
                    <p style="color: #9F0311; margin-left: 5px"><b>Các Công Trình Ứng Dụng</b></p>
                    <ul style="list-style-type: none;">
                        <li><a href="">Mắt Thông Minh Smart-Eyes</a></li>
                        <hr>
                        <li><a href="">Thiết bị phát hiện vật thể lạ (FOD)</a></li>
                        <hr>
                        <li><a href="">Hệ thống Thám Không Thông tin Liên Lạc</a></li>    
                        <hr>
                        <li><a href="">Hệ thống Thám Không Thông tin Liên Lạc</a></li>               
                    </ul>
                </div>
                <div style=" padding-top: 15px; margin-bottom: 50px;">
                    <p style="color: #9F0311;"><b>Danh Mục</b></p>
                    <div style="margin-top: -10px;" class="row">
                        <div class="col-6">
                            <a href="">Bản tin</a>
                        </div>
                        <div class="col-6">
                            <a href="">Bản tin</a>
                        </div>
                        <div class="col-6">
                            <a href="">Bản tin</a>
                        </div>
                        <div class="col-6">
                            <a href="">Bản tin</a>
                        </div>
                        <div class="col-6">
                            <a href="">Bản tin</a>
                        </div>
                        <div class="col-6">
                            <a href="">Bản tin</a>
                        </div>
                    </div>
                </div>
                <div style="border: 1px solid #9F0311; background-color: #FFE6E6; border-radius: 8px; padding: 10px; margin-bottom: 40px;"> 
                    <p style="color: #9F0311; margin-left: 5px"><b>Các Tin Khác</b></p>
                    <ul style="list-style-type: none;">
                        <li><a href="">Mắt Thông Minh Smart-Eyes</a></li>
                        <hr>
                        <li><a href="">Thiết bị phát hiện vật thể lạ (FOD)</a></li>
                        <hr>
                        <li><a href="">Hệ thống Thám Không Thông tin Liên Lạc</a></li>    
                        <hr>
                        <li><a href="">Hệ thống Thám Không Thông tin Liên Lạc</a></li>               
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php 
    include "includes/footer.php";
?>