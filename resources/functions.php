<?php

// helper functions
function redirect($location) {
    header("Location: $location");
}

function query($sql) {
    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result) {
    global $connection;
    if(!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function escape_string($string) {
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}

// get products
function get_products() {
    $query = query(" SELECT * FROM products");
    confirm($query);

    while($row = fetch_array($query)) {
        $uncolored = $row['product_image'];
        $colored = $row['product_image_colored'];
        $product = <<<DELIMETER
        <div class="card">
            <img class="card-img-top" src={$uncolored} onmouseover='hover(this, {$colored});' onmouseout='unhover(this, {$uncolored});' alt="product image">
            <div class="card-body">
                <strong class="card-text">{$row['product_title']}</strong>
                &#36;{$row['product_price']}
                <p>{$row['product_description']}</p>
            </div>
        </div>
        DELIMETER;

        echo $product;
    }

}