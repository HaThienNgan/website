
<div class="col-xs-6">
    <?php
        insertCategories();
    ?>

    <form action="" method="post">
        <div class="form-group">
            <label for="structure_title">Thêm Phòng Ban</label>
            <input class="form-control" type="text" name="structure_title">
        </div>
        <div class="form-group">
            <input class="btn btn-dark" type="submit" name="submit" value="Add Phòng Ban">
        </div>
    </form>

    <?php  
        if (isset($_GET['edit'])){
            $cat_id = $_GET['edit'];
            include "includes/update_categories.php";
        }
    ?>
</div>

<div class="col-xs-6">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Title</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php //Find category query
                findAllCategories();          
            ?>

            <?php //Delete Query
                deleteCategories();
            ?>
        </tbody>
    </table>
</div>
<?php include "includes/admin_footer.php"; ?>