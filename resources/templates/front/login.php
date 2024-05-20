<dialog id="modal-dialog" class="dialog">
    <div class=" container dialog-container">
        <?php display_message(); ?>
        <form method="post">
                <?php login_user(); ?>
            <label for="email">Email</label>
            <input type="text" name="username"> <br>
            <label for="password">Password</label>
            <input type="password" name="password"><br>
            <input type="submit" name="submit">
        </form>
    </div>
</dialog>