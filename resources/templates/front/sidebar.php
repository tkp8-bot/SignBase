<?php 
    $query = "SELECT * FROM categories";
    $send_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($send_query)) {
        echo "<a href='#' class='list-group-item'>{$row['cat_title']}</a>";
    }
?>
<br>The Vault
<div class = "grid-container the-vault">
    <div>1</div>
    <div>2</div>
    <div>3</div>
    <div>4</div>
    <div>5</div>
    <div>6</div>
    <div>7</div>
    <div>8</div>
    <div>9</div>
    <div>*</div>
    <div>0</div>
    <div>#</div>
</div>