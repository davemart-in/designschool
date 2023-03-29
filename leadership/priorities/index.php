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
			<p>I've found that one of the keys to building psychological saftey and a healthy work environment is to explicitly communicate your high level order of operations.</p>
			<p>Over time, I've settled on the following list of priorities</p>
			<p>Principles, People, Product, and then Profits, always in that order.</p>
			<p>Some of this will require collaboration with other leaders outside of your design organization. That's fine. Creating clarity for the folks who report to you around these four areas is going to be a perennial journey. There's no final destination. There will always be room for improvement.</p>
			<p>Let's drill into each one of these. The following are some questions that you might ask to assess how you're doing within each of these areas:</p>
			<h3>Principles</h3>
			<p>Do we have an inspiring creed, a strong mission, and a motivating vision?</p>
			<h3>People</h3>
			<p>Note: This could include team members, customers, partners.</p>
			<p>Do people feel safe, motivated, connected, appreciated, supported, trusted, and heard? Are we having fun? Are expectations and responsibilities clear? Do we really understand our customers? Is our brand telling a story that resonates? Are we interacting with customers frequently?</p>
			<h3>Product</h3>
			<p>Are we building products customers adore? Are we going a step further and building delightful experiences? Are we helping customers accomplish their goals quicker? How relevant does our onboarding feel for each customer use-case? Do we take pride in our work? Are the main flows of our product bug free and easy to use? Are we prioritizing the right things? Is the "why" clear behind each project we work on? Are we iterating beyond the v1 MVP?</p>
			<h3>Profits</h3>
			<p>Are we helping customer see the ROI that they get from our products? Is our business profitable? Are conversion rates naturally increasing? Are we seeing a natural decrease in churn? Are we seeing an increase in word of mouth referrals? Is our pricing structure logical and easy to choose from?</p>
			<h3>Getting things out of order</h3>
			<p>In the ever-evolving business landscape, it's not uncommon for companies to prioritize profits as their primary goal. Historically, this approach has been the norm, with organizations focusing on their bottom line to satisfy stakeholders and ensure the continued growth of their enterprise. However, with the advent of social media and the increasing interconnectedness of our world, this traditional profit-centric mentality is gradually becoming outdated and unsustainable.</p>
			<p>Businesses are no longer operating in isolation; they are now part of a larger ecosystem where consumers, competitors, and industry influencers are constantly interacting, sharing opinions, and holding companies accountable for their actions. As a result, organizations must adapt to this new environment by adopting a more holistic approach that considers not just financial success, but also the social, ethical, and environmental impact of their decisions.</p>
			<p>This shift in focus calls for a redefinition of success, emphasizing the importance of transparency, authenticity, and genuine connections with customers and stakeholders. In today's digitally-driven world, consumers are more discerning than ever and can quickly spot insincere or profit-driven motives. By prioritizing long-term value creation, fostering meaningful relationships, and addressing the needs and concerns of various stakeholders, businesses can ensure their survival and thrive in the long run.</p>
			<p>Jumping straight to profits is often shortsided. Positive short-term gains accomplished by aggressively optimizing for growth almost always have negative long-term effects which are harder to measure. Whereas, if you focus on principles, people, and product first, growth and profits tend to come organically in my experience.</p>
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