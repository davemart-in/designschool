<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"]['weekly']['title']; ?> - Design leadership</title>
	<link rel="stylesheet" type="text/css" charset="utf-8"  media="screen, projection" href="/ds.css?<?php echo $cachebuster; ?>" />
</head>
<body>
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/_header.php'; ?>
	<main>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/_nav.php'; ?>
		<article>
			<hgroup>
				<h1><?php echo $data["leadership"]['weekly']['title']; ?></h1>
				<?php
				$status = 'progress'; // complete, progress, unstarted
				$version = 'v0.1';
				include $_SERVER['DOCUMENT_ROOT'] . '/_progress.php'; 
				?>
			</hgroup>
			<p>On a weekly or bi-weekly basis, collect a recap of the following things from each designer:</p>
			<ul>
				<li>Visuals of Portfolio Quality Work</li>
		        <li>Hours worked (Helpful to know if they took time off or worked less/more)</li>
		        <li>Allocation of time for 2 previous weeks (meetings, 1:1’s, designing, coding, PM, etc…)</li>
		        <li>List of projects they shared for feedback</li>
		        <li>Kudos/stories of exemplary work from their teammates</li>
			</ul>
    		<p>Doing this will set a clear expectation about what is being measured and what our expectations are. It will also highlight the designers that are producing the bulk of the work, and the ones that are just coasting.</p>
		</article>
		<?php 
		$contributors = array('davemart-in');
		include $_SERVER['DOCUMENT_ROOT'] . '/_contributors.php'; 
		?>
	</main>
	<script type="text/javascript" src="/ds.js?<?php echo $cachebuster; ?>"></script>
</body>
</html>