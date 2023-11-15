
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
<div class="container">
    <nav class="sidebar close">
        <header class="">
            <div class="image-text">
                <span class="image">
                    <img src="images/logo.jpg" alt="logo">
                </span>

                <div class="text header-text">
                    <span class="name">
                        COSIS
                    </span>
                    <span class="profession">Web Developer</span>
                </div>

                <i class='bx bx-chevron-right toggle'></i>
            </div>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-link">
                    <li class="search-box">
                        <i class='bx bx-search-alt icon' ></i>
                        <input type="search" name="" placeholder="Tìm kiếm">
                    </li>
                    <li class="nav-links">
                        <a style="text-decoration: none;" href="index.php">
                            <i class='bx bx-home-alt-2 icon'></i>
                            <span class="text nav-text">Trang Chủ</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a style="text-decoration: none;" href="chuc-nang.php">
                            <i class='bx bx-conversation icon'></i>
                            <span class="text nav-text">Chức năng Nhiệm vụ</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a style="text-decoration: none;" href="co-cau-to-chuc.php">
                            <i class='bx bx-group icon'></i>
                            <span class="text nav-text">Cơ cấu tổ chức</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a style="text-decoration: none;" href="ban-tin.php">
                            <i class='bx bx-atom icon'></i>
                            <span class="text nav-text">Hoạt động Khoa Học</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a style="text-decoration: none;" href="#">
                            <i class='bx bx-home-alt-2 icon'></i>
                            <span class="text nav-happy">Hoạt động đoàn thể</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a style="text-decoration: none;" href="san-pham-dich-vu.php">
                            <i class='bx bx-package icon'></i>
                            <span class="text nav-text">Sản phẩm dịch vụ</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a style="text-decoration: none;" href="thong-bao.php">
                            <i class='bx bx-notification icon'></i>
                            <span class="text nav-text">Thông báo</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a style="text-decoration: none;" href="#">
                            <i class='bx bx-image icon'></i>
                            <span class="text nav-text">Hình ảnh</span>
                        </a>
                    </li>
                    <li class="nav-links">
                        <a style="text-decoration: none;" href="#">
                            <i class='bx bx-download icon'></i>
                            <span class="text nav-text">Download</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <ul>
                    <li class="">
                        <a style="text-decoration: none;" href="#">
                            <i class='bx bx-log-in icon'></i>
                            <span class="text nav-text">Đăng nhập</span>
                        </a>
                    </li>
                    <li class="mode">
                        <div class="moon-sun">
                            <i class='bx bx-moon icon moon'></i>
                            <i class='bx bx-sun icon sun'></i>
                        </div>
                        <span class="mode-text text">Dark Mode</span>
                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>