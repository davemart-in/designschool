<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Design leadership course</title>
	<link rel="stylesheet" type="text/css" charset="utf-8"  media="screen, projection" href="/ds.css?<?php echo $cachebuster; ?>" />
</head>
<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/_header.php'; ?>
	<main>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/_nav.php'; ?>
		<article>
			<hgroup>
				<h1>Design leadership course</h1>
				<h2>Learn to transition from designer to leader. This course is 100% free.</h2>
			</hgroup>
			<h3>Intro</h3>
			<div class="list">
				<a href="/leadership/playbook/" class="status progress">Everyone's playbook is different <span class="stage">in development</span></a>
				<a href="/leadership/objective/" class="status progress">Your primary objective <span class="stage">in development</span></a>
				<a href="/leadership/priorities/" class="status progress">Priorities <span class="stage">in development</span></a>
				<a href="/leadership/team/" class="status progress">Teammates, not a family <span class="stage">in development</span></a>
			</div>
			<h3>Time management</h3>
			<div class="list">
				<a href="/leadership/consider/" class="status progress">Many things to consider <span class="stage">in development</span></a>
				<a href="/leadership/time/" class="status progress">Know where your time goes <span class="stage">in development</span></a>
				<a href="/leadership/work/" class="status progress">Letting go of design work <span class="stage">in development</span></a>
				<a href="/leadership/start/" class="status progress">Start each day with a plan <span class="stage">in development</span></a>
				<a href="/leadership/delegation/" class="status progress">Automation & delegation <span class="stage">in development</span></a>
			</div>
		</article>
		<?php 
		$contributors = array('davemart-in');
		include $_SERVER['DOCUMENT_ROOT'] . '/_contributors.php'; 
		?>
	</main>
	<script type="text/javascript" src="/ds.js?<?php echo $cachebuster; ?>"></script>
</body>
</html>