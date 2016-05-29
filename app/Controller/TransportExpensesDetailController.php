<?php
App::uses('AppController','Controller');

class TransportExpensesDetailController extends AppController{
	public $uses = array('TransportExpensesDetail');

	public $pagenate = array(
		'order' => 'TransportExpensesDetailController.moving_date DESC'
		);

	public function index(){
		$this->set('TransportExpensesDetails',$this->paginate());

	}

}