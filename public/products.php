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
    <?php include(TEMPLATE_FRONT . DS . "login.php")?>
    <?php include(TEMPLATE_FRONT . DS . "footer.php")?>