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
            <a class="btn btn-primary" href="notification.php?source=add_notification">Add Notification</a>
        </div>

        <thead>
            <tr>
                <th><input id="selectAllBoxes" type="checkbox"></th> 
                <th>ID</th>
                <th>Tiêu Đề Thông Báo</th>
                <th>Date</th>
                <th>Hình ảnh</th>
                <th>Delete</th>
                <th>Xem Thông Báo</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = "SELECT * FROM notification ORDER BY noti_id DESC LIMIT 20";
                $select_noti = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_assoc($select_noti)){
                    $noti_id = $row['noti_id'];
                    $noti_title = $row['noti_title'];
                    $noti_content = $row['noti_content'];
                    $noti_date = $row['noti_date'];
                    $noti_image = $row['noti_image'];
        
                    echo "<tr>";
            ?>
                    <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $noti_id; ?>'> </td>
            <?php
                    echo "<td> {$noti_id} </td>";
                    echo "<td> {$noti_title} </td>";
                    echo "<td> {$noti_date} </td>";
                    echo "<td> <img width='100px' src='../images/{$noti_image}' alt='image'> </td>";

                    echo "<td> <a onClick=\' javascript: return confirm('Are you sure you want to delete? ') \' href='notification.php?delete={$noti_id}'> Delete </a></td>";
                    echo "<td> <a href='../post.php?noti_id={$noti_id}'> View Notification </a></td>";
                    echo "<td> <a href='notification.php?source=edit_notification&noti_id={$noti_id}'> Edit </a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</form>
<?php 
    if(isset($_GET['delete'])){
        $the_noti_id = $_GET['delete'];
        $query = "DELETE FROM notification WHERE noti_id='$the_noti_id'";
        $delete_query = mysqli_query($connect, $query);
        header("Location: notification.php");
    }
?>