<?php $page = basename(strtok($_SERVER['REQUEST_URI'], '?'), '.php'); ?>

<nav class="nav" id="nav">
    <ul class="nav_list">
        <li class="nav_item <?=in_array($page, ['names', 'name', 'type']) ? '-active' : ''?>">
            <a href="names.php" class="nav_link"><?=icon('name', '')?> Personal Names</a>
        </li>
        <li class="nav_item <?=in_array($page, ['titles', 'title']) ? '-active' : ''?>">
            <a href="titles.php" class="nav_link"><?=icon('title', '')?> Titles</a>
        </li>
        <li class="nav_item <?=in_array($page, ['people', 'person']) ? '-active' : ''?>">
            <a href="people.php" class="nav_link"><?=icon('people', '')?> People</a>
        </li>
        <li class="nav_item <?=in_array($page, ['inscriptions', 'inscription', 'attestation', 'criterion']) ? '-active' : ''?>">
            <a href="inscriptions.php" class="nav_link"><?=icon('object', '')?> Inscribed Objects</a>
        </li>
        <li class="nav_item <?=in_array($page, ['places', 'place', 'group', 'workshop']) ? '-active' : ''?>">
            <a href="places.php" class="nav_link"><?=icon('place', '')?> Places</a>
        </li>
        <li class="nav_item <?=in_array($page, ['collections', 'collection']) ? '-active' : ''?>">
            <a href="collections.php" class="nav_link"><?=icon('collection', '')?> Collections</a>
        </li>
    </ul>
    <ul class="nav_list -aside">
        <li class="nav_item <?=in_array($page, ['types']) ? '-active' : ''?>">
            <a href="types.php" class="nav_link -no-icon">Name Types</a>
        </li>
        <li class="nav_item <?=in_array($page, ['bibliography', 'publication']) ? '-active' : ''?>">
            <a href="bibliography.php" class="nav_link -no-icon">Bibliography</a>
        </li>
        <li class="nav_item">
            <a href="index.php" class="nav_link -no-icon">Info</a>
        </li>
    </ul>
</nav>
