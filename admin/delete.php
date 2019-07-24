<?php
/**
 * Created by PhpStorm.
 * User: hrant
 * Date: 7/23/19
 * Time: 10:48 PM
 */
session_start();

include_once('../includes/connection.php');
include_once('../includes/article.php');

$article = new Article();

//if(isset($_SESSION['logged_in'])) {
if (isset($_SESSION['logged_in'])) {
	if (isset($_GET['id'])){
		$id = $_GET['id'];
		$query = $pdo->prepare("DELETE FROM articles WHERE article_id = ?");
		$query->bindValue(1, $id);
		$query->execute();

		header("Location: delete.php");
	}
	 // display delete page
	$articles = $article->fetch_all();
	?>

	<html>
	<head>
		<title>Delete article</title>
		<link rel="stylesheet" href="../assets/style.css">
	</head>
	<body>
	<div class="container">
		<a href="index.php" id="logo">CMS</a>
		<br>
		<h3>Select an article to Delete</h3>

		<form action="delete.php" method="get">
			<select name="id" onchange="this.form.submit()">
				<?php foreach ($articles as $article){ ?>
					<option value="<?php echo $article['article_id']; ?>">
						<?php echo $article['article_title'];?>
					</option>
				<?php } ?>
			</select>
		</form>

	</div>
	</body>
	</html>
<!---->
<?php
} else {
	echo 'please login';
}