
<nav class="col-3 py-2 categories-nav">
	<b>Catégories :</b>
	<ul>
		<li><a href="article_list.php">Tous les articles</a></li>
		<!-- liste des catégories -->

        <?php

        //préparation de la requête => sélectionner tous les champs des catégories
        $query = $db->query('SELECT * FROM category');
        while( $data = $query->fetch() ){
        echo '<li><a href="article_list.php?id='.$data['id']. '">'.$data['name'].'</a></li>' ;
        }
        $query->closeCursor();
        ?>
	</ul>
</nav>
