<?php 
    include "includes/header.php";
?>
    <section id="header">
        <div class="container">
            <div class="row ">
                <div class="col-2">
                    <h4>WEBSITE</h4>
                </div>
                <div class="col-10">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav navbarSupportedContent" >
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#introduction">Giới Thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#product">Sản Phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#news">Bản Tin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#noti">Thông Báo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#lib-img">Thư Viện Ảnh</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </section>

        <section class="home container">
            <div class="row" id="#">
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
                        
                            <div class="col-2">
                                <img width="100%" src="images/chukyso.jpg" alt="">
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
                        $news_content = substr($row['news_content'],0,500);
                        $news_status = $row['news_status'];

                        if($news_status == 'published'){
                            ?>   
                                <!-- First Blog Post -->
                                <div  class="col-6 news-header" >
                                <div class="row">
                                        <a href="post.php?new_id=<?php echo $news_id; ?>"><?php echo $news_title; ?></a>
                                        <div class="col-6">
                                            <img class="img-fluid" src="images/<?php echo $news_image; ?>" alt="">
                                        </div>
                                        <div class="col-6"><?php echo $news_content; ?></div>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                ?>
                
                <button class="btn justify-content-end"><a href="ban-tin.php">See More</a></button>
            </div>

            <div class="row justify-content-center" id="noti">
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
                        $noti_content = substr($row['noti_content'],0,300);
                        ?>   
                            <div class="col-7">
                                <p><?php echo $noti_date; ?></p>
                                <a href="post.php?noti_id=<?php echo $noti_id; ?>"><?php echo $noti_title; ?></a>
                            </div>
                        <?php
                        }
                    ?>
                
                <div class="col-7">
                    <p>08/11/2023</p>
                    <a href="#">
                        Trung tâm Tin học và Tính toán – Viện Hàn lâm Khoa học và Công nghệ Việt Nam thông báo tuyển viên chức
                    </a>
                </div>
                <div class="col-7">
                    <p>08/11/2023</p>
                    <a href="#">
                        Trung tâm Tin học và Tính toán – Viện Hàn lâm Khoa học và Công nghệ Việt Nam thông báo tuyển viên chức
                    </a>
                </div>
                <div class="col-7">
                    <p>08/11/2023</p>
                    <a href="#">
                        Trung tâm Tin học và Tính toán – Viện Hàn lâm Khoa học và Công nghệ Việt Nam thông báo tuyển viên chức
                    </a>
                </div>
                <div class="col-7">
                    <p>08/11/2023</p>
                    <a href="#">
                        Trung tâm Tin học và Tính toán – Viện Hàn lâm Khoa học và Công nghệ Việt Nam thông báo tuyển viên chức
                    </a>
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
                    <h5 class="title">Liên kết</h5>
                </div>
            </div>

        </section>

        <section style="background-color: #9F0311; height: 100%; text-align: center;" id="footer">
            <div  class="container">
                Bản quyền thuộc về Trung tâm Tin học và Tính toán - Viện Hàn lâm KHCNVN <br />
                Liên hệ với Phòng Nội dung thông tin số khi phát hành lại thông tin trên Website này. <br />
                Địa chỉ: 18 Hoàng Quốc Việt, Cầu Giấy, Hà Nội. Email: thongtin@vast.vn
                <br />
                Ghi rõ nguồn “ Trung tâm Tin học và Tính toán - Viện Hàn lâm Khoa học và Công nghệ Việt Nam”.
            </div>
        </section>
    
<?php 
    include "includes/footer.php";
?>

    