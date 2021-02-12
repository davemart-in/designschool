<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'priorities'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of understanding macro priorities">
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
			<p>I've found that on eof the keys to building psychological saftey and a healthy work environment is to explicitly communicate your high level order of operations.</p>
			<p>Over time, I've settled on the following list of priorities</p>
			<p>Principles, People, Product, and then Profits, always in that order.</p>
			<p>Some of this will require collaboration with other leaders outside of your design organization. That's fine. Creating clarity for the folks who report to you around these four areas is going to be a perennial journey. There's no final destination. There will always be room for improvement.</p>
			<p>Let's drill into each one of these. The following are some questions that you might ask to assess how you're doing within each areas:</p>
			<p><strong>Principles</strong></p>
			<p>Do we have an inspiring creed, a strong mission, and a motivating vision?</p>
			<p><strong>People</strong></p>
			<p>Note: This could include team members, customers, partners.</p>
			<p>Do people feel safe, motivated, connected, appreciated, supported, trusted, and heard? Are we having fun? Are expectations and responsibilities clear? Do we really understand our customers? Is our brand telling a story that resonates? Are we interacting with customers frequently?</p>
			<p><strong>Product</strong></p>
			<p>Are we building products customers adore? Are we going a step further and building delightful experiences? Are we helping customers accomplish their goals quicker? How relevant does our onboarding feel for each customer use-case? Do we take pride in our work? Are the main flows of our product bug free and easy to use? Are we prioritizing the right things? Is the "why" clear behind each project we work on? Are we iterating beyond the v1 MVP?</p>
			<p><strong>Profits</strong></p>
			<p>Are we helping customer see the ROI that they get from our products? Is our business profitable? Are conversion rates naturally increasing? Are we seeing a natural decrease in churn? Are we seeing an increase in word of mouth referrals? Is our pricing structure logical and easy to choose from?</p>
			<p><strong>Getting things out of order</strong></p>
			<p>It's natural at times to want to jump straight to Profits. Historically, that's the way most businesses have operated. In the age of social media, this is a dying strategy. </p>
			<p>It's been my observation that any time a company does that it's shortsided. Positive short-term gains accomplished by aggressively optimizing for growth almost always have negative long-term effects which are harder to measure. WHereas, if you focus on principles, people, and product first, growth and profits tend to come much easier in my experience.</p>
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