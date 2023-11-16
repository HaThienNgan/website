<?php 

    if(isset($_POST['create_department'])){
        $department_id = $row['department_id'];
        $department_struc_id = $row['department_struc_id'];
        $department_job_title = $row['department_job_title'];
        $department_name = $row['department_name'];
        $department_phone = $row['department_phone'];
        $department_email = $row['department_email'];

        $department_image = $_FILES['department_image']['name'];
        $department_image_temp = $_FILES['department_image']['tmp_name'];

        $department_descrip = $row['department_descrip'];

        move_uploaded_file($department_image_temp, "../images/$department_image");

        $query = "INSERT INTO department(department_struc_id, department_job_title, department_name, department_phone, department_email, department_image, department_descrip)";
        $query.= " VALUES('{$department_struc_id}','{$department_job_title}','{$department_name}', '{$department_phone}','{$department_email}','{$department_image}', '{$department_descrip}')";
        $create_department_query = mysqli_query($connect, $query);

        confirmQuery($create_department_query);

        $the_department_id = mysqli_insert_id($connect);
        echo "<p class='bg-success'>Department Created successfully!! . <a href='admin_phongban.php'>Edit More </a> </p>";
    }

?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group"> 
        <label for="department_job_title">Chức Danh</label>
        <input type="text" class="form-control" name="department_job_title">
    </div>
    <div class="form-group"> 
        <label for="department_struc_id">Phòng Ban: </label>
        <select name="news_category_id" id="department_struc_id">
            <?php 

                $query = "SELECT * FROM structure";
                $select_structure = mysqli_query($connect, $query);
                confirmQuery($select_structure);
                while ($row = mysqli_fetch_assoc($select_structure)){
                    $structure_id = $row['structure_id'];
                    $structure_title = $row['structure_title'];
                    echo "<option value='{$structure_id}'>{$structure_title}</option>";
                }
                
            ?>
        </select>
    </div>
    <div class="form-group"> 
        <label for="department_name">Họ và Tên</label>
        <input type="text" class="form-control" name="department_name">
    </div>
    <div class="form-group">
        <label for="department_phone">Số điện thoại</label>
        <input type="text" class="form-control" name="department_phone">
    </div>
    <div class="form-group"> 
        <label for="department_email">Email</label>
        <input type="email" class="form-control" name="department_email">
    </div>
    <div class="form-group"> 
        <label for="department_image">Hình ảnh Cá Nhân</label>
        <input type="file" class="form-control" name="department_image">
    </div>
    <div class="form-group"> 
        <label for="summernote">Mô tả</label>
        <textarea class="form-control" name="department_descrip" id="summernote" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group"> 
        <input class="btn btn-dark" type="submit" name="create_department" value="Publish Department">
    </div>
</form>
<script>
    
</script>
<?php include "includes/admin_footer.php"; ?>