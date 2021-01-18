<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $lesson = 'stand'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - Design leadership</title>
	<meta name="description" content="The importance of standing up for your designers">
	<link rel="stylesheet" type="text/css" charset="utf-8"  media="screen, projection" href="/ds.css?<?php echo $cachebuster; ?>" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
</head>
<body class="lesson">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/_header.php'; ?>
	<main>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/_nav.php'; ?>
		<article>
			<hgroup>
				<h1><?php echo $data["leadership"][$lesson]['title']; ?></h1>
				<?php
				$status = 'progress'; // complete, progress, unstarted
				$version = 'v0.1';
				include $_SERVER['DOCUMENT_ROOT'] . '/_progress.php'; 
				?>
			</hgroup>
			<p>The importance of standing up for your team.</p>
		</article>
		<?php 
		include $_SERVER['DOCUMENT_ROOT'] . '/_nextprev.php';
		include $_SERVER['DOCUMENT_ROOT'] . '/_newsletter.php';
		?>
		<?php 
		$contributors = array('davemart-in');
		include $_SERVER['DOCUMENT_ROOT'] . '/_contributors.php'; 
		?>
	</main>
	<script type="text/javascript" src="/ds.js?<?php echo $cachebuster; ?>"></script>
</body>
</html>