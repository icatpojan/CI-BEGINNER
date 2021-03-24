<div class="row justify-content-center mt-5">
	<div class="card text-center shadow border-1" style="width: 20rem;">
		<div class="card-body">
			<h1 class="text-center" style="color:dimgrey"><?php echo $title; ?></h1>
			<div class="form-group">
				<?php echo form_open('user/login'); ?>
				<input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="Enter Username" required autofocus>
			</div>
			<div class="form-group mt-2">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" class="btn rounded-pill btn-outline-primary mt-2">Login</button>
			<br>
			<a href="register">belom punya akun?</a>
			<div class="mt-2">
				<?php echo $this->session->flashdata('login_failed'); ?>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
