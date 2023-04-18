<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'credit'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of giving credit to your team">
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
			<p>An essential aspect of any leadership role is acknowledging the hard work and accomplishments of your team. Redirecting credit sent your way to your team not only builds trust but also demonstrates that you value and support their efforts.</p>

			<h3>Why Giving Credit Matters:</h3>
			<ol>
				<li><strong>It fosters trust:</strong> Redirecting credit to your team shows that you're a transparent leader who values their contributions. This builds trust and strengthens your relationships with your team.</li>
				<li><strong>It boosts morale and mtivation:</strong> Recognizing team members' achievements helps boost morale and motivates them to continue delivering excellent work.</li>
				<li><strong>It helps create a culture of appreciation:</strong> Giving credit encourages a culture of appreciation and support, fostering a positive and collaborative work environment.</li>
				<li><strong>It improves accountability:</strong> When team members know their efforts will be recognized, they're more likely to take ownership of their work and strive for excellence.</li>
			</ol>

			<h3>How to Give Credit to Your Team:</h3>
			<ol>
				<li><strong>Be specific:</strong> Recognize team members' specific accomplishments and highlight the impact of their work on a project's success.</li>
				<li><strong>Public recognition:</strong> Acknowledge team members' contributions in meetings, company-wide announcements, or newsletters to give them the visibility they deserve.</li>
				<li><strong>Encourage peer recognition:</strong> Foster a culture where team members appreciate and recognize each other's efforts, creating a supportive work environment.</li>
				<li><strong>Share success stories:</strong> Share your team's success stories with other departments or higher-ups, showcasing their achievements and giving them credit for their hard work.</li>
				<li><strong>Celebrate milestones:</strong> Organize celebrations or team-building events to acknowledge milestones and achievements, showing your gratitude and appreciation.</li>
			</ol>

			<p>Giving credit to your team is a powerful way to demonstrate your support, build trust, and motivate your team to continue delivering exceptional work. As a design leader, it's crucial to create a culture where team members feel valued and appreciated for their efforts. By recognizing and celebrating their accomplishments, you cultivate a positive work environment that encourages collaboration, innovation, and success.</p>
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