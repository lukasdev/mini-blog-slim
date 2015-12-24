<?php
	$app->get('/', function() use ($app){
		$posts = $app->db->prepare("
			SELECT 
			posts.*
			FROM posts
			LEFT JOIN users
			ON users.id = posts.user_id
		");
		$posts->execute();
		$posts = $posts->fetchAll(PDO::FETCH_ASSOC);

		$app->render('home.php', [
			'postagens' => $posts
		]);
	});