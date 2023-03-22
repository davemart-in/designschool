<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'time'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of knowing where your time goes">
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
			<p>It's important to know where your time goes. This is especially true as you begin to transition into a leadership role.</p>
			<p>If you want to change how you spend your time, first figure out where it’s going. I would encourage everyone to occassionally track their time for a while and determine where it's spent during the day.</p>
        	<p>One of the best was to audit where your time is going is through activity logs. There are two ways that you can go about using activity logs:</p>
        	<p><strong>Using software</strong></p>
        	<p>If you spend most of your work day on a screen you might consider checking out apps like <a href="https://www.rescuetime.com/" rel="nofollow">RescueTime</a> which will automatically bucket where your time is spent by the apps that you have focused at any one time.</p>
        	<p><strong>Recording manually</strong></p>
        	<p>The other option is to just record things manually. You can do this on a blank piece of paper or in a spreadsheet.</p>
        	<p>Make a couple of columns: time started, description, duration, how I felt, impact, category. Whenever you start a new activity, record the time on a new row. Next briefly describe the activity that you're doing. Once you're done with that task, make a note of the duration and jot down whether that activity brought you energy or drained you of energy. Then record what you feel the importance of that task was (High, Mediium, Low) and finally categorize the activity (communication, meetings, planning, etc...).</p>
        	<p>Once your day is over, tally it all up and look for patterns.</p>
        	<p><strong>Why this matters</strong></p>
        	<p>As your lead responsibilities increase so will the demand on your time. Auditing where your time is going from time to time can help you recognize activities that you may be able to remove from your day either by eliminating them or delegating them. Auditing your time also helps you see at a 10ft level if you're investing your time on the right things.</p>
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