<?php 
    if(isset($_GET['edit'])){
        $the_image_id = $_GET['edit'];
    }

    $query = "SELECT * FROM image WHERE image_id = $the_image_id";
    $select_image_by_id = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_assoc($select_image_by_id)){
        $image_id = $row['image_id'];
        $image_title = $row['image_title'];
        $image_content = $row['image_content'];
    }

    if(isset($_POST['update_list_image'])){
        $image_title = $_POST['image_title'];
        $image_content = $_POST['image_content'];

        $query = "UPDATE image SET ";
        $query.=  "image_title = '{$image_title}', ";
        $query.=  "image_content = '{$image_content}' ";       
        $query.=  "WHERE image_id = {$the_image_id} "; 

        $update_image = mysqli_query($connect, $query);
        confirmQuery($update_image);

        echo "<p class='bg-success'>News Updated successfully!! . <a href='../hinh-anh.php?hinh-anh={$the_image_id}'>View Noti </a> or <a href='image.php'>Edit More Notification</a> </p>";
    }

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group"> 
        <label for="image_title">Danh mục Hình Ảnh</label>
        <input value="<?php echo $image_title; ?>" type="text" class="form-control" name="image_title">
    </div>
    <div class="form-group"> 
        <label for="image_content">Nội dung Danh mục Hình Ảnh</label>
        <textarea class="form-control" id="summernote" name="image_content" cols="30" rows="10">
            <?php echo $image_content; ?>
        </textarea>
    </div>
    <div class="form-group"> 
        <input class="btn btn-dark" type="submit" name="update_list_image" value="Publish List Image">
    </div>
</form>

<?php include "includes/admin_footer.php"; ?>