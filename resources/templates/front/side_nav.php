<aside class="side-nav">
    Categories 
    <?php 
        $query = "SELECT * FROM categories";
        $send_query = mysqli_query($connection, $query);

        while($row = mysqli_fetch_array($send_query)) {
           echo "<a href='#' class='list-group-item'>{$row['cat_title']}</a>";
        }
    ?>
</aside>