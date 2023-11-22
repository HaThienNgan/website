<?php 
    include "includes/header.php";
?>
<style>
    #footer li a {
        text-decoration: none;
        color: #fff;
    }
    #footer li a:hover {
        text-decoration: underline #fff;
    }
    #footer ul{
        list-style-type: none;
    }
</style>

    <section class="home container">
        <div class="row" id="home">
            <div class="col-md-12">
                <img class="img-fluid" src="images/banner.jpg" alt="banner">
            </div>
        </div>
        <div class="row justify-content-end" id="introduction">
            <h5 class="title text-center">
                <a href="#">Giới thiệu Trung tâm Tin học và Tính toán</a>
            </h5>
            <div class="col-md-6"> 
                Trung tâm Tin học và Tính toán – Viện Hàn lâm Khoa học và Công nghệ Việt Nam (Tên giao dịch tiếng Anh: Center for Informatics and Computing) được thành lập theo Quyết định số 107/QĐ-KHCNVN ngày 16 tháng 2 năm 2009 của Chủ tịch Viện Khoa học và Công nghệ Việt Nam với tên gọi là Trung tâm Tin học. Ngày 19/02/2013 Chủ tịch Viện Hàn lâm Khoa học và Công nghệ Việt Nam ban hành quyết định số 62/QĐ-VHL về việc chuyển đổi Trung tâm Tin học thành Trung tâm Tin học và Tính toán . . .
                <div style="padding-top: 10px;" class="d-grid d-md-flex justify-content-md-begin">
                    <button class="btn btn-outline-danger"><a href="gioi-thieu.php">Tìm hiểu thêm về chúng tôi <i class='bx bx-right-arrow-alt'></i></a></button>
                </div>
            </div>
        </div>
        <div class="row tabs" id="product">
            <h5 class="title text-center">Sản phẩm dịch vụ</h5>
            <div class="tab-content">
                <div class="tab-pane active">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Chữ kí điện tử</h4> 
                            <br>
                            <p>
                                Các ý nghĩa của chữ ký tay (đã nêu ở trên) chỉ mang tính “lý tưởng”, nhưng với chữ ký số thì "lý tưởng đã trở thành hiện thực".  <br/>
                                    Chữ ký số là chính xác tuyệt đối (không còn mối e ngại về việc chữ ký “không giống nhau mỗi lần ký”, như khi phải ký bằng tay); <br />
                                    Chữ ký số có thể được kiểm định một cách dễ dàng. Mọi sự giả mạo, gian lận vì thế đều bị phát hiện tức khắc. (Trong khi việc kiểm định chữ ký viết tay, con dấu giả,... là không đơn giản và thường đòi hỏi phương tiện kỹ thuật đặc biệt). <br />
                                Chữ ký số cho phép văn bản điện tử thay thế văn bản giấy, hỗ trợ đắc lực cho việc triển khai “Chính phủ điện tử”.
                            </p>
                            
                        </div>
                    
                        <div class="col-md-4">
                            <img class="img-fluid" src="images/chukyso.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane">
                    <h4>Thông Tin Chung</h4> 
                </div>
                <div class="tab-pane">
                    <h4>Thông Tin Chung</h4> 
                </div>
                <div class="tab-pane">
                    <h4>Thông Tin Chung</h4> 
                </div>
                
            </div>
            <div class="tabs-group">
                <div class="line"></div>
                <div class="col-md-3 tab-item active">
                    Dịch vụ chữ kí số
                </div>
                <div class="col-md-3 tab-item">
                    Seminar
                </div>
                <div class="col-md-3 tab-item">
                    Vast Campus
                </div>
                <div class="col-md-3 tab-item">
                    Vast Portal
                </div>
            </div>
        </div>

        <div class="row" id="news">
            <h5 class="title">Bản Tin</h5>
            <?php
                $query = "SELECT * FROM news ORDER BY news_date DESC LIMIT 4";
                $select_news_query = mysqli_query($connect, $query);
                
                while ($row = mysqli_fetch_assoc($select_news_query)){
                    $news_id = $row['news_id'];
                    $news_title = substr($row['news_title'],0,120);
                    $news_author = $row['news_author'];
                    $news_date = $row['news_date'];
                    $news_image = $row['news_image'];
                    $news_content = substr($row['news_content'],0,100);
                    $news_status = $row['news_status'];

                    if($news_status == 'published'){
                        ?>   
                            <!-- First Blog Post -->
                            <div  class="col-md-6 news-header" >
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="#">
                                                <img style="object-fit: cover; height: 150px; width: 200px;" class="img-fluid" src="images/<?php echo $news_image; ?> " alt="" >
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <a class="" href="post.php?new_id=<?php echo $news_id; ?>"><b><?php echo $news_title ?> . . .</b></a>
                                        <div>
                                            <i class='bx bx-calendar-alt'></i>
                                            <?php echo $news_date; ?>
                                        </div>
                                        <span><i class='bx bx-user'></i><a style="font-size: 14px;" href="#"><?php echo $news_author ?></a></span>
                                       
                                    </div>

                                </div>
                            </div>
                        <?php
                    }
                }
            ?>
            <div class="d-grid justify-content-md-center ">
                    <button style="width: 500px;" class="btn btn-outline-danger"><a href="thong-bao.php">See More <i class='bx bx-right-arrow-alt'></i></a></button>
            </div>        
        </div>

        <div class="row" id="noti">
            <div style="background-color: #FFE6E6; padding-bottom: 10px; border-radius: 10px;" class="col-md-5">
                <div style="height: 350px;" >
                    <h5 class="title">
                        Thông Báo
                    </h5>
                
                    <?php
                        $query = "SELECT * FROM notification ORDER BY noti_date DESC LIMIT 6";
                        $select_noti_query = mysqli_query($connect, $query);
                        
                        while ($row = mysqli_fetch_assoc($select_noti_query)){
                            $noti_id = $row['noti_id'];
                            $noti_title = $row['noti_title'];
                            $noti_date = $row['noti_date'];
                            $noti_image = $row['noti_image'];
                            $noti_content = substr($row['noti_content'],0,100);
                            ?>   
                                <a href="post.php?noti_id=<?php echo $noti_id; ?>"><?php echo $noti_title; ?></a>
                                <p><?php echo $noti_date; ?></p>
                                
                            <?php
                        }
                    ?>
                </div>
                <div class=" d-grid d-md-flex justify-content-md-end ">
                    <button style="background-color: #fff;" class="btn btn-outline-danger"><a href="thong-bao.php">See More <i class='bx bx-right-arrow-alt'></i></a></button>
                </div>
            </div>

            <div style="height: 350px;" class="col-md-1"></div>
            
            <div style="border: 1px solid #9F0311; padding-bottom: 10px; border-radius: 10px;" class="col-md-6">
                <div style="height: 350px;">
                    <h5 class="title">Hoạt Động Đoàn Thể</h5>
                    <?php 
                        $query = "SELECT * FROM activities ORDER BY activity_date DESC LIMIT 6";
                        $select_acti_query = mysqli_query($connect, $query);
                    
                        while ($row = mysqli_fetch_assoc($select_acti_query)){
                            $activity_id = $row['activity_id'];
                            $activity_title = $row['activity_title'];
                            $activity_author = $row['activity_author'];
                            $activity_date = $row['activity_date'];
                            $activity_image = $row['activity_image'];
                            $activity_tags = $row['activity_tags'];
                            $activity_content = substr($row['activity_content'],0,100);
                            $activity_status = $row['activity_status'];

                            if($news_status == 'published'){
                    ?>   
                                <a href="post.php?acti_id=<?php echo $activity_id; ?>"><?php echo $activity_title; ?></a>
                                <p><?php echo $activity_date; ?></p>      
                    <?php
                            }
                        }
                    ?>
                </div>
                <div class="d-grid d-md-flex justify-content-md-end ">
                    <button style="background-color: #FFE6E6;" class="btn btn-outline-danger"><a href="doan-the.php">See More<i class='bx bx-right-arrow-alt'></i></a></button>
                </div>
            </div>
            
        </div>

        <div class="row" id="lib-img">
            <div class="col-md-8">
                <h5 class="title">Thư Viện Ảnh</h5>
                <div id="carouselExampleDark" class="carousel carousel-light slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="images/banner.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="images/banner.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/banner.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>

            <div class="col-md-4">
                <h5 class="title">Liên kết</h5>
            </div>
        </div>

    </section>

    <section style="background-color: #9F0311; color: #fff; padding: 5px; " id="footer">
        <div  class="container">
            <div class="row">
                <div class="col-md-5">
                    <h5 style="color: #fff;"></h5><b>Trung tâm Tin học và Tính toán - Viện Hàn lâm KHCNVN</b></h5> <br /> <br />
                    Liên hệ với Phòng Nội dung thông tin số khi phát hành lại thông tin trên Website này. <br /> 
                    Địa chỉ: 18 Hoàng Quốc Việt, Cầu Giấy, Hà Nội. <br /> 
                    Email: thongtin@vast.vn
                </div>
                <div class="col-md-2">
                    <h5 style="color: #fff;"></h5><b>Về Trung tâm TH&TT</b></h5> <br /> <br />
                    <ul >
                        <li><a href="#">Giới Thiệu</a></li> 
                        <li><a href="#">Cơ cấu tổ chức</a></li> 
                        <li><a href="#">Bản tin</a></li> 
                        <li><a href="#">Thông báo</a></li> 
                        <li><a href="#">Chức năng</a></li> 
                        <li><a href="#">Sản phẩm</a></li> 
                        <li><a href="#">Hình ảnh</a></li> 
                    </ul>
                </div>
                <div class="col-md-5 justify-content-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0591412047556!2d106.69259627481863!3d10.80678245863353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528c176a97ead%3A0x81d7ce6bc53ab3c8!2zVHJ1bmcgdMOibSB0aW4gaOG7jWMgVGjhu5FuZyBrw6ogS2h1IHbhu7FjIElJIChDT1NJU0hDTSk!5e0!3m2!1svi!2s!4v1700034309387!5m2!1svi!2s" height="220px" width="80%" style="border: 1px solid #000; margin-left: 100px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class=""></iframe>
                </div>
            </div>
            <hr>
            <span>© 2023 COSIS.HCM. All Rights Reserved.</span>
            <br />
        </div>
    </section>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
<?php 
    include "includes/footer.php";
?>

    