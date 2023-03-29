<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'care'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of actually caring">
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
			<p>In the world of design leadership, authenticity is crucial. Your team members will quickly sense if your concern for their growth and well-being is genuine or not. To be an effective leader, you must genuinely care about your team and their success. Below, we'll explore the importance of actually caring, how it impacts your leadership, and ways to demonstrate authentic care to your team.</p>

			<h3>Why It Matters</h3>
			<ol>
			<li><strong>Building Trust:</strong> When you genuinely care about your team members, they are more likely to trust you. Trust is essential in fostering open communication, collaboration, and a healthy work environment.</li>
			<li><strong>Employee Retention:</strong> Team members who feel valued and supported are more likely to stay committed to their jobs, resulting in lower turnover rates and higher overall satisfaction.</li>
			<li><strong>Boosts Morale:</strong> A leader who genuinely cares fosters a positive work environment, which can boost morale and increase overall productivity.</li>
			<li><strong>Encourages Personal Growth:</strong> When you care about your team members, you're more likely to invest in their personal growth and development, helping them unlock their potential and become better designers.</li>
			</ol>

			<h3>How to "Actually Care"</h3>
			<ol>
			<li><strong>Be Present and Attentive:</strong> Listen actively to your team members, give them your undivided attention during meetings, and show genuine interest in their ideas and concerns.</li>
			<li><strong>Communicate Openly and Honestly:</strong> Be transparent about your intentions and expectations. Encourage open communication and provide constructive feedback to help your team grow.</li>
			<li><strong>Show Empathy:</strong> Understand and acknowledge the feelings and perspectives of your team members. Be supportive during challenging times and celebrate their successes.</li>
			<li><strong>Invest in Their Growth:</strong> Encourage professional development by providing opportunities for learning and growth, such as workshops, courses, and mentorship programs.</li>
			<li><strong>Foster a Positive Work Environment:</strong> Create a culture that values collaboration, inclusivity, and respect. Recognize and appreciate your team members' hard work and contributions.</li>
			</ol>

			<h3>Conclusion</h3>
			<p>"Actually caring" is the foundation of effective design leadership. By genuinely investing in the well-being and growth of your team members, you build trust, boost morale, and create a positive work environment that drives success. Remember, authentic care is not something that can be faked; it requires a true commitment to the people you lead. Cultivate a leadership style rooted in empathy and support, and watch your team flourish.</p>

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