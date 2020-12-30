<nav>
    <div class="right">
        <a href="/"<?php if ($_SERVER['REQUEST_URI'] == '/') { ?>style="font-weight: bold;"<?php } ?>>Home</a>
        <a href="/about/"<?php if ($_SERVER['REQUEST_URI'] == '/about/') { ?>style="font-weight: bold;"<?php } ?>>About</a>
        <a href="/changelog/"<?php if ($_SERVER['REQUEST_URI'] == '/changelog/') { ?>style="font-weight: bold;"<?php } ?>>Changelog</a>
        <a href="https://github.com/davemart-in/designschool/edit/main<?php echo $_SERVER['REQUEST_URI']; ?>index.php" class="edit btn">Edit</a>
    </div>
</nav>