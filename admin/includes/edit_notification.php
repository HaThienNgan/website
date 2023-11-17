<?php 
    if(isset($_GET['noti_id'])){
        $the_noti_id = $_GET['noti_id'];
    }

    $query = "SELECT * FROM notification WHERE noti_id = $the_noti_id";
    $select_noti_by_id = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_assoc($select_noti_by_id)){
        $noti_id = $row['noti_id'];
        $noti_title = $row['noti_title'];
        $noti_content = $row['noti_content'];
        $noti_date = $row['noti_date'];
        $noti_image = $row['noti_image'];
    }

    if(isset($_POST['update_notification'])){
        $noti_title = $_POST['noti_title'];
        $noti_content = $_POST['noti_content'];
        $noti_date = date("d-m-y h:i:s");

        $noti_image = $_FILES['noti_image']['name'];
        $noti_image_temp = $_FILES['noti_image']['tmp_name'];

        move_uploaded_file($noti_image_temp, "../images/$noti_image");

        if (empty($noti_image)){
            $query = "SELECT * FROM notification WHERE noti_id = $the_noti_id";
            $select_image = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_assoc($select_image)){
                $noti_image = $row['noti_image'];
            }
        }

        $query = "UPDATE notification SET ";
        $query.=  "noti_image = '{$noti_image}', ";
        $query.=  "noti_content = '{$noti_content}', ";
        $query .= "noti_date = now(), ";
        $query.=  "noti_image = '{$noti_image}' ";       
        $query.=  "WHERE noti_id = {$the_noti_id} "; 

        $update_notification = mysqli_query($connect, $query);
        confirmQuery($update_notification);

        echo "<p class='bg-success'>News Updated successfully!! . <a href='../post.php?noti_id={$the_noti_id}'>View Noti </a> or <a href='notification.php'>Edit More Notification</a> </p>";
    }

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group"> 
        <label for="noti_title">News Title</label>
        <input value="<?php echo $noti_title; ?>" type="text" class="form-control" name="noti_title">
    </div>
    <div class="form-group"> 
        <img width="100" src="../images/<?php echo $noti_image; ?>" alt="picture">
        <label for="noti_image">News Image</label>
        <input type="file" class="form-control" name="noti_image">
    </div>
    <div class="form-group"> 
        <label for="noti_content">News Content</label>
        <textarea class="form-control" id="summernote" name="noti_content" cols="30" rows="10">
            <?php echo $noti_content; ?>
        </textarea>
    </div>
    <div class="form-group"> 
        <input class="btn btn-dark" type="submit" name="update_notification" value="Publish Notification">
    </div>
</form>

<?php include "includes/admin_footer.php"; ?>