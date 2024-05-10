<?php require_once("../resources/config.php")?>
<?php include(TEMPLATE_FRONT . DS . "header.php")?>
<div class="container">
    <?php include(TEMPLATE_FRONT . DS . "side_nav.php")?>
    <main class="flex">
        <?php get_products() ?>
    </main>
</div>
<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>   

</html>