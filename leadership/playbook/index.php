<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'playbook'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data[$course][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of creating your own playbook">
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
				<h1><?php echo $data[$course][$lesson]['title']; ?></h1>
				<?php
				$status = $data[$course][$lesson]['status']; // complete, progress, unstarted
				$version = $data[$course][$lesson]['version'];
				include $_SERVER['DOCUMENT_ROOT'] . '/_progress.php'; 
				?>
			</hgroup>
			<p>There are a lot of successful teams in the world. None of whom use the same playbook.</p>
			<p>As you begin your leadership journey it's important to understand this. There is no magic mix of skills and behaviors that will turn you into a great leader.</p>
			<p>The best thing that you can do is be authentic to yourself and to iterate towards being a better lead and building a better team with time.</p>
			<p>The following resource is meant to be a list of ideas for you to consider. It is in no way meant to be a prescriptive path to follow.</p>
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