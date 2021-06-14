<div class="row">
	<div class="col-md-5 mx-auto">
		<form>
			<div class="input-group">
				<input class="form-control border-end-0 border rounded-pill" placeholder="find a product" required type="search" typeholder="search" id="search-input">
				<span class="input-group-append">
					<button id="itemSearch" class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="submit">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
	</div>
</div>

<div class="d-flex bd-highlight mt-5">
	<div class="me-auto"><button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
			Sort By
		</button>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
			<li><a class="dropdown-item" href="/products?sort=name">Name</a></li>
			<li><a class="dropdown-item" href="/products?sort=code">Code</a></li>
		</ul>
	</div>
	<div><a class="btn btn-secondary" href="/products/add" role="button">Add a product</a></div>
</div>

<div class="row mt-5">
	<?php foreach ($products as $product) : ?>
		<div class="col-sm-6 col-md-4">
			<div class="">
				<?php echo $this->Html->link(
					$this->Html->image($product['Product']['image']),
					array('action' => 'view', $product['Product']['id']),
					array('escape' => false, 'class' => 'thumbnail')
				); ?>
				<div class="caption">
					<h5>
						<?php echo $product['Product']['name']; ?>
					</h5>
					<h5>
						Code:
						<?php echo $product['Product']['code']; ?>
					</h5>
					<h5>
						Price:
						<?php echo $product['Product']['price']; ?>€
					</h5>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>