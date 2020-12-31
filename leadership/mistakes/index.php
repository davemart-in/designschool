<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Own your mistakes - Design leadership</title>
	<link rel="stylesheet" type="text/css" charset="utf-8"  media="screen, projection" href="/ds.css?<?php echo $cachebuster; ?>" />
</head>
<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/_header.php'; ?>
	<main>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/_nav.php'; ?>
		<article>
			<hgroup>
				<h1>Own your mistakes</h1>
				<span class="stage">in development</span>
			</hgroup>
			<p>If you or your team messes up, own it and come up with a plan to fix it or an outline of how you’ll avoid letting this happen again in the future.</p>
		</article>
		<?php 
		$contributors = array('davemart-in');
		include $_SERVER['DOCUMENT_ROOT'] . '/_contributors.php'; 
		?>
	</main>
	<script type="text/javascript" src="/ds.js?<?php echo $cachebuster; ?>"></script>
</body>
</html>