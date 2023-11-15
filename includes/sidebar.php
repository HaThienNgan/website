<div style="padding: 15px" class="col-4">
    <div style="margin-bottom: 50px;"> 
        <p style="color: #9F0311;"><b>Tin Nổi Bật</b></p>
        <ul style="list-style-type: none;">
        <?php
            $query = "SELECT * FROM news ORDER BY news_views_count DESC LIMIT 4 ";
            $select_all_news_query = mysqli_query($connect, $query);

            while ($row = mysqli_fetch_assoc($select_all_news_query)){
                $news_id = $row['news_id'];
                $news_title = $row['news_title'];
                $news_author = $row['news_author'];
                $news_date = $row['news_date'];
                $news_image = $row['news_image'];
                $news_content = $row['news_content'];
                $news_tags = $row['news_tags'];
        
        ?>
            <li><a href="post.php?new_id=<?php echo $news_id; ?>"><?php echo $news_title; ?></a></li>
            <hr>

        <?php 
            }
        ?>
        </ul>
    </div>
    <div style="border: 1px solid #9F0311; background-color: #FFE6E6; border-radius: 8px; padding: 10px; margin-bottom: 40px;"> 
        <p style="color: #9F0311; margin-left: 5px"><b>Thông Báo Mới Nhất</b></p>
        <ul style="list-style-type: none;">
            <?php 
                $query = "SELECT * FROM notification ORDER BY noti_date DESC LIMIT 3";
                $select_all_noti_query = mysqli_query($connect, $query);
                
                while ($row = mysqli_fetch_assoc($select_all_noti_query)){
                    $noti_id = $row['noti_id'];
                    $noti_title = $row['noti_title'];
                    $noti_date = $row['noti_date'];
                    $noti_image = $row['noti_image'];
                    $noti_content = $row['noti_content'];
            ?>
            <li><a href="post.php?noti_id=<?php echo $noti_id; ?>"><?php echo $noti_title; ?></a></li>
            <hr>

            <?php
                } 
            ?>

            <li><a href="">Thiết bị phát hiện vật thể lạ (FOD)</a></li>
            <hr>
            <li><a href="">Hệ thống Thám Không Thông tin Liên Lạc</a></li>    
                        
        </ul>
    </div>
    <div style=" padding-top: 15px; margin-bottom: 50px;">
        <p style="color: #9F0311;"><b>Hoạt động Đoàn thể</b></p>
        <div style="" >
            <ul style="list-style-type: none;">
                <li><a href="">Mắt Thông Minh Smart-Eyes</a></li>
                <hr>
                <li><a href="">Thiết bị phát hiện vật thể lạ (FOD)</a></li>
                <hr>
                <li><a href="">Hệ thống Thám Không Thông tin Liên Lạc</a></li>    
                <hr>
                <li><a href="">Hệ thống Thám Không Thông tin Liên Lạc</a></li>               
            </ul>
        </div>
    </div>
    <div style="border: 1px solid #9F0311; background-color: #FFE6E6; border-radius: 8px; padding: 10px; margin-bottom: 40px;"> 
        <p style="color: #9F0311; margin-left: 5px"><b>Các Tin Khác</b></p>
        <ul style="list-style-type: none;">
            <li><a href="">Mắt Thông Minh Smart-Eyes</a></li>
            <hr>
            <li><a href="">Thiết bị phát hiện vật thể lạ (FOD)</a></li>
            <hr>
            <li><a href="">Hệ thống Thám Không Thông tin Liên Lạc</a></li>    
            <hr>
            <li><a href="">Hệ thống Thám Không Thông tin Liên Lạc</a></li>               
        </ul>
    </div>
</div>