<?php $title = 'List of Templates'; ?>
<?php require 'partials/html-head.php'; ?>
<?php require 'partials/header.php'; ?>

<h1><?=$title?></h1>

<ol>
    <?php
    foreach (glob('*.php') as $file) {
        ?><li><a href="<?=$file?>"><?=ucfirst(basename($file, '.php'))?></a></li><?php
    }
    ?>
</ol>

<?php require 'partials/footer.php'; ?>
