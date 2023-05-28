<?php  
	// Khởi tạo mảng tài khoản
	$acount = array(
		'1'	=>	array(
			'email'	=> 'tatduy',
			'pass'	=> '123456',
		)

	);

	if (isset($_POST['login'])) {
		$user = trim($_POST['username']);
		$passw = trim($_POST['passw']);

		foreach ($acount as $key => $value) {
			if ($value['email'] == $user && $value['pass'] == $passw) {
				header("Location: https://www.facebook.com/");
			}else{
				
				$errors = "Tài khoản hoặc mật khẩu không đúng!";
			}
		}
	}

?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Form PHP</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<form action="" method="POST" role="form">
						<legend>Đăng nhập</legend>
					
						<div class="form-group">
							<label for="user">Tài khoản</label>
							<input required="" type="text" name="username" class="form-control" id="user" value="<?php if(isset($user)){ echo $user; } ?>" placeholder="Email...">
						</div>

						<div class="form-group">
							<label for="passw">Mật khẩu</label>
							<input required="" type="password" name="passw" class="form-control" id="passw" placeholder="Password...">
						</div>
					
						<button type="submit" name="login" class="btn btn-primary">Đăng nhập</button>
						<?php  
							if (isset($errors)) {
						?>
							<div class="alert alert-danger" style="margin-top: 30px;">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Thông báo:</strong> <?php echo $errors; ?>
							</div>
						<?php
							}
						?>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>