<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Design <?php echo $course; ?> course</title>
	<meta name="description" content="The importance of ">
	<link rel="stylesheet" type="text/css" charset="utf-8"  media="screen, projection" href="/ds.css?<?php echo $cachebuster; ?>" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
</head>
<body class="class">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/_header.php'; ?>
	<main>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/_nav.php'; ?>
		<article>
			<hgroup>
				<h1>Design <?php echo $course; ?> course</h1>
				<h2>Learn to transition from designer to leader. This course is 100% free.</h2>
			</hgroup>

			<?php 
			$this_lesson = '';
			$count = 0;
			foreach ($data[$course] as $lesson => $meta) { 
				// Increment count
				$count++;
				if ($this_lesson != $meta['section']) {
					// Close our list div
					if ($count != 1) { ?>
					</div>
					<?php }
					// Update this lesson
					$this_lesson = $meta['section']; ?>
					<h3 id="<?php echo str_replace(' ', '', $meta['section']); ?>">
						<span><?php echo ucfirst($meta['section']); ?></span>
						<a href="/<?php echo $course; ?>/#<?php echo str_replace(' ', '', $meta['section']); ?>" class="hash">#</a>
					</h3>
					<div class="list">
				<?php } ?>
				<a href="/<?php echo $course; ?><?php echo $meta['href']; ?>" class="status <?php echo $meta['status']; ?>"><?php echo $meta['title']; ?> <span class="stage"></span></a>
				<?php if (count($data[$course]) == $count) { ?>
				</div>
				<?php } ?>
			<?php } ?>
		</article>
	</main>
	<section class="outline">
		<strong>OUTLINE</strong>
		<ul></ul>
	</section>
	<script type="text/javascript" src="/ds.js?<?php echo $cachebuster; ?>"></script>
</body>
</html>