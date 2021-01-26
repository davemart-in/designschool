<div class="status boxed <?php echo $status; ?>">
	<?php if ($status == 'progress') { ?>
		In progress
	<?php } elseif ($status == 'complete') { ?>
		Complete
	<?php } else { ?>
		Not started
	<?php } ?>
	 <a href="https://github.com/davemart-in/designschool/commits/main<?php echo $_SERVER['REQUEST_URI']; ?>index.php" target="_blank"><?php echo $version; ?></a>
</div>