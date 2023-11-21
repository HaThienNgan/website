<style>
    .sidebar{
        overflow-x:hidden;
        overflow-y:auto; 
        z-index: 101;
        background-color: #FFE6E6;
    }
    .sidebar::-webkit-scrollbar {
        width: 10px;
    }
    .sidebar::-webkit-scrollbar-thumb{
        background-image: linear-gradient(-45deg, #9F0311, #FFE6E6);
        border-radius: 50px;
    }
    .sidebar.close{
    width: 90px;
}
</style>
<section style="height: 120px;" id="header">
        <div class="container">
            <div class="row ">
                <div class="col-6">
                    <h4>TRUNG TÂM TIN HỌC THỐNG KÊ KHU VỰC II</h4>
                    <h5 style="color: #fff;">Center Of Statistical Infomatics Services No 2</h5>
                </div>
                <nav style="background-color: #9F0311;" class="navbar navbar-expand-lg col-6 ">
                    <div style="background-color: #9F0311;" class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Trang Chủ</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        Về Chúng Tôi
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="gioi-thieu.php">Giới Thiệu</a></li>
                                        <li><a class="dropdown-item" href="chuc-nang.php">Chức Năng Nhiệm Vụ</a></li>
                                        <li><a class="dropdown-item" href="co-cau-to-chuc.php">Liên Hệ</a></li>
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
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#news" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Cơ Cấu Tổ Chức
                                    </a>
                                    <ul class="dropdown-menu list-unstyled">
                                        <li >
                                            <a class="dropdown-item" href="co-cau-to-chuc.php">Giới Thiệu</a>
                                        </li>
                                        <?php 
                                            $query = "SELECT * FROM structure";
                                            $select_structure_menu = mysqli_query($connect, $query);
                                        ?>
                                        <?php
                                            while ($row = mysqli_fetch_assoc($select_structure_menu)){
                                                $structure_id = $row['structure_id'];
                                                $structure_title = $row['structure_title'];
                                                echo "<li> <a class='dropdown-item' href='phong-ban.php?phong-ban=$structure_id'> {$structure_title} </a></li>";
                                            }          
                                        ?>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="san-pham-dich-vu.php">Sản Phẩm</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>