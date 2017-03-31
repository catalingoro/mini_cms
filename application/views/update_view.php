<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PANEL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/ci-cms/assets/css/style.css">
</head>
<body>

<div class="wrapper">
	<header id="site-header">
		<h1>ADMIN PANEL</h1>
	</header>
	<div class="content-container">
		<main id="site-main">
			<form method="post" action="admin/index.php">
				<h3>Update page</h3>
				<div>
					<p><label for="title">Page title</label></p>
					<div>
						<input type="text" name="title" id="title">
					</div>
				</div>
				<div>
					<p><label for="content">Content</label></p>
					<div>
						<textarea name="content" id="content"></textarea>
					</div>
				</div>
				<div>
					<input type="submit" value="Update">
				</div>
			</form>
		</main>
		<nav id="site-nav">
			<ul>
				<li><a href="index.php">See all pages</a></li>
				<li><a href="create.php">Create new page</a></li>
				<li><a href="../">Logout</a></li>
			</ul>
		</nav>
		<ol>
<?php foreach ($users as $user): ?>
<li><a href="<?php echo base_url() . "index.php/update_ctrl/show_user_id/" . $user->user_id; ?>"><?php echo $user->user_name; ?></a></li>
<?php endforeach; ?>
</ol>
<?php foreach ($single_user as $user): ?>
<form method="post" action="<?php echo base_url() . "index.php/update_ctrl/update_user_id1"?>">
					<label id="hide">Id :</label>
					<input type="text" id="hide" name="uid" value="<?php echo $user->user_id; ?>">
					<label>Name :</label>
					<input type="text" name="firstname" value="<?php echo $user->user_firstname; ?>">
					<label>Email :</label>
					<input type="text" name="lastname" value="<?php echo $user->user_lastname; ?>">
					<label>Email :</label>
					<input type="text" name="email" value="<?php echo $user->user_email; ?>">
					<label>Mobile :</label>
					<input type="text" name="password" value="<?php echo $user->user_password; ?>">
					<label>Address :</label>
					<input type="text" name="admin" value="<?php echo $user->user_admin; ?>">
					<input type="submit" id="submit" name="submit" value="Update">
</form>
<?php endforeach; ?>
	</div>
	<footer id="site-footer">
		&copy; 2017 Whatever name you want.
	</footer>
</div>


</body>
</html>