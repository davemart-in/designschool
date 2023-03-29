<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'questions'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of asking questions">
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
			<p>As a design leader, one of your key responsibilities is to guide and mentor your team to achieve their best work. While it may be tempting to provide quick solutions or specific mockups, doing so can come across as overly prescriptive and can limit creativity. Asking questions, on the other hand, can help steer designers in the right direction while still allowing them the freedom to explore and innovate.</p>
			<h3>The power of questions</h3>
			<p>Questions are powerful tools that can unlock creativity, encourage critical thinking, and foster a deeper understanding of design challenges. By asking the right questions, you can guide your designers to explore various perspectives, identify potential roadblocks, and ultimately develop more effective solutions. Moreover, encouraging designers to think through problems independently can lead to solutions that exceed your original expectations.</p>
			<h3>Avoiding overly prescriptive guidance</h3>
			<p>While offering specific guidance or mockups can seem like a quick way to address design challenges, doing so can limit your team's creativity and stifle growth. By providing overly prescriptive solutions, you risk creating a culture of dependency, where designers rely on your input rather than thinking critically and independently. Instead, focus on asking thought-provoking questions that enable your team to develop their problem-solving skills and reach their full potential.</p>
			<h3>Types of questions to ask</h3>
			<p>Effective questioning involves more than simply asking for input or feedback. Consider incorporating the following types of questions to foster a culture of curiosity and innovation:</p>
			<ul>
			    <li><strong>Open-ended questions:</strong> Encourage exploration and deeper thinking by asking questions that cannot be answered with a simple "yes" or "no."</li>
			    <li><strong>Probing questions:</strong> Delve deeper into the issue by asking follow-up questions that reveal underlying assumptions or beliefs.</li>
			    <li><strong>Reflective questions:</strong> Help designers evaluate their own thought process by asking them to consider alternative approaches or perspectives.</li>
			    <li><strong>Clarifying questions:</strong> Ensure clear communication and understanding by asking questions that uncover the precise meaning behind statements or ideas.</li>
			</ul>
			<h3>Creating a culture of inquiry</h3>
			<p>Asking questions not only benefits individual designers but also helps create a culture of inquiry within your team. Encourage designers to ask questions of each other, as well as of stakeholders and customers. This collaborative approach to problem-solving can lead to more diverse perspectives, increased creativity, and ultimately, better designs.</p>
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