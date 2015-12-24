<?php
	$app->post('/post/:postId', function($postId) use ($app){
		print_r($_POST);
		die;
	});

	$app->get('/post/:postId', function($postId) use ($app){
		$post = $app->db->prepare("
			SELECT 
			posts.*,
			CONCAT(users.first_name, ' ', users.last_name) AS autor
			FROM posts
			LEFT JOIN users
			ON users.id = posts.user_id
			WHERE posts.id = ?
		");
		$post->execute(array($postId));

		$post = $post->fetchAll(PDO::FETCH_ASSOC);

		$app->render('single.php', [
			'postagem' => $post[0]
		]);
	});