<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'objective'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of establishing a healthy environment and assembling a team of designers who play well together and who deliver exceptional work, on time">
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
			<p>If you were to distill what it means for you to be a lead in a single sentence, what would that sentence be?</p>
			<p>It's worth spending some time on this.<p>
			<p>Your answer for what success looks like as a design lead is likely to be unique to your situation and you might find that your definition changes with time.</p>
			<p>If it helps, here's my definition:</p>
			<blockquote>Establish a healthy environment and assemble a strong team of designers who play well together and who regularly deliver portfolio quality work, on time.</blockquote>
			<p>Let's break this down</p>
			<p><strong>Healthy environment</strong></p>
			<p>Fostering an environment where people feel safe, one that is largely ego-free, where additive feedback can be shared that is never competitive in nature should be top of mind.</p>
			<p>The environment that you create sets the foundation for everything else</p>
			<p><strong>Strong team of designers</strong></p>
			<p>It may just be you as a single designer to start. With time though, assuming the organization you're working for is growing, generally you can expect to eventually need to hire more designers.</p>
			<p>Hiring the right designers is going to make a night and day difference in how well you are as a lead. Ultimately, your success will be a net result of the designers you lead</p>
			<p><strong>Play well together</strong></p>
			<p>Ego, pride, negativity, and toxicity will all erode the effectiveness of your team.</p>
			<p>We all have ego and pride to some degree, but some designers allow their ego and pride to get in the way of creating a safe environment. Since creating a safe space is priority #1, we cannot allow for this. Finding talented designers who are also humble is where it's at.</p>
			<p>As a principle, I actively work to either correct or manage folks out of my organization who are either net-negative or toxic to those around them. It doesn't matter how long they've been with the company, what their title is, or how great of a designer they are. In the end, it's never worth keeping these people around.</p>
			<p><strong>Regularly deliver portfolio quality work</strong></p>
			<p>I came up with the phrase Portfolio Quality Work (PQW for short) to use as short-hand in conversations with designers who reported to me.</p>
			<p>On a regular basis, designers should be expected to present the progress they've made with their portfolio quality work.</p>
			<p>This does a couple of things. First it helps the designer assemble a portfolio of the best work that they completed while working with you. This portfolio can help express their value both internally as well as externally when they decide to move on. The second benefit is that by setting a clear expectation around producing PQW, the product you're designing will naturally be more polished.</p>
			<p><strong>On time</strong></p>
			<p>Design plays a critical role in software development. When your team commits to delivering something on a specific date, you should do everything within your power to meet that commitment. Much of the work that a design team does is front loaded at the beginning of projects. When design doesn't meet their commitments, everything else in the project slips. In software development all timelines are basically just guesses. That said, when you do commit to something, you should do your very best to deliver your work on time.</p>
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