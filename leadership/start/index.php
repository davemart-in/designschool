<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'start'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of knowing what your top priorities are before you start your day">
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
			<p>This particular tip isn't exclusive to leadership roles.</p>
			<p>If you get in the habit of mapping out a prioritized plan what you'd like to accomplish in a day, either morning of or at the end of the previous day, there are a couple of benefits:</p>
			<ul>
				<li>First, this process helps reduce stress. Simply writing down a plan can help eliminate anxiety.</li>
				<li>Second, I've found that having a discrete list of things that you want to tackle in a day helps with productivity.</li>
				<li>Third, when new activities come up throughout your day it's helpful to already have a prioritized list of things that you had planned to tackle. That way, you can quickly assess where the new item should go, whether it should displace something in your current day, or whether it can wait until another day.</li>
			</ul>
			<h3>Big stones, then tiny stones</h3>
			<p>Knowing what your major priorities are for the day can be helpful prior to opening up email or Slack in the morning. Naturally, as you sort through email and Slack, you'll likely find additional smaller items that you need to add to your list. If you've already jotted down a few larger priorities, then it becomes much easier to gauge where to prioritize these other smaller items.</p>
			<h3>Bucketing your time</h3>
    	<p>If you work at a company where there are more Slack channels than there are employees, this might be a warning sign. Trying to stay on top of everything that’s going on, and feeling like you have to be in the loop, can feel like a full-time job itself at times. If you find yourself spending too much time consuming, you might consider putting rules around it, like, In the morning check Slack and email for an hour, then after that block out a chunk of time on your calendar for heads down work.</p>
    	<h3>Blocking out "no meeting" days</h3>
    	<p>One of the most effective things that I did late in my career was to start blocking out entire days as "no meeting" days on my calendar. I still do this. Mon, Tue, and Thu are meeting days. Wed and Fri are no meeting days. This is not to say that I never have meetings on Wed and Fri. But when I do it's now up to my discretion. Blocking these days out serves as the first line of defense for me to ensure that folks double check with me before booking a meeting on those days. Doing this has probably done more to make me more effecient than anything else. It also helps me feel like I'm somewhat balanced and less stressed.</p>
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