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
			<p>In the vast world of design, there exists a plethora of successful teams, each with their unique playbook. It's crucial to acknowledge this fact as you embark on your journey as a design leader. No single formula can guarantee success, as each leader and team have their own set of strengths, weaknesses, and working styles. In the face of such diversity, it's essential for you as a leader to remain open to various approaches and learn from the best practices of others.</p>
			<p>The key to becoming a great leader lies in staying true to yourself and embracing your authenticity. Your personal values, beliefs, and experiences shape your leadership style, which in turn affects how you inspire, motivate, and guide your team. Being genuine in your actions and decisions will not only help you gain the trust of your team members, but also enable you to make more informed and effective choices that align with your core principles.</p>
			<p>As you grow into your leadership role, it's important to focus on continuous improvement. Recognize that both you and your team will make mistakes, but these setbacks present valuable opportunities for growth and learning</p>
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