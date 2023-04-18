<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'stand'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
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
				$status = $data[$course][$lesson]['status']; // complete, draft, progress, unstarted
				$version = $data[$course][$lesson]['version'];
				include $_SERVER['DOCUMENT_ROOT'] . '/_progress.php'; 
				?>
			</hgroup>
			<p>Another way to show support for your team members is by ensuring that they are treated fairly and with respect. Standing up for your designers is really important for fostering trust and maintaining a positive work environment. By addressing negative comments, advocating for your team, and defending their work, you demonstrate loyalty and your commitment to your team.</p>

			<p>One key aspect of standing up for your team is addressing any negative comments directed their way. By promptly and professionally resolving these issues, you help create a more supportive and respectful work atmosphere.</p>

			<p>It's also important to be the voice for your team when they cannot speak for themselves. Represent their interests in meetings with management, help them navigate conflicts with other departments, and communicate the value of their work. By advocating for your designers, you show your dedication to their professional growth and success.</p>

			<p>Lastly, setting clear boundaries is essential to protect your team from excessive workload or unrealistic expectations. Communicate these boundaries to management and other stakeholders, ensuring your team has the resources and time needed to deliver quality work.</p>

			<p>Remember, as a design leader, your role is not only to guide your team's work but also to advocate for them. By standing up for your designers, you create a more unified team that is more capable of overcoming challenges and achieving success.</p>
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