<nav>
    <div class="left">
	    <?php 
	    // Figure out breadcrumbs based on URL 
	    $exploded_url = explode('/', $_SERVER['REQUEST_URI']);
	    // Home link treatment
	    if ($_SERVER['REQUEST_URI'] == '/') { ?>
	    <strong>Home</strong>
	    <?php } else { ?>
	    <a href="/">Home</a>
		<?php }
		// Prevent showing about and changelog links twice
		if (isset($exploded_url[1]) && $exploded_url[1] != 'about' && $exploded_url[1] != 'changelog') {
			// Second breadcrumb 
			if (isset($exploded_url[1]) && $exploded_url[1] != '') { 
				// If lesson, then link course
				if (isset($exploded_url[2]) && $exploded_url[2] != '') { ?>
				<a href="/<?php echo $exploded_url[1]; ?>/"><?php echo ucfirst($exploded_url[1]); ?></a>
				<?php } else { 
				// Else just show as bold
				?>
				<strong><?php echo ucfirst($exploded_url[1]); ?></strong>
				<?php } ?>
			<?php } 
			// Third breadcrumb 
			if (isset($exploded_url[2]) && $exploded_url[2] != '') { ?>
			<strong><?php echo ucfirst($exploded_url[2]); ?></strong>
			<?php } ?>
		<?php } ?>
	</div>
    <div class="right">
        <a href="/about/"<?php if ($_SERVER['REQUEST_URI'] == '/about/') { ?>style="font-weight: bold;"<?php } ?>>About</a>
        <a href="/changelog/"<?php if ($_SERVER['REQUEST_URI'] == '/changelog/') { ?>style="font-weight: bold;"<?php } ?>>Changelog</a>
        <a href="https://github.com/davemart-in/designschool/edit/main<?php echo $_SERVER['REQUEST_URI']; ?>index.php" class="edit btn">Edit</a>
    </div>
</nav>