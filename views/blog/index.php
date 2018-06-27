<?php require_once(ROOT.'/views/layouts/header.php');?>

<div class="news-page">
	<?php foreach ($newsList as $value):?>
	<?php 

		$pattern = '/([0-9]{4})-([0-9]{2})-([0-9]{2})/';
		$format = '$3-$2-$1';
		$date =  preg_replace($pattern, $format, $value['date_news']);
		?>
	<div class="news-container">
		<div class="title-news">
			<a href="/blog/<?=$value['id']?>"><?=$value['title']?></a>
		</div>
		<div class="image-news">
			<img src="/template/img/blog/<?=$value['image']?>" alt="" width="500">
		</div>
	<div class="content-news">
		<p><?=$value['short_content']?>.....</p>
		<a href="/blog/<?=$value['id']?>">Читать полностью</a>
	</div>
	<div class="about-line">
		<div class="author_name">
			<p>Автор:&nbsp;<i style="color:blue"><?=$value['author']?></i></p>
		</div>
		<div class="date">
		<p>
			Дата публикации:&nbsp;<i><?=$date?></i>
		</p>
		</div>
		<div class="category_name">
			<p>Категория:&nbsp;<a href="#"><?=$value['category']?></a></p>
			
		</div>
	</div>
	</div>
	<hr>
<?php endforeach;?>
</div>


<?php require_once(ROOT.'/views/layouts/footer.php');?>