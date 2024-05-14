<?php require_once("../resources/config.php")?>
<?php include(TEMPLATE_FRONT . DS . "header.php")?>
<main> 
    <?php display_message(); ?>
    <form method="post">
            <?php login_user(); ?>
        <input type="text" name="username"> <br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit">
    </form>
</main>
<script src="app/js/script.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>