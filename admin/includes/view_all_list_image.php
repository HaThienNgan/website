<div class="col-xs-6">
    <?php
        insertListImage();
    ?>

    <form action="" method="post">
        <div class="form-group">
            <label for="image_title">Thêm Danh Mục Hình Ảnh</label>
            <input class="form-control" type="text" name="image_title">
        </div>
        <div class="form-group">
            <input class="btn btn-dark" type="submit" name="submit" value="Thêm Danh Mục">
        </div>
    </form>

    <?php  
        if (isset($_GET['edit'])){
            $image_id = $_GET['edit'];
            include "includes/edit_image.php";
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
            <?php //Find list Image query
                findAllListImage();          
            ?>

            <?php //Delete Query
                deleteListImage();
            ?>
        </tbody>
    </table>
</div>
<?php include "includes/admin_footer.php"; ?>