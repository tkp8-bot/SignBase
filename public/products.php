<?php require_once("../resources/config.php")?>
<?php include(TEMPLATE_FRONT . DS . "header.php")?>
<div class="container">
    <?php include(TEMPLATE_FRONT . DS . "side_nav.php")?>
    <main>
        <div class="card">
            <img class="card-img-top" src="assets/products/stop_sign.png" alt="Card image cap">
            <div class="card-body">
                <strong class="card-text">Stop Sign</strong>
                <?php get_products(); ?>
            </div>
        </div>
    </main>
</div>
<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>   

</html>