<?php 
    // if(isset($_POST['checkBoxArray'])){
    //     foreach($_POST['checkBoxArray'] as $postValueId ){
    //         $bulk_options = $_POST['bulk_options'];
    //     }
    //     switch($bulk_options){
    //         case 'published':
    //             $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id  = '{$postValueId}' ";
    //             $update_to_published_query = mysqli_query($connect, $query);
    //             confirmQuery($update_to_published_query);
    //         break;
    //         case 'draft':
    //             $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id  = '{$postValueId}' ";
    //             $update_to_draft_query = mysqli_query($connect, $query);
    //             confirmQuery($update_to_draft_query);
    //         break;
    //         case 'delete':
    //             $query = "DELETE FROM posts WHERE post_id  = '{$postValueId}' ";
    //             $update_to_delete_query = mysqli_query($connect, $query);
    //             confirmQuery($update_to_delete_query);
    //         break;
    //         case 'clone':
    //             $query = "SELECT * FROM posts WHERE post_id  = '{$postValueId}' ";
    //             $select_post_query = mysqli_query($connect, $query);
    //             confirmQuery($select_post_query);

    //             while ($row = mysqli_fetch_array($select_post_query)){
    //                 $post_title = $row['post_title'];
    //                 $post_category_id = $row['post_category_id'];
    //                 $post_date = $row['post_date'];
    //                 $post_author = $row['post_author'];
    //                 $post_status = $row['post_status'];
    //                 $post_image = $row['post_image'];
    //                 $post_tags = $row['post_tags'];
    //                 $post_content = $row['post_content'];
    //             }

    //             $query = "INSERT INTO posts (post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags,  post_status ) ";
    //             $query .= " VALUES ('$post_category_id','$post_title', '$post_author',now(),'$post_image','$post_content','$post_tags','$post_status' )";
    //             $copy_query = mysqli_query($connect, $query);
    //             if(!$copy_query){
    //                 die ("Error: " .mysqli_error($connect));
    //             }
    //         break;
    //     }
    // }
?>

<form action="" method="post">
    <table class="table table-bordered table-hover">
        <div id="bulkOptionsContainer" style="padding-left: 0; padding-right: 0px;" class="col-xs-4">
            <select class="form-control" name="bulk_options" id="">
                <option value="">Select Option</option>
                <option value="published">Publish</option>
                <option value="draft">Draft</option>
                <option value="delete">Delete</option>
                <option value="clone">Clone</option>
            </select>
        </div>
        <div class="col-xs-4">
            <input type="submit" class="btn btn-success" name="submit" id="" placeholder="" value="Apply">
            <a class="btn btn-primary" href="news.php?source=add_news">Add New</a>
        </div>

        <thead>
            <tr>
                <th><input id="selectAllBoxes" type="checkbox"></th> 
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <!-- <th>Category</th> -->
                <th>Status</th>
                <th>Image</th>
                <th>Tags</th>
                <!-- <th>Comments</th> -->
                <th>Date</th>
                <th>News Views</th>
                <th>Delete</th>
                <th>View News</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = "SELECT * FROM news ORDER BY news_id DESC LIMIT 10";
                $select_news = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_assoc($select_news)){
                    $news_id = $row['news_id'];
                    $news_title = $row['news_title'];
                    $news_author = $row['news_author'];
                    $news_content = $row['news_content'];
                    $news_category_id = $row['news_category_id'];
                    $news_status = $row['news_status'];
                    $news_image = $row['news_image'];
                    $news_tags = $row['news_tags'];
                    $news_date = $row['news_date'];
                    $news_views_count = $row['news_views_count'];
        
                    echo "<tr>";
            ?>
                    <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $news_id; ?>'> </td>
            <?php
                    echo "<td> {$news_id} </td>";
                    echo "<td> {$news_title} </td>";
                    echo "<td> {$news_author} </td>";


        
                    // $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
                    // $select_categories_id = mysqli_query($connect, $query);
                    // while ($row = mysqli_fetch_assoc($select_categories_id)){
                    //     $cat_id = $row['cat_id'];
                    //     $cat_title = $row['cat_title'];
                    
                    // echo "<td> {$cat_title} </td>";
                    //     }

                    echo "<td> {$news_status} </td>";
                    echo "<td> <img width='100px' src='../images/{$news_image}' alt='image'> </td>";
                    echo "<td> {$news_tags} </td>";
                    
                    // $query = "SELECT * FROM comments WHERE comment_post_id = $post_id ";
                    // $send_comment_query = mysqli_query($connect, $query);
                    
                    // // create link for post comments 
                    // $row = mysqli_fetch_array($send_comment_query);
                    // $comment_id = isset($row['comment_id']);
                    // $count_comment = mysqli_num_rows($send_comment_query);
                    // echo "<td><a href='comment.php?id=$post_id'> {$count_comment} </a></td>";

                    echo "<td> {$news_date} </td>";
                    echo "<td><a href='news.php?reset={$news_id}'> {$news_views_count} </a></td>";
                    echo "<td> <a onClick=\' javascript: return confirm('Are you sure you want to delete? ') \' href='news.php?delete={$news_id}'> Delete </a></td>";
                    echo "<td> <a href='../post.php?new_id={$news_id}'> View News </a></td>";
                    echo "<td> <a href='news.php?source=edit_news&new_id={$news_id}'> Edit </a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</form>
<?php 
    if(isset($_GET['delete'])){
        $the_new_id = $_GET['delete'];
        $query = "DELETE FROM news WHERE news_id='$the_new_id'";
        $delete_query = mysqli_query($connect, $query);
        header("Location: news.php");
    }

    if(isset($_GET['reset'])){
        $the_new_id = $_GET['reset'];
        $query = "UPDATE news SET news_views_count = 0 WHERE news_id = " . mysqli_real_escape_string($connect, $_GET['reset']) . " ";
        $reset_query = mysqli_query($connect, $query);
        header("Location: news.php");
    }
?>