<?php echo form_open('users/login'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?php echo $title; ?></h1>
			<div class="form-group">
				<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
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