<?php $this->set('title_for_layout', 'ユーザー一覧'); ?>
<div class="users index">
<h3>ユーザー一覧</h3>
<div class="pull-left"><?php echo $this->Html->link('ユーザー登録',array('action'=>'add'),array('class'=>'btn btn-primary btn-small')); ?></div><br>
<table class="table table-striped table-bordered table-condensed"><tr><th>id</th><th>アカウント</th><th>名前</th><th>作成日時</th><th>更新日時</th></BR>

<?php
foreach( $Users as $row) { ?>
    <tr>
        <td><?php echo h($row['User']['id']);?></td>
        <td><?php echo h($row['User']['email']);?></td>
        <td><?php echo h($row['User']['name_last'])." ".h($row['User']['name_first']);?></td>
        <td><?php echo h($row['User']['created']);?></td>

        <td><?php
            echo $this->Html->link('編集',
                array('action'=>'edit',$row['User']['id']),
                array('class'=>'btn btn-primary btn-small','icon'=>'pencil white','escape'=>false));

            echo $this->Form->postLink('削除',
                array('action'=>'delete',$row['User']['id']),
                array('class'=>'btn btn-danger btn-small','icon'=>'trash white','escape'=>false),
                '削除してもよろしいですか？'); ?>
        </td>
    </tr>
<?php }?>
</table>