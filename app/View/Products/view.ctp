<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li><?php echo $this->Html->link('Back', '/products'); ?>
			</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-lg-4 col-md-6">
		<?php echo $this->Html->image($product['Product']['image'], array('class' => 'thumbnail')); ?>
	</div>

	<div class="col-lg-8 col-md-6">
		<h1>
			<?php echo $product['Product']['name']; ?>
		</h1>
		<h2>
			Code:
			<?php echo $product['Product']['code']; ?>
		</h2>
		<h2>
			Price: $
			<?php echo $product['Product']['price']; ?>
		</h2>
		<p>
			<?php echo $this->Form->create('Cart', array('id' => 'add-form', 'url' => array('controller' => 'carts', 'action' => 'add'))); ?>
			<?php echo $this->Form->hidden('product_id', array('value' => $product['Product']['id'])) ?>
			<?php echo $this->Form->submit('Add to cart', array('class' => 'btn-success btn btn-lg')); ?>
			<?php echo $this->Form->end(); ?>
		</p>
	</div>
</div>


<script>
	$(document).ready(function() {
		$('#add-form').submit(function(e) {
			e.preventDefault();
			var tis = $(this);
			$.post(tis.attr('action'), tis.serialize(), function(data) {
				$('#cart-counter').text(data);
			});
		});
	});
</script>