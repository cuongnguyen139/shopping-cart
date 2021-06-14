<?php
App::uses('AppModel', 'Model');
App::uses('CakeSession', 'Model/Datasource');

class Cart extends AppModel
{

	public $useTable = false;

	/*
	 * add a product to cart
	 */
	public function addProduct($productId)
	{
		$allProducts = $this->readProduct();
		if (null != $allProducts) {
			if (array_key_exists($productId, $allProducts)) {
				$allProducts[$productId]++;
			} else {
				$allProducts[$productId] = 1;
			}
		} else {
			$allProducts[$productId] = 1;
		}

		$this->saveProduct($allProducts);
	}

	/*
	 * get total count of products
	 */
	public function getCount()
	{
		$allProducts = $this->readProduct();
		if (count((array)$allProducts) < 1) {
			return 0;
		}

		$count = 0;
		foreach ($allProducts as $product) {
			$count = $count + $product;
		}

		return $count;
	}

	/*
	 * save data to session
	 */
	public function saveProduct($data)
	{
		return CakeSession::write('cart', $data);
	}

	/*
	 * read cart data from session
	 */
	public function readProduct()
	{
		return CakeSession::read('cart');
	}
}
