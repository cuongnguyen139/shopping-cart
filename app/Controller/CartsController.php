<?php
App::uses('AppController', 'Controller');

class CartsController extends AppController {

	public $uses = array('Product','Cart');
	
	public function add() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Cart->addProduct($this->request->data['Cart']['product_id']);
		}
		echo $this->Cart->getCount();
	}
	
	public function view() {
		$carts = $this->Cart->readProduct();
		$products = array();
		if (null!=$carts) {
			foreach ($carts as $productId => $count) {
				$product = $this->Product->read(null,$productId);
				$product['Product']['count'] = $count;
				$products[]=$product;
			}
		} 
		$this->set(compact('products'));
	}
		
	public function update() {
		if ($this->request->is('post')) {
			if (!empty($this->request->data)) {
				$cart = array();
				foreach ($this->request->data['Cart']['count'] as $index=>$count) {
					if ($count>0) {
						$productId = $this->request->data['Cart']['product_id'][$index];
						$cart[$productId] = $count;
					}
				}
				$this->Cart->saveProduct($cart);
			}
		}
		$this->redirect(array('action'=>'view'));
	}
	
}