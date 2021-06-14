<!DOCTYPE html>
<html>

<head>
	<?php echo $this->Html->charset(); ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<title>
		Shopping Cart
	</title>
	<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('bootstrap.min');
	echo $this->Html->css('style');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	echo $this->Html->script('jquery-3.6.0.min');
	?>

</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="/products">Home</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					</ul>
					<form class="d-flex">
						<?php echo $this->Html->link(
							'<i class="fas fa-shopping-cart"></i> <span id="cart-counter">' . $count . '</span>',
							array('controller' => 'carts', 'action' => 'view'),
							array('escape' => false)
						); ?>
					</form>
				</div>
			</div>
		</nav>

		<?php echo $this->fetch('content'); ?>

	</div>

	<?php echo $this->Html->script('custom'); ?>
	<?php echo $this->Html->script('popper.min'); ?>
	<?php echo $this->Html->script('bootstrap.min'); ?>
</body>

</html>