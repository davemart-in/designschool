<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'consider'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of accounting for all of the various things you're responsible for">
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
			<p>The list of things that you may end up being responsible for as a design leader can be quite long:</p>
			<h3>Managerial</h3>
			<ul>
				<li>Coaching</li>
				<li>Mentoring</li>
				<li>Building connections</li>
				<li>Communicating clearly</li>
				<li>Managing your time</li>
				<li>Coping with stress</li>
				<li>Giving feedback</li>
				<li>Hiring</li>
				<li>Eliminating fear</li>
				<li>Setting clear expectations</li>
				<li>Holding designers accountable</li>
				<li>Performance management</li>
				<li>Firing</li>
				<li>Liaison to other teams</li>
				<li>Listening</li>
				<li>Showing appreciation</li>
				<li>Continued education</li>
				<li>Providing motivation</li>
				<li>Fostering candid feedback</li>
			</ul>
			<h3>Design</h3>
			<ul>
				<li>The concept brainstorming stage</li>
				<li>the concept fleshing out stage</li>
				<li>interactive prototyping</li>
				<li>Feedback throughout the design process</li>
				<li>The front-end code</li>
				<li>The back-end code</li>
				<li>The speed of the app</li>
				<li>The layout</li>
				<li>Responsiveness</li>
				<li>The copy</li>
				<li>Typography</li>
				<li>Colors</li>
				<li>The page hierarchy</li>
				<li>The interactions</li>
				<li>White space</li>
				<li>Motion</li>
				<li>Personality to convey</li>
				<li>A story to tell</li>
				<li>Feedback states</li>
				<li>Error states</li>
				<li>Accessibility</li>
				<li>Small delightful details</li>
				<li>Internationalization</li>
				<li>Retina considerations</li>
				<li>Considerations for decisions vs. options</li>
				<li>Browser testing</li>
				<li>Device testing</li>
				<li>The brand to consider</li>
			</ul>
			<h3>Product management</h3>
			<p>Depending on the size of your company, your design team may end up being responsible for product/project management as well, which may include:</p>
			<ul>
				<li>Understanding who’s using your product</li>
				<li>Understanding what users are trying to do.</li>
				<li>Understanding what scenarios the UI will handle</li>
				<li>Understanding the market</li>
				<li>Understanding competitors</li>
				<li>Understanding the business impact of a feature</li>
				<li>Regularly communicating updates to other teams</li>
				<li>Tracking the progress of a feature</li>
				<li>Remove distractions for engineers and designers</li>
				<li>Narrate a compelling story around a feature</li>
				<li>Act as a facilitator to resolve concerns internally</li>
				<li>Writing briefs that are easy to understand and keeping them up-to-date</li>
				<li>Managing timelines and scope for a project</li>
			</ul>
			<p>There is a heck of a lot there to consider. But don't let these lists overwhelm you. Keep in mind that you don't have to acquire all of this knowledge over night. Start off by getting good at a few things and then expand your scope of impact from there.</p>
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