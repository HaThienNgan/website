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
                <th>Chức Danh</th>
                <th>Họ và Tên</th>
                <th>Phòng ban</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Hình Ảnh</th>
                <th>Mô tả</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = "SELECT * FROM department ORDER BY department_id DESC";
                $select_department = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_assoc($select_department)){
                    $department_id = $row['department_id'];
                    $department_job_title = $row['department_job_title'];
                    $department_name = $row['department_name'];
                    $department_struc_id = $row['department_struc_id'];
                    $department_phone = $row['department_phone'];
                    $department_email = $row['department_email'];
                    $department_image = $row['department_image'];
                    $department_descrip = $row['department_descrip'];
        
                    echo "<tr>";
            ?>
                    <td><input class='checkBoxes' type='checkbox' name='checkBoxArray[]' value='<?php echo $department_id; ?>'> </td>
            <?php
                    echo "<td> {$department_id} </td>";
                    echo "<td> {$department_job_title} </td>";
                    echo "<td> {$department_name} </td>";

        
                    $query = "SELECT * FROM structure WHERE structure_id = {$department_struc_id} ";
                    $select_structure_id = mysqli_query($connect, $query);
                    while ($row = mysqli_fetch_assoc($select_structure_id)){
                        $structure_id = $row['structure_id'];
                        $structure_title = $row['structure_title'];
                    
                    echo "<td> {$structure_title} </td>";
                        }

                    echo "<td> {$department_phone} </td>";
                    echo "<td> {$department_email} </td>";
                    echo "<td> <img width='100px' src='../images/{$department_image}' alt='image'> </td>";

                    echo "<td> {$department_descrip} </td>";
                    echo "<td> <a onClick=\' javascript: return confirm('Are you sure you want to delete? ') \' href='admin-phongban.php?delete={$department_id}'> Delete </a></td>";
                    echo "<td> <a href='admin_phongban.php?source=edit_department&department_id={$department_id}'> Edit </a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</form>
<?php 
    if(isset($_GET['delete'])){
        $the_department_id = $_GET['delete'];
        $query = "DELETE FROM department WHERE department_id='$the_department_id'";
        $delete_query = mysqli_query($connect, $query);
        header("Location: admin_phongban.php");
    }
?>