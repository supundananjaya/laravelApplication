<!-- main end -->
</div>

<!-- wrap end -->
</div>



<!-- login popup -->
<div class="modal fade signin" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body login-popup">
		<div class="left">
			<img src="img/logo-high.png" width="400" height="auto">
		</div>

		<div class="right">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<h1>Sign in</h1>
			<p>Welcome to tribe!</p>

			<form>
			<fieldset>
				<div class="form-group">
				<label for="disabledTextInput">Email address or Username</label>
				<input type="text" id="disabledTextInput" class="form-control" placeholder="john.doe@gmail.com">
				</div>
				<div class="form-group">
				<label for="disabledTextInput">Password</label>
				<input type="text" id="disabledTextInput" class="form-control" placeholder="">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Sign In</button>
				<div class="form-check">
				<a data-toggle="modal" data-target="#forgot" class="link1">Reset password</a>
				</div>
				<div class="form-check">
				<a href="#" class="link2">Create new account</a>
				</div>
				<div class="login-or">
					<hr class="hr-or">
					<span class="span-or">or</span>
				</div>
				<button type="submit" class="btn btn-outline btn-block"><i class="fa fa-google" aria-hidden="true"></i> Sign In with Google</button>
				<button type="submit" class="btn btn-outline btn-block"><i class="fa fa-facebook-official" aria-hidden="true"></i> Sign In with Facebook</button>
			</fieldset>
			</form>
		</div>


      </div>
    
    </div>
  </div>
</div>


<!-- signup popup -->
<div class="modal fade signin" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body signup-popup">
		<div class="left">
			<img src="img/logo-high.png" width="400" height="auto">
		</div>

		<div class="right">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<h1>Create an Account</h1>
			<p>Welcome to tribe!</p>

			<form>
			<fieldset>
				
				<div class="row">
					<div class="form-group col-md-6">
					<label for="disabledTextInput">First Name</label>
					<input type="text" id="disabledTextInput" class="form-control" placeholder="">
					</div>
					<div class="form-group col-md-6">
					<label for="disabledTextInput">Last Name</label>
					<input type="text" id="disabledTextInput" class="form-control" placeholder="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
					<label for="disabledTextInput">Date of Birth</label>
					<input type="text" id="disabledTextInput" class="form-control" placeholder="DD/MM/YYYY">
					</div>
					<div class="form-group col-md-8">
					<label for="disabledTextInput">Mobile number</label> <small>(Optional)</small>
					<input type="text" id="disabledTextInput" class="form-control" placeholder="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					<label for="disabledTextInput">Email</label>
					<input type="text" id="disabledTextInput" class="form-control" placeholder="john.doe@gmail.com">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					<label for="disabledTextInput">Password</label>
					<input type="text" id="disabledTextInput" class="form-control" placeholder="">
					</div>
					<div class="form-group col-md-6">
					<label for="disabledTextInput">Retype Password <span class="red">*</span></label>
					<input type="text" id="disabledTextInput" class="form-control" placeholder="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					<button type="submit" class="btn btn-secondry btn-block">CREATE ACCOUNT</button>
					</div>
					<div class="form-group col-md-6">
					<button type="submit" class="btn btn-gray btn-block">CANCEL</button>
					</div>
				</div>
				<div class="login-or">
					<hr class="hr-or">
					<span class="span-or">or</span>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					<button type="submit" class="btn btn-outline btn-block"><i class="fa fa-google" aria-hidden="true"></i> Sign In with Google</button>
					</div>
					<div class="form-group col-md-6">
					<button type="submit" class="btn btn-outline btn-block"><i class="fa fa-facebook-official" aria-hidden="true"></i> Sign In with Facebook</button>
					</div>
					<div class="text-center">
					<small >By continuing you agree to our <a href="#">terms of use</a> and <a href="#">privacy policy</a></small>
					</div>
				</div>
			</fieldset>
			</form>
		</div>
      </div>
    
    </div>
  </div>
</div>

<!-- forgot password popup -->
<div class="modal fade signin" id="forgot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body forgot-popup">
		<div class="left">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<h1>Change Password</h1>
			<form>
			<fieldset>
				<div class="form-group">
				<label for="disabledTextInput">Current Password</label>
				<input type="text" id="disabledTextInput" class="form-control" placeholder="john.doe@gmail.com">
				</div>
				<div class="form-group">
				<label for="disabledTextInput">New Password</label>
				<input type="text" id="disabledTextInput" class="form-control" placeholder="">
				</div>
				<div class="form-group">
				<label for="disabledTextInput">Confirm Password</label>
				<input type="text" id="disabledTextInput" class="form-control" placeholder="">
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					<button type="submit" class="btn btn-secondry btn-block">Change Password</button>
					</div>
					<div class="form-group col-md-12">
					<button type="submit" class="btn btn-gray btn-block">Cancel</button>
					</div>
				</div>
			</fieldset>
			</form>
		</div>

		<div class="right">
			<img src="img/forgot-password-img.png" width="100%" height="auto">
			
		</div>


      </div>
    
    </div>
  </div>
</div>

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-12">
							<div class="footer">
									<a href="#" class="logo">
											<img src="./img/logo-white.png" width="120" alt="logo">
										</a>
										<span class="copyright">
												<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
												Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tribe. All rights reserved.
											<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
											</span>
							</div>
						</div>
						<div class="clearfix visible-xs"></div>

						<div class="col-md-2 col-xs-12">
							<div class="footer">
								<h3 class="footer-title">Company</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Loyalty Program</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-2 col-xs-12">
							<div class="footer">
								<h3 class="footer-title">How to Buy</h3>
								<ul class="footer-links">
									<li><a href="#">Making Payments</a></li>
									<li><a href="#">Delivering Outputs</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Customer Service</h3>
								<ul class="footer-links">
									<li><a href="#">Customer Service</a></li>
									<li><a href="#">Transaction Service Agreement</a></li>
									<li><a href="#">Take our servey</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-2 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Follow us on</h3>
								<div class="fa-icons">
									<i class="fa fa-facebook-official" aria-hidden="true"></i> 
									<i class="fa fa-instagram" aria-hidden="true"></i>
									<i class="fa fa-linkedin-square" aria-hidden="true"></i> 
									<i class="fa fa-youtube-play" aria-hidden="true"></i>
								</div>
							</div>
						</div>

					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>