<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'mistakes'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of owning your mistakes">
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
			<p>You play a crucial role in fostering a culture of trust, accountability, and continuous improvement. Openly owning your personal mistakes and those of your team is an essential aspect of this process.</p>
			<h3>Acknowledging mistakes</h3>
			<p>Admitting when you or your team has made a mistake is a sign of strong leadership. It demonstrates humility, honesty, and a commitment to learning from failures. By owning your mistakes, you create an environment where team members feel safe to admit their own errors, share their concerns, and work collaboratively to find solutions. This open and transparent approach can strengthen relationships within your team.</p>
			<h3>Focus on the work, not the individual</h3>
			<p>When addressing mistakes, it's important to maintain a focus on the work itself rather than assigning blame to individual team members. This approach fosters a more constructive environment, where team members feel supported rather than defensive. Emphasize that mistakes are opportunities for learning and growth, and encourage your team to analyze the error without personalizing the issue. By promoting a culture of collaboration and continuous improvement, you can help your team members develop resilience, learn from their experiences, and ultimately become better designers.</p>
			<h3>Creating a plan to fix mistakes</h3>
			<p>Once a mistake has been acknowledged, it's important to develop a plan to address the issue. This may involve reevaluating design decisions, reworking existing processes, or seeking additional input from stakeholders. As a design leader, your role is to guide your team through this process and ensure they have the resources and support needed to correct the mistake effectively.</p>
			<h3>Learning from mistakes</h3>
			<p>It's crucial to learn from the experience and identify ways to prevent similar issues in the future. Consider conducting a retrospective analysis to examine the root cause of the error and evaluate any underlying processes or assumptions that may have contributed to the mistake. Use these insights to inform your team's approach moving forward and make necessary adjustments to prevent similar issues from arising.</p>
			<h3>Conclusion</h3>
			<p>Owning your mistakes as a design leader is vital for fostering a culture of trust, accountability, and growth within your team. By acknowledging errors, creating plans to address them, learning from the experience, and implementing strategies to prevent future issues, you can help lead your team toward continuous improvement.</p>
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