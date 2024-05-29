<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content glass">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Sign In</h1>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <?php display_message(); ?>
          <form method="post">
            <?php login_user(); ?>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="&#9993">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
        
            <div class="modal-footer">
              <input type="submit" name="submit" class="submit-button">
            </div>
          </form>
      </div>
    </div>
  </div>
</div>