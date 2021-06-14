<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {
	
	public function beforeFilter() {
		$this->loadModel('Cart');
		
		$this->set('count',$this->Cart->getCount());
	}	
}
