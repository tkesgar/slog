<?php
	require_once "php/crud/post.php";
	require_once "php/lib/url.php";
	
	$id = $_GET["id"];
	$post = mysqli_fetch_assoc(post_select($id));
	
	post_delete($id);
?>

<?php require "php/templates/top.php" ?>
<?php require "php/templates/navbar.php" ?>

<section class="section-delete">
	<h1>Post Deleted</h1>
	<p>Post &lsquo;<?php echo $post["title"] ?>&rsquo; has been successfully deleted.</p>
	<a href="<?php echo url() ?>">Back to home</a>
</section>

<?php require "php/templates/bottom.php" ?>