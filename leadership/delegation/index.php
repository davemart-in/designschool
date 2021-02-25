<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'delegation'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of learning to delegate">
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
			<p>In my experience, delegation is like a muscle that needs to be developed.</p>
			<p>Looking back, when I first started leading, I really struggled with delegation. There were a couple of reasons for this:</p>
			<ul>
				<li>First, just because I had become a lead didn't mean that I stopped enjoying doing the work myself. For the longest time I held onto the notion that I could both be a good lead and a good product designer.</li>
				<li>I'm a generalist. It's in my nature to enjoy doing an assortment of different things.</li>
				<li>When I first started delegating a number of the people who I was responsible for didn't actually report up to me in the organization. They reported up to their team leads (Note: avoid this situation if you can). Whenever I had to ask something of someone, it felt more like I was asking a favor of them versus delegating. After a while, it felt like I was simply running out of favors.</li>
				<li>At times, I had to experience hitting a wall and realize that I was trying to do too many things myself.</li>
				<li>Finally, I had to get over myself and eventually come to the realization that even though I thought I was good at a lot of things, the folks that worked for me were oftentimes better than me in specific areas.</li>
			</ul>
			<p>Thanksfully, delegation seemed to get easier with time. One of the things that really helped here was creating agreements with the designers who reported up to me around who owned what. Basically, being explicit in writing about the things that I owned as a lead and the things that I expected of each designer who reported to me. After I learned to do this, it made it much easier to delegate tasks in my experience.</p>
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