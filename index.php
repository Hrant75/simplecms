<?php
include_once ('includes/connection.php');
include_once ('includes/article.php');

$articles = new Article();
$articles = $articles->fetch_all();

?>

<html>
<head>
	<title>CMS Tutorial</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
	<a href="index.php" id="logo">CMS</a>
	<ol>
		<?php foreach ($articles as $article){?>
		<li>
			<a href="article.php?id=<?php echo $article['article_id'];?>">
				<?php echo $article['article_title'];?>
			</a>
			 - <small>posted <?php echo date('l jS', $article['article_timestamp']);?></small>
		</li>
		<?php }?>
	</ol>
	<small><a href="admin">admin</a></small>
</div>
</body>
</html>

 
