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
            <a class="btn btn-primary" href="activities.php?source=add_activities">Add New</a>
        </div>

        <thead>
            <tr>
                <th><input id="selectAllBoxes" type="checkbox"></th> 
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Status</th>
                <th>Image</th>
                <th>Tags</th>
                <th>Date</th>
                <th>Activity Views</th>
                <th>Delete</th>
                <th>View Activity</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = "SELECT * FROM activities ORDER BY activity_id DESC LIMIT 20";
                $select_activities = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_assoc($select_activities)){
                    $activity_id = $row['activity_id'];
                    $activity_title = $row['activity_title'];
                    $activity_author = $row['activity_author'];
                    $activity_date = $row['activity_date'];
                    $activity_image = $row['activity_image'];
                    $activity_content = $row['activity_content'];
                    $activity_tags = $row['activity_tags'];
                    $activity_status = $row['activity_status'];
                    $activity_views = $row['activity_views'];
        
                    echo "<tr>";
            ?>
                    <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $activity_id; ?>'> </td>
            <?php
                    echo "<td> {$activity_id} </td>";
                    echo "<td> {$activity_title} </td>";
                    echo "<td> {$activity_author} </td>";
                    echo "<td> {$activity_status} </td>";
                    echo "<td> <img width='100px' src='../images/{$activity_image}' alt='image'> </td>";
                    echo "<td> {$activity_tags} </td>";
                    echo "<td> {$activity_date} </td>";
                    echo "<td><a href='activities.php?reset={$activity_id}'> {$activity_views} </a></td>";
                    echo "<td> <a onClick=\' javascript: return confirm('Are you sure you want to delete? ') \' href='activities.php?delete={$activity_id}'> Delete </a></td>";
                    echo "<td> <a href='../post.php?activity_id={$activity_id}'> View News </a></td>";
                    echo "<td> <a href='activities.php?source=edit_activities&activity_id={$activity_id}'> Edit </a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</form>
<?php 
    if(isset($_GET['delete'])){
        $the_activity_id = $_GET['delete'];
        $query = "DELETE FROM activities WHERE activity_id = '$the_activity_id'";
        $delete_query = mysqli_query($connect, $query);
        header("Location: activities.php");
    }

    if(isset($_GET['reset'])){
        $the_activity_id = $_GET['reset'];
        $query = "UPDATE activities SET activity_views = 0 WHERE activity_id = " . mysqli_real_escape_string($connect, $_GET['reset']) . " ";
        $reset_query = mysqli_query($connect, $query);
        header("Location: activities.php");
    }
?>