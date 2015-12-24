<h1><?php echo $postagem['title'];?></h1>
<p><?php echo $postagem['body'];?></p>
<p><?php echo 'Autor: ', $postagem['autor'];?></p>

<form action="" method="post" enctype="multipart/form-data">
	<input type="text" name="nome" />
	<input type="text" name="email" />
	<input type="submit" name="send" value="Enviar" />
</form>