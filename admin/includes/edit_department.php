<?php 
    if(isset($_GET['department_id'])){
        $the_department_id = $_GET['department_id'];
    }

    $query = "SELECT * FROM department WHERE department_id = $the_department_id";
    $select_department_by_id = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_assoc($select_department_by_id)){
        $department_id = $row['department_id'];
        $department_job_title = $row['department_job_title'];
        $department_name = $row['department_name'];
        $department_struc_id = $row['department_struc_id'];
        $department_phone = $row['department_phone'];
        $department_email = $row['department_email'];
        $department_image = $row['department_image'];
        $department_descrip = $row['department_descrip'];
    }

    if(isset($_POST['update_department'])){
        $department_job_title = $_POST['department_job_title'];
        $department_name = $_POST['department_name'];
        $department_struc_id = $_POST['department_struc_id'];
        $department_phone = $_POST['department_phone'];
        $department_email = $_POST['department_email'];

        $department_image = $_FILES['department_image']['name'];
        $department_image_temp = $_FILES['department_image']['tmp_name'];
       
        $department_descrip = $_POST['department_descrip'];


        move_uploaded_file($department_image_temp, "../images/$department_image");

        if (empty($department_image)){
            $query = "SELECT * FROM department WHERE department_id = $the_department_id";
            $select_image = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_assoc($select_image)){
                $department_image = $row['department_image'];
            }
        }

        $query = "UPDATE department SET ";
        $query.=  "department_job_title = '{$department_job_title}', ";
        $query.=  "department_struc_id = '{$department_struc_id}', ";
        $query.=  "department_name = '{$department_name}', ";
        $query.=  "department_phone = '{$department_phone}', ";
        $query.=  "department_email = '{$department_email}', ";
        $query.=  "department_image = '{$department_image}', ";  
        $query.=  "department_descrip = '{$department_descrip}' ";     
        $query.=  " WHERE department_id = {$the_department_id} "; 

        $update_department = mysqli_query($connect, $query);
        confirmQuery($update_department);

        echo "<p class='bg-success'>Department Updated successfully!! . <a href='admin_phongban.php'>Edit More Department</a> </p>";
    }

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group"> 
        <label for="department_job_title">Chức Danh</label>
        <input value="<?php echo $department_job_title; ?>" type="text" class="form-control" name="department_job_title">
    </div>
    <div class="form-group"> 
        <select name="department_struc_id" id="department_struc_id">
            <?php 

                $query = "SELECT * FROM structure";
                $select_structures = mysqli_query($connect, $query);
                confirmQuery($select_structures);
                while ($row = mysqli_fetch_assoc($select_structures)){
                    $structure_id = $row['structure_id'];
                    $structure_title = $row['structure_title'];
                    echo "<option value='{$structure_id}'>{$structure_title}</option>";
                }
                
            ?>
        </select>
    </div>
    <div class="form-group"> 
        <label for="department_name">Họ và Tên</label>
        <input value="<?php echo $department_name; ?>" type="text" class="form-control" name="department_name">
    </div>
    <div class="form-group">
        <label for="department_phone">Số Điện Thoại </label>
        <input value="<?php echo $department_phone; ?>" type="text" class="form-control" name="department_phone">
    </div>
    <div class="form-group">
        <label for="department_email">Email </label>
        <input value="<?php echo $department_email; ?>" type="email" class="form-control" name="department_email">
    </div>
    <div class="form-group"> 
        <img width="100" src="../images/<?php echo $department_image; ?>" alt="picture">
        <label for="department_image">Hình ảnh mới: </label>
        <input type="file" class="form-control" name="department_image">
    </div>
    <div class="form-group"> 
        <label for="department_descrip">Mô Tả</label>
        <textarea class="form-control" id="summernote" name="department_descrip" cols="30" rows="10">
            <?php echo $department_descrip; ?>
        </textarea>
    </div>
    <div class="form-group"> 
        <input class="btn btn-dark" type="submit" name="update_department" value="Publish Department">
    </div>
</form>

<?php include "includes/admin_footer.php"; ?>