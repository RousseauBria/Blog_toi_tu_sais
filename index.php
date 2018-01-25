﻿<?php require_once '/tools/_db.php'; ?>

<!DOCTYPE html>
<html>
	<head>

		<title>Homepage - Mon premier blog !</title>

		<?php require 'partials/head_assets.php'; ?>

	</head>
	<body class="index-body">
		<div class="container-fluid">

			<?php require 'partials/header.php'; ?>

			<div class="row my-3 index-content">

				<?php require 'partials/nav.php'; ?>

				<main class="col-9">
					<section class="latest_articles">
						<header class="mb-4"><h1>Les 3 derniers articles :</h1></header>

                        <?php $query = $db -> query ('SELECT * FROM article WHERE is_published=1 LIMIT 0,3');
                        while ($article = $query -> fetch()):
                        ?>

                        <article class="mb-4">
							<h2><?php echo $article['title']; ?></h2>

                        <span class="article-date"><?php echo $article['created_at']; ?></span>
                        <div class="article-content">
                            <?php echo $article['summary']; ?>
                        </div>
                        <a href="article.php?article_id=<?php echo $article['id']; ?>">> Lire l'article</a>
                        </article>
                        <?php endwhile;
                        $query->closeCursor();
                        ?>


					</section>
					<div class="text-right">
						<a href="article_list.php">> Tous les articles</a>
					</div>
				</main>
			</div>

			<?php require 'partials/footer.php'; ?>

		</div>
	</body>
</html>
