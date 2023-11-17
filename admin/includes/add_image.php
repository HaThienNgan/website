<?php 

    if(isset($_POST['create_image'])){
        $image_title = $_POST['image_title'];
        $image_content = $_POST['image_content'];

        $query = "INSERT INTO image(image_title, image_content)";
        $query.= " VALUES('{$image_title}', '{$image_content}' )";
        $create_image_query = mysqli_query($connect, $query);

        confirmQuery($create_image_query);

        $the_image_id = mysqli_insert_id($connect);
        echo "<p class='bg-success'>News Created successfully!! . <a href='../hinh-anh.php?hinh-anh={$the_image_id}'>View News </a> or <a href='image.php'>Edit More Image</a> </p>";
    }

?>



<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group"> 
        <label for="image_title">Danh mục Hình Ảnh</label>
        <input type="text" class="form-control" name="image_title">
    </div>
    <div class="form-group"> 
        <label for="summernote">Hình ảnh</label>
        <textarea class="form-control" name="image_content" id="summernote" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group"> 
        <input class="btn btn-dark" type="submit" name="create_image" value="Publish List Image">
    </div>
</form>
<script>
    
</script>
<?php include "includes/admin_footer.php"; ?>