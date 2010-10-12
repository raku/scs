<div id="content" class="box">
	<div class="left">
		<?=form::open('sessions/create')?>
			<fieldset class="left">
				<legend>Login</legend>
			
				<div class="form-fields">
					<?=form::label('email', 'Email')?>
					<?=form::input('email')?>
				</div>
			
				<div class="form-fields">
					<?=form::label('password', 'Password')?>
					<?=form::password('password')?>
				</div>
			
			</fieldset>
			<?=form::submit('login', 'Login')?>
		<?=form::close()?>
	</div>
	
	<div class="left">
		<?=form::open('users/create')?>
			<fieldset>
				<legend>Create an Account</legend>
			
				<div class="form-fields">
					<?=form::label('email', 'Email')?>
					<?=form::input('email')?>
				</div>
			
				<div class="form-fields">
					<?=form::label('password', 'Password')?>
					<?=form::password('password')?>
				</div>
			
				<div class="form-fields">
					<?=form::label('password_confirm', 'Confirm Password')?>
					<?=form::password('password_confirm')?>
				</div>
			
			</fieldset>
			<?=form::submit('register', 'Register')?>
		<?=form::close()?>
	</div>
	<div class="clear"></div>
</div>