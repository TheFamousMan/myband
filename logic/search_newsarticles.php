<?php

echo '<div id="containerG">';

		$searchItem = $_POST['search'];
		$number_news = isset($_GET['number_news'])?$_GET['number_news']:0;
    	$number_news = $number_news + 4;
    	$result = $mysqli->query("SELECT * FROM newsarticles WHERE title LIKE '%".$searchItem."%' ORDER BY date_created DESC LIMIT ".$number_news);

		while ($newsarticles = $result->fetch_assoc()) {
			
			echo '<div class="news_article">';
			echo '<h1>'.$newsarticles['title'].'</h1>';
			echo '<div class="picture">';
				echo '<img src="img/'.$newsarticles['image'].'">';
			echo '</div>';
			echo '<div class="text">'.$newsarticles['content'].'</div>';
			echo '</div>';
		}

echo '</div>';

echo '<div class="widthStroke"><a href="?do=news_search&number_news='.$number_news.'">Show more articles</a></div>';

