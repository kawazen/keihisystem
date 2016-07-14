<?php $this->set('title_for_layout', 'ユーザー登録'); ?>
<div class="users form">
<!-- <h2>【経費精算システム】ユーザー登録</h2> -->
<?php
	echo $this->form->create('User',array('class'=>'form-horizontal'));?>
<fieldset>
	<legend>ユーザー登録</legend>
	<div class="control-group">
	<?php
		echo $this->Form->label('email','メールアドレス',array('class'=>'control-label','for'=>'email'));
		echo $this->Form->input('email', 
			array(
				'label'=>false,
				'maxlength'=>'255',
				'type'=>'email',
				'class'=>'input-xlarge',
				'div'=>array('class'=>'controls')));
	?>
	</div>
	<div class="control-group">
	<?php
		echo $this->Form->label('name_last','名前（姓）',array('class'=>'control-label','for'=>'name_last'));
		echo $this->Form->input('name_last',
			array(
				'label'=>false,
				'type'=>'text',
				'class'=>'input-small',
				'div'=>array('class'=>'controls')));
	?>
	</div>
	<div class="control-group">
	<?php
		echo $this->Form->label('name_first','名前（名）',array('class'=>'control-label','for'=>'name_first'));
		echo $this->Form->input('name_first',
			array(
				'label'=>false,
				'type'=>'text',
				'class'=>'input-small',
				'div'=>array('class'=>'controls')));
	?>
	</div>
	<div class="control-group">
	<?php
		echo $this->Form->label('password','パスワード',array('class'=>'control-label','for'=>'password'));
		echo $this->Form->input('password',
			array(
				'label'=>false,
				'type'=>'password',
				'class'=>'input-small',
				'div'=>array('class'=>'controls')));
	?>
	</div>
	<div class="control-group">
	<?php
		echo $this->Form->label('password_confirm','パスワード確認用',array('class'=>'control-label','for'=>'password_confirm'));
		echo $this->Form->input('password_confirm',
			array(
				'label'=>false,
				'type'=>'password',
				'class'=>'input-small',
				'div'=>array('class'=>'controls')));
	?>
	</div>

</fieldset>
<div class="form-actions">
<?php
	echo $this->Form->button('登録',array('class'=>'btn btn-primary'));
	echo $this->Html->link('キャンセル',array('action'=>'index'),array('class'=>'tn'));
?>
</div>
<?php echo $this->Form->end(); ?>
</div>