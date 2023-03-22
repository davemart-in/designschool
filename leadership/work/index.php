<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'work'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of letting go of IC work as a lead">
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
			<p>One of the most difficult things to do when transitioning from designer to design lead is letting go of the actual design work.</p>
			<p>Depending on the size of your company, it might make sense for you to continue to do a little bit of design work while also leading. As your company grows though, assuming the size of your design team continues to grow as well, there will likely come a time when you'll have to stop doing design projects yourself.</p>
			<p><strong>A couple of related notes:</strong></p>
			<ul>
				<li>When you first become a lead, you might consider taking a break from design work to give yourself time to adjust to all of your new lead responsibilities.</li>
				<li>Wearing both the design lead hat and a designer team member hat can get tricky at times, especially when it comes to conversations around your own design work. Are other designers really going to feel comfortable speaking candidly to their boss about the designs you produce? If you are going to both design and lead, I've found that it can be helpful to state it explicitly, "I've got my designer hat on right now", when you're in designer mode. That way you signal to other designers that they aren't interacting with their design lead.</li>
				<li>One of the hardest things to stop doing is mocking up the way you think shomething should look. You've probably had years of design experience. Mocking something up probably comes quickly to you at this stage. But more often than not, by mocking something up you're not actually helping. You're actually making your designers job harder. Even if you clearly state that this is a throw away mockup, you are sending mixed signals. The best way around this in my experience is to stick to words. Instead of mocking something up, simply describe the way you think something should look or behave with words. Doing so leaves enough up to interpretation and doesn't prevent your designer from being able to iterate further on the design.</li>
				<li>I always gravitated towards wanting to be both a lead and a designer. I've tried it multiple times in my career, but truth be told, it never allowed me to be great at either role.</li>
				<li>I do believe that design leads should continue to design, but rather than design at work, I'd recommend picking up side projects. Side projects can be a great way to continue to maintain your craft outside of work. Over the years I've probably learned more practical skills from side projects than anything else.</li>
			</ul>
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