<?php 
    include "includes/header.php";
?>

<section id="content-phongban">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">

                <?php
                    if(isset($_GET['phong-ban'])){
                        $department_struc = $_GET['phong-ban'];
                    }

                    $query = "SELECT * FROM department WHERE department_struc_id = $department_struc";
                    $select_all_department_query = mysqli_query($connect, $query);
                    
                    while ($row = mysqli_fetch_assoc($select_all_department_query)){
                        $department_id = $row['department_id'];
                        $department_job_title = $row['department_job_title'];
                        $department_name = $row['department_name'];
                        $department_phone = $row['department_phone'];
                        $department_email = $row['department_email'];
                        $department_image = $row['department_image'];
                        $department_descrip = $row['department_descrip'];
                ?> 

                    <div style="border: 1px solid #9F0311; border-radius: 5px;" class="row">
                        <div class="col-4" style="text-align:center;">
                            <img class="img-fluid" src="images/<?php echo $department_image; ?>" alt="hinhanhphongban" style="height: 350px; text-align:center;">
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col-4"><?php echo $department_job_title; ?>: </div>
                                <div class="col-8"><?php echo $department_name; ?></div>
                                <div class="col-4">Điện thoại: </div>
                                <div class="col-8"><?php echo $department_phone; ?></div>
                                <div class="col-4">Email: </div>
                                <div class="col-8"><?php echo $department_email; ?></div>
                                <br/> <br/>
                                <div class="col-12">
                                    <?php echo $department_descrip; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
                <div style="border: 1px solid #9F0311; border-radius: 5px;" class="row">
                    <div class="col-4" style="text-align:center;">
                        <img class="img-fluid" src="images/logo.jpg" alt="hinhanhphongban" style="height: 350px; text-align:center;">
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-4">Trưởng phòng: </div>
                            <div class="col-8">ThS.CVC. Phạm Thanh Mai</div>
                            <div class="col-4">Điện thoại: </div>
                            <div class="col-8">024-3.7916937</div>
                            <div class="col-4">Email: </div>
                            <div class="col-8">thanhmai @cic.vast.vn</div>
                            <br/> <br/>
                            <div class="col-12">
                                Lãnh đạo mọi mặt hoạt động của Trung tâm Tin học và Tính toán theo chức năng, nhiệm vụ được giao; Chỉ đạo, giải quyết những công việc thuộc thẩm quyền và trách nhiệm của Giám đốc Trung tâm Tin học và Tính toán được Viện Hàn lâm Khoa học và Công nghệ Việt Nam quy định; Chịu trách nhiệm trước Chủ tịch Viện Hàn lâm Khoa học và Công nghệ Việt Nam về toàn bộ hoạt động của Trung tâm Tin học và Tính toán; Trực tiếp chỉ đạo lĩnh vực công tác: Chiến lược và quy hoạch phát triển; Các chương trình, dự án, đề án quan trọng của Trung tâm; Quản lý và điều hành công tác: Kế hoạch - Tài chính, Tổ chức - Cán bộ, Thi đua khen thưởng.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php 
    include "includes/footer.php";
?>