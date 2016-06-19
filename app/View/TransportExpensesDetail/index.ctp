<?php $this->set('title_for_layout', '交通費一覧'); ?>
<div class="transportExpensesDetails index">
<h3>交通費一覧</h3>
<div class="pull-left"><?php echo $this->Html->link('交通費入力',array('action'=>'add'),array('class'=>'btn btn-primary btn-small')); ?></div><br>
<table class="table table-striped table-bordered table-condensed"><tr><th>日付</th><th>出発地</th><th>目的地</th><th>往復/片道</th><th>金額</th><th>作成日時</th><th>更新日時</th></BR>

<?php
foreach( $TransportExpensesDetails as $row) { ?>
    <tr>
        <td><?php echo h($row['TransportExpensesDetail']['moving_date']);?></td>

        <td><?php echo h($row['TransportExpensesDetail']['origin']);?></td>
        <td><?php echo h($row['TransportExpensesDetail']['destination']);?></td>
        <?php if(h($row['TransportExpensesDetail']['round_trip']) == 0){ ?>
        	<td>片道</td>
        <?php }else{ ?>
        	<td>往復</td>
        <?php };?>
        <td><?php echo h($row['TransportExpensesDetail']['cost']);?>円</td>
        <td><?php echo h($row['TransportExpensesDetail']['created']);?></td>
        <td><?php echo h($row['TransportExpensesDetail']['modified']);?></td>
        <td><?php
            echo $this->Html->link('編集',
                array('action'=>'edit',$row['TransportExpensesDetail']['id']),
                array('class'=>'btn btn-primary btn-small','icon'=>'pencil white'));

            echo $this->Form->postLink('削除',
                array('action'=>'delete',$row['TransportExpensesDetail']['id']),
                array('class'=>'btn btn-danger btn-small','icon'=>'trash white'),
                '削除してもよろしいですか？'); ?>
        </td>
    </tr>
<?php }?>
</table>