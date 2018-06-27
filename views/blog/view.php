<?php require_once(ROOT.'/views/layouts/header.php');?>

<div class="news-page">
	
	<?php 

		$pattern = '/([0-9]{4})-([0-9]{2})-([0-9]{2})/';
		$format = '$3-$2-$1';
		$date =  preg_replace($pattern, $format, $newsItem['date_news']);
		?>
	<div class="news-container">
		<div class="title-news">
			<p><?=$newsItem['title']?></p>
		</div>
		<div class="image-news">
			<img src="/template/img/blog/<?=$newsItem['image']?>" alt="">
		</div>
	<div class="content-news">
		<p><?=$newsItem['content']?></p>
	</div>
	<div class="about-line">
		<div class="author_name">
			<p>Автор:&nbsp;<i style="color:blue"><?=$newsItem['author']?></i></p>
		</div>
		<div class="date">
		<p>
			Дата публикации:&nbsp;<i><?=$date?></i>
		</p>
		</div>
		<div class="category_name">
			<p>Категория:&nbsp;<a href="#"><?=$newsItem['category']?></a></p>
			
		</div>
	</div>
	</div>


</div>


<?php require_once(ROOT.'/views/layouts/footer.php');?>