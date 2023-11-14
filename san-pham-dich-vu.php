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
                <h4>Sản phẩm Dịch vụ</h4>
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
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class=" dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        Cơ cấu Tổ chức
                                    </a>
                                    <?php 
                                        $query = "SELECT * FROM structure";
                                        $select_structure_menu = mysqli_query($connect, $query);
                                    ?>
                                    <ul class="dropdown-menu list-unstyled">
                                        <?php
                                            while ($row = mysqli_fetch_assoc($select_structure_menu)){
                                                $structure_id = $row['structure_id'];
                                                $structure_title = $row['structure_title'];
                                                echo "<li> <a class='dropdown-item' href='phong-ban.php?phong-ban=$structure_id'> {$structure_title} </a></li>";
                                            }          
                                        ?>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<section id="content-sanpham">
    <div class="container">
        <div class="row">
            <div class="col-10">
                
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php 
    include "includes/footer.php";
?>