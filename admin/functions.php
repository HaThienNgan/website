<?php

    // function users_online() {
    //     if(isset($_GET['onlineusers'])) {
    //         global $connect;
    //         session_start();
    //         if(!$connect) {
    //             include("../includes/db.php");
    //         }
    //             $session = session_id();
    //             $time = time();
    //             $time_out_in_seconds = 65;
    //             $time_out = $time - $time_out_in_seconds;
    //             $query = "SELECT * FROM users_online WHERE session = '$session'";
    //             $send_query = mysqli_query($connect, $query);
    //             $count = mysqli_num_rows($send_query);
    //             if($count == NULL) {
    //                 mysqli_query($connect, "INSERT INTO users_online(session, time) VALUES('$session','$time')");
    //             } 
    //             else {
    //                 mysqli_query($connect, "UPDATE users_online SET time = '$time' WHERE session = '$session'");
    //             }
    //             $users_online_query =  mysqli_query($connect, "SELECT * FROM users_online WHERE time > '$time_out'");
    //             echo $count_user = mysqli_num_rows($users_online_query);
    //     } // get request isset()
    // }
    // users_online();
    function redirect($location){
        return header(header:"Location:" . $location);
    }

    function confirmQuery($result){
        global $connect;
        if(!$result){
            die('Error: '. mysqli_error($connect));
        }
    }   

    function insertCategories(){
        global $connect;
        if (isset($_POST['submit'])){
            $cat_title = $_POST['cat_title'];

             if($cat_title == "" || empty($cat_title)){
                echo '<div class="alert alert-danger" role="alert">Please enter a title</div>';
             }else{
                 $query = "INSERT INTO categories(cat_title)";
                 $query .= " VALUES('{$cat_title}') ";

                 $create_category_query = mysqli_query($connect, $query);

                 if(!$create_category_query){
                     echo '<div class="alert alert-danger" role="alert">There was an error creating the category</div>';
                 }

             }
        }
    }

    function findAllCategories(){
        global $connect;
        $query = "SELECT * FROM categories ";
        $select_categories = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_assoc($select_categories)){
            $cat_id = $row['cat_id'];
            $cat_title = $row['cat_title'];

            echo "<tr>";
            echo "<td> {$cat_id} </td>";
            echo "<td> {$cat_title} </td>";
            echo "<td> <a href='categories.php?delete={$cat_id}'> Delete </a></td>";
            echo "<td> <a href='categories.php?edit={$cat_id}'> Edit </a></td>";
            echo "</tr>";
        }
    }

    function delateCategories(){
        global $connect;
        if(isset($_GET['delete'])){
            $the_cat_id = $_GET['delete'];
            $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
            $delete_query = mysqli_query($connect, $query);
            header("Location: categories.php");
        }
    }

?>