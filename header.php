<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Design Education Democratized</title>
    <link rel="stylesheet" type="text/css" charset="utf-8"  media="screen, projection" href="/ds.css" />
</head>
<body>
    <div class="modal_backdrop">
        <div class="modal">
            <div class="modal_header">
                <a href="#" class="modal_close btn">x</a>
                Edit this page
            </div>
            <div class="modal_body">
                <p>This entire site is meant to be collaborative. If you notice improvements that can be made, please:</p>
                <ol>
                    <li>Click the <a href="https://github.com/davemart-in/designschool/edit/main<?php echo $edit_url; ?>"  target="_blank">Edit this page</a> link below</li>
                    <li>Fork the repo on Github</li>
                    <li>Make your proposed updates in your forked repo</li>
                    <li>Submit your changes as a PR</li>
                </ol>
                <p>That, or you can just <a href="mailto:designpro@gmail.com">shoot me an email</a> or <a href="https://twitter.com/itsdavemartin" target="_blank">DM me</a> with your proposed changes.</p>
            </div>
            <div class="modal_footer">
                <a href="https://github.com/davemart-in/designschool/edit/main<?php echo $edit_url; ?>" class="btn btn--primary btn--lg" target="_blank">Edit this page</a>
            </div>
        </div>
    </div>
    <header>
        <section>
            <a href="/"><img src="/img/design-school.png"></a>
            <h3>Design School</h3>
            <h4>Product Designer Education</h4>
        </section>
    </header>
    <main>
        <nav>
            <div class="right">
                <a href="/"<?php if ($_SERVER['REQUEST_URI'] == '/') { ?>style="font-weight: bold;"<?php } ?>>Home</a>
                <a href="/about/"<?php if ($_SERVER['REQUEST_URI'] == '/about/') { ?>style="font-weight: bold;"<?php } ?>>About</a>
                <a href="/changelog/"<?php if ($_SERVER['REQUEST_URI'] == '/changelog/') { ?>style="font-weight: bold;"<?php } ?>>Changelog</a>
                <a href="https://github.com/davemart-in/designschool/edit/main<?php echo $edit_url; ?>" class="edit btn">Edit</a>
            </div>
        </nav>