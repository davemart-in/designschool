<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'feedback'; ?>
<?php $course_name = 'Design Feedback'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $course_name; ?> Course</title>
	<meta name="description" content="The importance of ">
	<link rel="stylesheet" type="text/css" charset="utf-8"  media="screen, projection" href="/ds.css?<?php echo $cachebuster; ?>" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
</head>
<body class="class">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/_header.php'; ?>
	<main>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/_nav.php'; ?>
		<article>
			<hgroup>
				<h1><?php echo $course_name; ?> Course</h1>
				<h2>Learn a variety of ways to gather feedback from customers and your peers. This course is 100% free.</h2>
			</hgroup>

			This course is still in the planning stages. Add your email address below to be notified when updates are made.
		</article>

		<?php include $_SERVER['DOCUMENT_ROOT'] . '/_newsletter.php'; ?>
	</main>
	<script type="text/javascript" src="/ds.js?<?php echo $cachebuster; ?>"></script>
</body>
</html>