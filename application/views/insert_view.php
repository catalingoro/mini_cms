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
					<input type="submit" value="Create">
				</div>
			</form>
		</main>
		<nav id="site-nav">
			<ul>
				<li><a href="index.php">See all pages</a></li>
				<li><a href="insert.php">Page new page</a></li>
				<li><a href="../">Logout</a></li>
			</ul>
		</nav>
<?php echo form_open('insert_ctrl'); ?>
		<?php if (isset($message)) { ?>
		<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
		<?php } ?>
			<?php echo form_label('User Firstname:'); ?> <?php echo form_error('firstname'); ?><br />
			<?php echo form_input(array('id' => 'firstname', 'name' => 'firstname')); ?><br />

			<?php echo form_label('User Lastname:'); ?> <?php echo form_error('lastname'); ?><br />
			<?php echo form_input(array('id' => 'lastname', 'name' => 'lastname')); ?><br />

			<?php echo form_label('User Email :'); ?> <?php echo form_error('email'); ?><br />
			<?php echo form_input(array('id' => 'email', 'name' => 'email')); ?><br />

			<?php echo form_label('User_password:'); ?> <?php echo form_error('password'); ?><br />
			<?php echo form_input(array('id' => 'password', 'name' => 'password', 'placeholder' => '10 Digit Maximum')); ?><br />

			<?php echo form_label('User Admin :'); ?> <?php echo form_error('admin'); ?><br />
			<?php echo form_input(array('id' => 'admin', 'name' => 'admin')); ?><br />

			<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
			<?php echo form_close(); ?><br/>
	</div>
	<footer id="site-footer">
		&copy; 2017 Whatever name you want.
	</footer>
</div>


</body>
</html>