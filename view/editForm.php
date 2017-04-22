<form method="post" action="../controller/edit.php?id=<?php echo $post['id'] ?> ">
    <input type="text" name="name" placeholder="name" value="<?php echo $post['name'] ?>" required/>
    <input type="text" name="description" placeholder="description" value="<?php echo $post['description'] ?>" required/>
    <input type="text" name="created_at" placeholder="created_at" value="<?php echo $post['created_at'] ?>" required/>
    <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
    <input type="submit" value="Отправить">
</form>