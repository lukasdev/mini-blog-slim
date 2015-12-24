<?php foreach($postagens as $post):?>
	<h2><a href="post/<?php echo $post['id'];?>"><?php echo $post['title'];?></a></h2>
	<p><?php echo substr($post['body'],0,20);?></p>
<?php endforeach;?>