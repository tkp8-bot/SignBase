<?php require_once("../resources/config.php")?>
<?php include(TEMPLATE_FRONT . DS . "header.php")?>
<?php include(TEMPLATE_FRONT . DS . "navbar.php")?>
<div class="flex container-fw">
    <aside class="sidebar">
        <?php include(TEMPLATE_FRONT . DS . "sidebar.php")?>
    </aside>
    <main class="container">
        <div class="grid-container products">
            <?php get_products() ?>
        </div>
    </main>
    </div>
<script src="app/js/script.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>   

</html>