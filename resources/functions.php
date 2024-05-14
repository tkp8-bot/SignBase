<?php

// helper functions
function redirect($location) {
    header("Location: $location");
}

function set_message($msg){
    if(!empty($msg)){
        $_SESSION['message'] = $msg;
    }
    else{
        $msg="";
    }
}

function display_message(){
    if(isset($_SESSION["message"])){
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
    }
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

function login_user(){
    if(isset($_POST['submit'])){
        $username = escape_string($_POST['username']);
        $password = escape_string($_POST['password']);

        $query = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}'");
        confirm($query);

        if(mysqli_num_rows($query) == 0){
            set_message("Your Password or Username is wrong.");
            redirect("login.php");
        }
        else{
            redirect("admin");
        }
    }
}