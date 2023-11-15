<?php 

    if(isset($_POST['create_news'])){
        $news_title = $_POST['news_title'];
        $news_category_id = $_POST['news_category_id'];
        $news_author = $_POST['news_author'];
        $news_status = $_POST['news_status'];

        $news_image = $_FILES['news_image']['name'];
        $news_image_temp = $_FILES['news_image']['tmp_name'];

        $news_tags = $_POST['news_tags'];
        $news_content = $_POST['news_content'];

        $news_date = date("d-m-y h:i:s");
        //$post_comment_count = 4;

        move_uploaded_file($news_image_temp, "../images/$news_image");

        $query = "INSERT INTO news(news_category_id, news_title, news_author, news_date, news_image, news_content, news_tags, news_status)";
        $query.= " VALUES('{$news_category_id}','{$news_title}','{$news_author}', now() ,'{$news_image}','{$news_content}','{$news_tags}', '{$news_status}')";
        $create_news_query = mysqli_query($connect, $query);

        confirmQuery($create_news_query);

        $the_new_id = mysqli_insert_id($connect);
        echo "<p class='bg-success'>News Created successfully!! . <a href='../posts.php?new_id={$the_new_id}'>View News </a> or <a href='news.php'>Edit More Posts</a> </p>";
    }

?>



<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group"> 
        <label for="news_title">News Title</label>
        <input type="text" class="form-control" name="news_title">
    </div>
    <div class="form-group"> 
        <label for="news_category_id">News Category: </label>
        <select name="news_category_id" id="news_category_id">
            <?php 

                // $query = "SELECT * FROM categories";
                // $select_categories = mysqli_query($connect, $query);
                // confirmQuery($select_categories);
                // while ($row = mysqli_fetch_assoc($select_categories)){
                //     $cat_id = $row['cat_id'];
                //     $cat_title = $row['cat_title'];
                //     echo "<option value='{$cat_id}'>{$cat_title}</option>";
                // }
                
            ?>
        </select>
    </div>
    <div class="form-group"> 
        <label for="news_author">News Author</label>
        <input type="text" class="form-control" name="news_author">
    </div>
    <div class="form-group">
        <label for="news_status">News Status: </label>
        <select name="news_status" id="">
            <option value=''>Select Options</option>
            <option value='published'>Published</option>
            <option value='draft'>Draft</option>
        </select>
    </div>
    <div class="form-group"> 
        <label for="news_image">News Image</label>
        <input type="file" class="form-control" name="news_image">
    </div>
    <div class="form-group"> 
        <label for="news_tags">News Tags</label>
        <input type="text" class="form-control" name="news_tags">
    </div>
    <div class="form-group"> 
        <label for="summernote">News Content</label>
        <textarea class="form-control" name="news_content" id="summernote" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group"> 
        <input class="btn btn-dark" type="submit" name="create_news" value="Publish News">
    </div>
</form>