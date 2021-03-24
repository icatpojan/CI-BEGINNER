<div class="row justify-content-center mt-5">
	<div class="card text-center shadow border-1" style="width: 20rem;">
		<div class="card-body">
			<h1 class="text-center" style="color:dimgrey"><?php echo $title; ?></h1>
			<div class="form-group">
				<?php echo form_open('user/register'); ?>
				<?php echo validation_errors(); ?>
				<input type="text" class="form-control" name="nama" placeholder="Nama">
			</div>
			<div class="form-group mt-2">
				<input type="email" class="form-control" name="email" placeholder="Email">
			</div>
			<div class="form-group mt-2">
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>
			<div class="form-group mt-2">
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			<div class="form-group mt-2">
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
			</div>
			<button type="submit" class="btn rounded-pill btn-outline-primary mt-2">Register</button>
			<br>
			<a href="login">sudah punya akun?</a>
			<div class="mt-2">
				<?php echo $this->session->flashdata('login_failed'); ?>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
