<?php
App::uses('AppController','Controller');

class TransportExpensesDetailController extends AppController{
	// public $name = 'TransportExpensesDetail';
	public $uses = array('TransportExpensesDetail');

	public $pagenate = array(
		'order' => 'TransportExpensesDetailController.moving_date DESC'
		);

	public function index(){
		$this->set('TransportExpensesDetails',$this->paginate());

	}

	public function add(){
		if($this->request->is('post')){
			if($this->TransportExpensesDetail->save($this->request->data)){
				$this->Session->setFlash('交通費を登録しました。');
				$this->redirect(array('action'=>'index'));
			}else{
				$this->Session->setFlash('交通費登録に失敗しました。','alert',array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-error'),
				'error');
			}
		}
	}

	public function edit($id=null){
		$post=$this->TransportExpensesDetail->findById($id);
		if(!$post){
			throw new NotFoundException('指定の交通費詳細が見つかりませんでした。');
		}
		$this->set('TransportExpensesDetail',$post);
		// $this->TransportExpensesDetail->id = $id;
		if($this->request->is('post')||$this->request->is('put')){
			if($this->TransportExpensesDetail->save($this->request->data)){
				$this->Session->setFlash('交通費を更新しました。');
				$this->redirect(array('action'=>'index'));
			}else{
				$this->Session->setFlash('交通費の更新に失敗しました。');
			}
		}else{
			$this->request->data = $this->TransportExpensesDetail->read(null,$id);
		}
	}

	public function delete($id=null){
		$this->TransportExpensesDetail->id=$id;
		if(!$this->TransportExpensesDetail->exists()){
			throw new NotFoundException('Invalid TransportExpensesDetail');
		}
		if($this->TransportExpensesDetail->delete()){
			$this->Session->setFlash('交通費を削除しました。');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('交通費の削除に失敗しました。');
		$this->redirect(array('acition'=>'index'));
	}

}