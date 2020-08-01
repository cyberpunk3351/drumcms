<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<link rel="stylesheet" href="<?=BASE_URL?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=BASE_URL?>assets/css/main.css">
</head>
<body>
	<header class="site-header">
		<div class="container">
			<div class="logo">
				<div class="logo__title h3">Awesome CMS</div>
				<div class="logo__subtitle h6">In PHP We Trust</div>
			</div>
		</div>
	</header>
	<nav class="site-nav">
		<div class="container">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="<?=BASE_URL?>">Home</a>
				</li>
				
					<li class="nav-item">
					<?if($user !== null):?>
						<a class="nav-link" href="<?=BASE_URL?>add">Add</a>
					<? else: ?>
						<a class="nav-link" href="<?=BASE_URL?>add">Add2</a>
					<? endif; ?>
					</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=BASE_URL?>contacts">Contacts</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="site-content">
		<div class="container">
			<?=$content?>
		</div>
	</div>

	<footer class="site-footer">
		<div class="container">
			&copy; site about all
			<?if($user == null):?>
				<p>bla bla</p>
			<? else: ?>
				<p>bla21212121 bla</p>
			<? endif; ?>
		</div>
	</footer>
</body>
</html>