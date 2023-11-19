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
    <section style="height: 120px;" id="header">
        <div class="container">
            <div class="row ">
                <div class="col-6">
                    <h4>TRUNG TÂM TIN HỌC THỐNG KÊ KHU VỰC II</h4>
                    <h5 style="color: #fff;">Center Of Statistical Infomatics Services No 2</h5>
                </div>
                <nav style="background-color: #9F0311;" class="navbar navbar-expand-lg col-6">
                    <div style="background-color: #9F0311;" class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#home">Trang Chủ</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        Về Chúng Tôi
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#introduction">Giới Thiệu</a></li>
                                        <li><a class="dropdown-item" href="chuc-nang.php">Chức Năng Nhiệm Vụ</a></li>
                                        <li><a class="dropdown-item" href="co-cau-to-chuc.php">Cơ Cấu Tổ Chức</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#news" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Tin Tức
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li >
                                            <a class="dropdown-item" href="ban-tin.php">Bản Tin</a>
                                        </li>
                                        <li><a class="dropdown-item" href="doan-the.php">Hoạt Động Đoàn Thể</a></li>
                                        <li><a class="dropdown-item" href="thong-bao.php">Thông Báo</a></li>
                                        <li><a class="dropdown-item" href="hinh-anh.php">Hình Ảnh</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="san-pham-dich-vu.php">Sản Phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Liên Hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>

        <section class="home container">
            <div class="row" id="home">
                <div class="col">
                    <img class="img-fluid" src="images/banner.jpg" alt="banner">
                </div>
            </div>
            <div class="row justify-content-center" id="introduction">
                <h5 class="title text-center"><a style="text-decoration: none; color: #9F0311;" href="#">Giới thiệu Trung tâm Tin học và Tính toán</a></h5>
                <div class="col-8"> 
                    Trung tâm Tin học và Tính toán – Viện Hàn lâm Khoa học và Công nghệ Việt Nam (Tên giao dịch tiếng Anh: Center for Informatics and Computing) được thành lập theo Quyết định số 107/QĐ-KHCNVN ngày 16 tháng 2 năm 2009 của Chủ tịch Viện Khoa học và Công nghệ Việt Nam với tên gọi là Trung tâm Tin học. Ngày 19/02/2013 Chủ tịch Viện Hàn lâm Khoa học và Công nghệ Việt Nam ban hành quyết định số 62/QĐ-VHL về việc chuyển đổi Trung tâm Tin học thành Trung tâm Tin học và Tính toán. Từ khi thành lập đến nay, mặc dù là đơn vị mới còn gặp nhiều khó khăn, Ban Lãnh đạo và toàn thể nhân viên của Trung tâm đã nỗ lực vượt bậc thực hiện các..
                    <a href="gioi-thieu.php">Xem Thêm>></a>
                </div>
            </div>
            <div class="row tabs" id="product">
                <h5 class="title text-center">Sản phẩm dịch vụ</h5>
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="row">
                            <div class="col-8">
                                <h4>Chữ kí điện tử</h4> 
                                <br>
                                <p>
                                    Các ý nghĩa của chữ ký tay (đã nêu ở trên) chỉ mang tính “lý tưởng”, nhưng với chữ ký số thì "lý tưởng đã trở thành hiện thực".  <br/>
                                        Chữ ký số là chính xác tuyệt đối (không còn mối e ngại về việc chữ ký “không giống nhau mỗi lần ký”, như khi phải ký bằng tay); <br />
                                        Chữ ký số có thể được kiểm định một cách dễ dàng. Mọi sự giả mạo, gian lận vì thế đều bị phát hiện tức khắc. (Trong khi việc kiểm định chữ ký viết tay, con dấu giả,... là không đơn giản và thường đòi hỏi phương tiện kỹ thuật đặc biệt). <br />
                                    Chữ ký số cho phép văn bản điện tử thay thế văn bản giấy, hỗ trợ đắc lực cho việc triển khai “Chính phủ điện tử”.
                                </p>
                                
                            </div>
                        
                            <div class="col-4">
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
                    <div class="col-3 tab-item active">
                        Dịch vụ chữ kí số
                    </div>
                    <div class="col-3 tab-item">
                        Seminar
                    </div>
                    <div class="col-3 tab-item">
                        Vast Campus
                    </div>
                    <div class="col-3 tab-item">
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
                        $news_title = $row['news_title'];
                        $news_author = $row['news_author'];
                        $news_date = $row['news_date'];
                        $news_image = $row['news_image'];
                        $news_content = substr($row['news_content'],0,100);
                        $news_status = $row['news_status'];

                        if($news_status == 'published'){
                            ?>   
                                <!-- First Blog Post -->
                                <div  class="col-6 news-header" >
                                    <div class="row">
                                        <div class="col-6">
                                            <img class="img-fluid" src="images/<?php echo $news_image; ?>" alt="">
                                        </div>
                                        <div class="col-6">
                                            <a href="post.php?new_id=<?php echo $news_id; ?>"><?php echo $news_title; ?></a>
                                            <br />
                                            <p>
                                                <i class='bx bxs-calendar'></i>
                                                <?php echo $news_date ?>
                                            </p>
                                            <div>
                                                <?php echo $news_content; ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            <?php
                        }
                    }
                ?>
                        
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <button class="btn"><a href="ban-tin.php">See More</a></button> 
                </div>
            </div>
            <div class="row" id="noti">
                <div class="col-5">
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
                <div class="col-1"></div>
                <div class="col-6">
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
                <button class="btn justify-content-end"><a href="thong-bao.php">See More</a></button>
            </div>

            <div class="row" id="lib-img">
                <div class="col-9">
                    <div class="row">
                        <h5 class="title">Thư Viện Ảnh</h5>
                        <div class="col-3">

                            <img class="img-fluid" src="images/chukyso.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="images/chukyso.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="images/chukyso.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="images/chukyso.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="images/chukyso.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="images/chukyso.jpg" alt="">
                        </div>
                        <div class="col-3">
                            <img class="img-fluid" src="images/chukyso.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="title">Liên kết</h5>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section style="background-color: #9F0311; color: #fff; padding: 5px; " id="footer">
            <div  class="container">
                <div class="row">
                    <div class="col-5">
                        <h5 style="color: #fff;"></h5><b>Trung tâm Tin học và Tính toán - Viện Hàn lâm KHCNVN</b></h5> <br /> <br />
                        Liên hệ với Phòng Nội dung thông tin số khi phát hành lại thông tin trên Website này. <br /> 
                        Địa chỉ: 18 Hoàng Quốc Việt, Cầu Giấy, Hà Nội. <br /> 
                        Email: thongtin@vast.vn
                    </div>
                    <div class="col-2">
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
                    <div class="col-5 justify-content-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0591412047556!2d106.69259627481863!3d10.80678245863353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528c176a97ead%3A0x81d7ce6bc53ab3c8!2zVHJ1bmcgdMOibSB0aW4gaOG7jWMgVGjhu5FuZyBrw6ogS2h1IHbhu7FjIElJIChDT1NJU0hDTSk!5e0!3m2!1svi!2s!4v1700034309387!5m2!1svi!2s" height="220px" width="80%" style="border: 1px solid #000; margin-left: 100px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class=""></iframe>
                    </div>
                </div>
                <hr>
                <span>© 2023 COSIS.HCM - Developed by Thien Ngan</span>
                <br />
            </div>
        </section>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
<?php 
    include "includes/footer.php";
?>

    