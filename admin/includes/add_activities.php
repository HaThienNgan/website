<?php 
    if(isset($_POST['create_activity'])){
        $activity_title = $_POST['activity_title'];
        $activity_author = $_POST['activity_author'];
        $activity_status = $_POST['activity_status'];

        $activity_image = $_FILES['activity_image']['name'];
        $activity_image_temp = $_FILES['activity_image']['tmp_name'];

        $activity_tags = $_POST['activity_tags'];
        $activity_content = $_POST['activity_content'];

        $activity_date = date("d-m-y h:i:s");

        move_uploaded_file($activity_image_temp, "../images/$activity_image");

        $query = "INSERT INTO activities(activity_title, activity_author, activity_date, activity_image, activity_content, activity_tags, activity_status)";
        $query.= " VALUES('{$activity_title}','{$activity_author}', now() ,'{$activity_image}','{$activity_content}','{$activity_tags}', '{$activity_status}')";
        $create_activities_query = mysqli_query($connect, $query);

        confirmQuery($create_activities_query);

        $the_activity_id = mysqli_insert_id($connect);
        echo "<p class='bg-success'>News Created successfully!! . <a href='../posts.php?acti_id={$the_activity_id}'>View News </a> or <a href='activities.php'>Edit More Posts</a> </p>";
    }

?>



<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group"> 
        <label for="activity_title">Tiêu Đề Hoạt Động Đoàn Thể</label>
        <input type="text" class="form-control" name="activity_title">
    </div>
    <div class="form-group"> 
        <label for="activity_author">Tác Giả Bài Đăng</label>
        <input type="text" class="form-control" name="activity_author">
    </div>
    <div class="form-group">
        <label for="activity_status">Trạng Thái Bài Đăng: </label>
        <select name="activity_status" id="">
            <option value=''>Select Options</option>
            <option value='published'>Công Khai</option>
            <option value='draft'>Bản Nháp</option>
        </select>
    </div>
    <div class="form-group"> 
        <label for="activity_image">Ảnh Đại Diện Bài Đăng</label>
        <input type="file" class="form-control" name="activity_image">
    </div>
    <div class="form-group"> 
        <label for="activity_tags">Tags</label>
        <input type="text" class="form-control" name="activity_tags">
    </div>
    <div class="form-group"> 
        <label for="summernote">Nội Dung Bài Đăng</label>
        <textarea class="form-control" name="activity_content" id="summernote" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group"> 
        <input class="btn btn-dark" type="submit" name="create_activity" value="Đăng Bài">
    </div>
</form>
<script>
    
</script>
<?php include "includes/admin_footer.php"; ?>