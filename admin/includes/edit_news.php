<?php 
    if(isset($_GET['new_id'])){
        $the_new_id = $_GET['new_id'];
    }

    $query = "SELECT * FROM news WHERE news_id = $the_new_id";
    $select_news_by_id = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_assoc($select_news_by_id)){
        $news_id = $row['news_id'];
        $news_title = $row['news_title'];
        $news_author = $row['news_author'];
        $news_category_id = $row['news_category_id'];
        $news_status = $row['news_status'];
        $news_image = $row['news_image'];
        $news_content = $row['news_content'];
        $news_tags = $row['news_tags'];
        // $news_comment_count = $row['news_comment_count'];
        $news_date = $row['news_date'];
    }

    if(isset($_POST['update_news'])){
        $news_title = $_POST['news_title'];
        $news_author = $_POST['news_author'];
        $news_category_id = $_POST['news_category_id'];
        $news_status = $_POST['news_status'];

        $news_image = $_FILES['news_image']['name'];
        $news_image_temp = $_FILES['news_image']['tmp_name'];

        $news_content = $_POST['news_content'];
        $news_tags = $_POST['news_tags'];

        $news_date = date("d-m-y h:i:s");

        move_uploaded_file($news_image_temp, "../images/$news_image");
        if (empty($news_image)){
            $query = "SELECT * FROM news WHERE news_id = $the_new_id";
            $select_image = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_assoc($select_image)){
                $news_image = $row['news_image'];
            }
        }

        $query = "UPDATE news SET ";
        $query.=  "news_title = '{$news_title}', ";
        $query.=  "news_category_id = '{$news_category_id}', ";
        $query.=  "news_author = '{$news_author}', ";
        $query .= "news_date = now(), ";
        $query.=  "news_status = '{$news_status}', ";
        $query.=  "news_tags = '{$news_tags}', ";
        $query.=  "news_content = '{$news_content}', ";
        $query.=  "news_image = '{$news_image}' ";       
        $query.=  "WHERE news_id = {$the_new_id} "; 

        $update_news = mysqli_query($connect, $query);
        confirmQuery($update_news);

        echo "<p class='bg-success'>News Updated successfully!! . <a href='../post.php?new_id={$the_new_id}'>View News </a> or <a href='news.php'>Edit More News</a> </p>";
    }

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group"> 
        <label for="news_title">News Title</label>
        <input value="<?php echo $news_title; ?>" type="text" class="form-control" name="news_title">
    </div>
    <div class="form-group"> 
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
        <input value="<?php echo $news_author; ?>" type="text" class="form-control" name="news_author">
    </div>
    <div class="form-group">
        <label for="news_status">News Status: </label>
        <select name="news_status" id="">
            <option value='<?php echo $news_status; ?>'><?php echo $news_status; ?></option>
            <?php 
                if($news_status === 'published'){
                    echo "<option value='draft'>draft</option>";
                } else {
                    echo "<option value='published'>published</option>";
                }
            ?>
        </select>
    </div>
    <div class="form-group"> 
        <img width="100" src="../images/<?php echo $news_image; ?>" alt="picture">
        <label for="news_image">News Image</label>
        <input type="file" class="form-control" name="news_image">
    </div>
    <div class="form-group"> 
        <label for="news_tags">News Tags</label>
        <input value="<?php echo $news_tags; ?>" type="text" class="form-control" name="news_tags">
    </div>
    <div class="form-group"> 
        <label for="news_content">News Content</label>
        <textarea class="form-control" id="summernote" name="news_content" cols="30" rows="10">
            <?php echo $news_content; ?>
        </textarea>
    </div>
    <div class="form-group"> 
        <input class="btn btn-dark" type="submit" name="update_news" value="Publish News">
    </div>
</form>