<?php 

    if(isset($_POST['create_notification'])){
        $noti_title = $_POST['noti_title'];
        $noti_content = $_POST['noti_content'];
        $noti_date = date("d-m-y h:i:s");

        $noti_image = $_FILES['noti_image']['name'];
        $noti_image_temp = $_FILES['noti_image']['tmp_name'];

        move_uploaded_file($noti_image_temp, "../images/$noti_image");

        $query = "INSERT INTO notification(noti_title, noti_content, noti_date, noti_image)";
        $query.= " VALUES('{$noti_title}', '{$noti_content}', now(), '{$noti_image}' )";
        $create_noti_query = mysqli_query($connect, $query);

        confirmQuery($create_noti_query);

        $the_noti_id = mysqli_insert_id($connect);
        echo "<p class='bg-success'>News Created successfully!! . <a href='../posts.php?noti_id={$the_noti_id}'>View News </a> or <a href='notification.php'>Edit More Notification</a> </p>";
    }

?>



<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group"> 
        <label for="noti_title">Tiêu đề Thông Báo</label>
        <input type="text" class="form-control" name="noti_title">
    </div>
    <div class="form-group"> 
        <label for="noti_image">Hình Ảnh (Nếu có)</label>
        <input type="file" class="form-control" name="noti_image">
    </div>
    <div class="form-group"> 
        <label for="summernote">Nội dung Thông Báo</label>
        <textarea class="form-control" name="noti_content" id="summernote" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group"> 
        <input class="btn btn-dark" type="submit" name="create_notification" value="Publish Notification">
    </div>
</form>
<script>
    
</script>
<?php include "includes/admin_footer.php"; ?>