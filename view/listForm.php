<?php
foreach($sel as $row) {
    echo $row['name']. ' - '. $row['description']. ' - '. $row['created_at'];
    //var_dump($row['id']);
    ?>
    <a href="../controller/edit.php?id=<?php echo $row['id']?>">Edit</a>
    <a href="../controller/delete.php?id=<?php echo $row['id']?>">Delete</a><br />
<?php }?>