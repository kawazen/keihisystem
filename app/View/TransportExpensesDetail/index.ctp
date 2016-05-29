<div class="transportExpensesDetails index">
<h2>【交通費精算システム】一覧　</h2>
<table><tr><th>日付</th><th>出発地</th><th>目的地</th><th>往復/片道</th><th>金額</th><th>作成日時</th><th>更新日時</th></BR>

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
        <td><a href=update.php?id=<?php echo h($row['TransportExpensesDetail']['id']);?>>編集</a></td>
    </tr>
<?php }?>
</table>