<?php 
    $query = "SELECT * FROM categories";
    $send_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($send_query)) {
        echo "<a href='#' class='list-group-item'>{$row['cat_title']}</a>";
    }
?>
<div>The Vault</div>
<div id="the-vault">
    <div class = "display flex flex-ai-c">3</div>
    <div class = "grid-container keypad">
        <button class="btn btn-dark">1</button><button class="btn btn-dark">2</button><button class="btn btn-dark">3</button>
        <button class="btn btn-dark">4</button><button class="btn btn-dark">5</button><button class="btn btn-dark">6</button>
        <button class="btn btn-dark">7</button><button class="btn btn-dark">8</button><button class="btn btn-dark">9</button>
        <button class="btn btn-dark">&#10035</button><button class="btn btn-dark">0</button><button class="btn btn-dark">#</button>
    </div>
</div>