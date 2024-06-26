<?php
    include "includes/admin_header.php";
?>

<div id="wrapper">
    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welcome to Admin Dashboard
                        <small>Author</small>
                    </h1>
                    <?php
                        if(isset($_GET['source'])){
                            $source = $_GET['source'];
                        }else{
                            $source = '';
                        }

                        switch($source){
                            case 'add_notification';
                            include "includes/add_notification.php";
                            break;
                            case 'edit_notification';
                            include "includes/edit_notification.php";
                            break;

                            default:
                            include "includes/view_all_notification.php";
                            break;
                        }

                    ?>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->

<?php include "includes/admin_footer.php"; ?>