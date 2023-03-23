<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'trust'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of earning your designers trust and respect">
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
			<p>Establishing and maintaining trust and respect with your team members is crucial to creating a positive and productive work environment. These core values serve as the foundation for collaboration, open communication, and innovation, enabling your designers to reach their full potential and contribute effectively to the team's success. However, it's important to remember that trust and respect are not automatically granted; they must be earned through consistent and deliberate actions.</p>
			<p>Earning your designers' trust starts with demonstrating integrity and honesty in all aspects of your leadership. By being transparent in your decision-making process, acknowledging your mistakes, and taking responsibility for your actions, you show your team that you value their opinions and are willing to be held accountable. Consistently following through on your commitments and providing clear expectations also reinforces the sense of reliability and dependability that fosters trust.</p>
			<p>Respect, on the other hand, is built by showing genuine appreciation for your designers' skills, efforts, and unique perspectives. Actively listening to their ideas, providing constructive feedback, and giving credit where it's due fosters a culture of mutual respect and encourages the free flow of creative ideas. Encouraging a culture of inclusion and diversity, where everyone feels valued and heard, also contributes to an environment where respect thrives.</p>
			<p>However, it's important to be aware that trust and respect are fragile and can be easily lost through inconsistent behavior, lack of follow-through, failing to give credit your team for their work, or through poor communication. A single misstep or lapse in judgment can undermine the trust and respect you've worked so hard to establish, causing a ripple effect that can jeopardize team morale, performance, and ultimately, the success of your projects. Therefore, it's essential to be mindful of your actions and interactions, and to address any issues that may arise in a timely, honest, and respectful manner. By actively working to rebuild and strengthen trust and respect when they are challenged, you demonstrate your commitment to fostering a positive and supportive team culture.</p>
			<p>In conclusion, building trust and respect with your team members is a continuous process that requires intentional effort, self-awareness, and adaptability. By nurturing an environment of open communication, inclusion, and accountability, you can create a strong foundation for your team's success and growth. Remember that trust and respect are two-way streets; as a design leader, it's not only your responsibility to earn your team's trust and respect, but also to reciprocate by trusting and respecting their skills, ideas, and contributions. By doing this, you will empower your designers to excel and drive your team towards greater achievements.</p>
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