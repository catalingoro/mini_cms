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
				<h3>Create new page</h3>
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
					<input type="submit" value="Delete">
				</div>
			</form>
		</main>
		<nav id="site-nav">
			<ul>
				<li><a href="index.php">See all pages</a></li>
				<li><a href="delete.php">Delete page</a></li>
				<li><a href="../">Logout</a></li>
			</ul>
		</nav>
		<ol>
	<?php foreach ($users as $user): ?>
		<li><a href="<?php echo base_url() . "index.php/delete_ctrl/show_user_id/" . $user->user_id; ?>"><?php echo $user->user_firstname; ?></a>
		</li><?php endforeach; ?>
		</ol>
	<?php foreach ($single_user as $user): ?>
						<?php echo $user->user_firstname; ?>
						<?php echo $user->user_lastname; ?>
						<?php echo $user->user_email; ?>
						<?php echo $user->user_password; ?>
						<?php echo $user->student_admin; ?>
	<a href="<?php echo base_url() . "index.php/delete_ctrl/delete_user_id/" . $user->user_id; ?>">
<button>Delete</button></a>
<?php endforeach; ?>
	</div>
	<footer id="site-footer">
		&copy; 2017 Whatever name you want.
	</footer>
</div>


</body>
</html>