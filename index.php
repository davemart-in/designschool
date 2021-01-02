<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Design School - Product designer Education</title>
	<link rel="stylesheet" type="text/css" charset="utf-8"  media="screen, projection" href="/ds.css?<?php echo $cachebuster; ?>" />
</head>
<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/_header.php'; ?>
	<main>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/_nav.php'; ?>
		<article>
			<hgroup>
				<h1>A free school for digital product designers</h1>
				<h2>Learn at your own pace. Courses are 100% free. Everyone is welcome.</h2>
			</hgroup>
			<h3>Courses in Development</h3>
			<div class="list">
				<?php foreach ($data['courses']['progress'] as $course => $meta) { ?>
				<a href="<?php echo $meta['href']; ?>" class="status progress"><?php echo $meta['title']; ?> <span class="stage"></span></a>
				<?php } ?>
			</div>
			<h3>Future Courses</h3>
			<div class="list">
				<?php foreach ($data['courses']['unstarted'] as $course => $meta) { ?>
				<a href="<?php echo $meta['href']; ?>" class="status unstarted"><?php echo $meta['title']; ?> <span class="stage"></span></a>
				<?php } ?>
			</div>
		</article>
	</main>
	<script type="text/javascript" src="/ds.js?<?php echo $cachebuster; ?>"></script>
</body>
</html>