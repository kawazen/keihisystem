<?php $this->set('title_for_layout', '交通費編集'); ?>
<div class="transportExpensesDetails form">
<!-- <h2>【交通費精算システム】編集</h2> -->
<?php
	echo $this->Form->create('TransportExpensesDetail',array('class'=>'form-horizontal'));?>
<fieldset>
	<legend>交通費 編集</legend>
	<div class="control-group">
	<?php
		echo $this->Form->label('moving_date','日付',array('class'=>'control-label','for'=>'moving_date'));
		echo $this->Form->input('moving_date', 
			array(
				'label'=>false,
				'type'=>'date',
				'dateFormat'=>'YMD',
				'minYear'=>date('Y')-5,
				'maxYear'=>date('Y'),
				'monthNames'=>false,
				'separator'=>'/',
				'class'=>'input-small',
				'div'=>array('class'=>'controls')));
	?>
	</div>
	<div class="control-group">
	<?php
		echo $this->Form->label('origin','出発地',array('class'=>'control-label','for'=>'origin'));
		echo $this->Form->input('origin',
			array(
				'label'=>false,
				'class'=>'input-xlarge',
				'div'=>array('class'=>'controls')));
	?>
	</div>
	<div class="control-group">
	<?php
		echo $this->Form->label('destination','目的地',array('class'=>'control-label','for'=>'destination'));
		echo $this->Form->input('destination',
			array(
				'label'=>false,
				'class'=>'input-xlarge',
				'div'=>array('class'=>'controls')));
	?>
	</div>
	<div class="control-group">
	<?php
		echo $this->Form->label('round_trip','片道/往復',array('class'=>'control-label','for'=>'round_trip'));
		echo $this->Form->input('round_trip',
			array(
				'label'=>false,
				'type'=>'radio',
				'legent'=>false,
				'separator'=>'',
				'options'=>array('0'=>'片道','1'=>'往復'),
				'div'=>array('class'=>'controls radio')));
	?>
	</div>
	<div class="control-group">
	<?php
		echo $this->Form->label('cost','金額',array('class'=>'control-label','for'=>'cost'));
		echo $this->Form->input('cost',
			array(
				'label'=>false,
				'class'=>'input-large',
				'div'=>array('class'=>'controls')));
	?>
	</div>
</fieldset>
<div class="form-actions">
<?php
	echo $this->Form->button('更新',array('class'=>'btn btn-primary'));
	echo $this->Html->link('キャンセル',array('action'=>'index'),array('class'=>'tn'));
?>
</div>
<?php echo $this->Form->end(); ?>
</div>