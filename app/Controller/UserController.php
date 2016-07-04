<?php
App::uses('AppController','Controller');

class UserController extends AppController{
	public $uses = array('User');

	public $pagenate = array(
	'order' => 'UserController.id'
	);

	public function index(){
		$this->set('Users',$this->paginate());
	}

	public function add(){
		if($this->request->is('post')){
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('ユーザーを登録しました。');
				$this->redirect(array('action'=>'index'));
			}else{
				$this->Session->setFlash('ユーザー登録に失敗しました。','alert',array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-error'),
				'error');
			}
		}
	}

}