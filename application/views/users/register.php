

<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="name" placeholder="Name" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity(")">
			</div>
			<div class="form-group">
				<label>code dinas</label>
				<input type="text" class="form-control" name="zipcode" placeholder="code dinas" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity(")">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity(")">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity(")">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity(")">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" class="form-control" name="password2" placeholder="Confirm Password"required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity(")">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>
<?php echo form_close(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Administrator</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/bootstrap/css/style-admin.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets3/font-awesome/css/font-awesome.css" />
</head>

<body>

</body>
</html>