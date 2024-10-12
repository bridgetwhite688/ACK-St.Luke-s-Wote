<!-- add user form -->
<div class="modal fade fixed-right" id="loginUserr" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header align-items-center">
				<div class="text-center">
					<h6 class="mb-0 text-bold">Sign in to you account</h6>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">			
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" required name="user_email" placeholder="Email">
                        <div class="input-group-append">
                            <!-- <div class="input-group-text text-primary">
                                <span class="fa fa-envelope"></span>
                            </div> -->
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" required name="user_password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 5 or more characters">
                        <div class="input-group-append">
                            <!-- <div class="input-group-text text-primary">
                                <span class="fa fa-lock"></span>
                            </div> -->
                        </div>
                    </div>
                    <div class="row text-right">
                        <div class="col-12">
                            <button type="submit" name="Login" class="btn btn-primary btn-">
                                Sign in
                            </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <hr>
                <p class="mb-1 text-center">
					Forgot password <a href="reset_password">reset</a>
                </p>
			</div>
		</div>
    </div>
</div>