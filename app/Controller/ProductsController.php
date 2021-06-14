<?php
App::uses('AppController', 'Controller');

class ProductsController extends AppController
{

	public function index()
	{
		if (isset($_GET['search'])) {
			$this->set('products', $this->Product->find('all', array('conditions' => array('Product.name' => $_GET['search']))));
		}

		if (isset($_GET['sort'])) {
			if ($_GET['sort'] == "name") {
				$this->set('products', $this->Product->find('all', array('order' => array('Product.name' => 'asc'))));
			} else if ($_GET['sort'] == "code") {
				$this->set('products', $this->Product->find('all', array('order' => array('Product.code' => 'asc'))));
			}
		}

		if (!isset($_GET['search']) && !isset($_GET['sort'])) {
			$this->set('products', $this->Product->find('all'));
		}
	}

	public function view($id)
	{
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}

		$product = $this->Product->read(null, $id);
		$this->set(compact('product'));
	}

	public function add()
	{
		if ($this->request->is('post')) {
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Flash->success(__('Product has been added'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to add product.'));
		}
	}
}
