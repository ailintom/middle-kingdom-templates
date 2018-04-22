<?php $title = 'Collections'; ?>
<?php require 'partials/html-head.php'; ?>
<?php require 'partials/header.php'; ?>

<h1><?=$title?></h1>

<p class="info-box">
    <?=icon('info')?>
    You can use <b>%</b> or <b>*</b> as wildcards.
    “Mar*” will match “Mariemont” or “Marseille”.
</p>

<form action="collections.php" method="get" onreset="MK.removeAllFilters()">
    <div class="row">
        <div class="column">
            <label for="short_name">Short name</label>
            <input id="short_name" name="short_name" list="short-names" title="Enter the short name of the museum or its part" type="text">
        </div>
        <div class="column">
            <label for="full_name">Full name</label>
            <input id="full_name" name="full_name" list="full-names" title="Enter the full name of the museum or its part" type="text">
        </div>
    </div>
    <div class="row">
        <div class="column">
            <label for="location">Location</label>
            <input id="location" name="location" list="locations" title="Enter the city where the collection is located" type="text">
        </div>
        <div class="column">
            <label for="tm_coll_id">Trismegistos Collections ID</label>
            <input id="tm_coll_id" name="tm_coll_id" title="" placeholder="Example: 188" type="text">
        </div>
    </div>

    <button type="submit">
        Search
    </button>
    <button type="reset" title="Clear search and display all records">
        Reset
    </button>

    <?=datalist('full-names')?>
    <?=datalist('locations')?>
    <?=datalist('short-names')?>
</form>

<h2 class="sr-only">Results</h2>

<p>Displaying titles 101&ndash;150 out of 150</p>

<?php require 'partials/pagination.php'; ?>

<div class="table-container">
    <table>
        <tr>
            <th class="-highlight">
                <a href="TODO" title="Sort by Short name, ascending">Short name <?=icon('arrow-up')?></a>
            </th>
            <th>
                <a href="TODO" title="Sort by Full name, ascending">Full name</a>
            </th>
            <th>
                <a href="TODO" title="Sort by Location, ascending">Location</a>
            </th>
            <th>
                <a href="TODO" title="Sort by number of inscribed objects from this collection in the database, ascending">Objects</a>
            </th>
            <th>
                <a href="TODO" title="Sort by Website, ascending">Website</a>
            </th>
            <th>
                <a href="TODO" title="Sort by Online catalogue, ascending">Online catalogue</a>
            </th>
        </tr>
        <tr onclick="MK.open(event, './collection/218103812')" onkeydown="MK.open(event, './collection/218103812')" role="link" tabindex="0">
            <td class="-highlight">Liebieghaus</td>
            <td>Liebieghaus</td>
            <td>Frankfurt, Germany</td>
            <td>2</td>
            <td><span class="biblio-ref-no-author-date">liebieghaus.de</span></td>
            <td>&nbsp;</td>
        </tr>
        <tr onclick="MK.open(event, './collection/218103815')" onkeydown="MK.open(event, './collection/218103815')" role="link" tabindex="0">
            <td class="-highlight">Liège</td>
            <td>The Curtius Museum</td>
            <td>Liège, Belfium</td>
            <td>3</td>
            <td><span class="biblio-ref-no-author-date">lesmuseesdeliege.be</span></td>
            <td>&nbsp;</td>
        </tr>
        <tr onclick="MK.open(event, './collection/218103809')" onkeydown="MK.open(event, './collection/218103809')" role="link" tabindex="0">
            <td class="-highlight">Liverpool E.</td>
            <td>The Garstang Museum of Archaeology, The University of Liverpool</td>
            <td>Liverpool, UK</td>
            <td>19</td>
            <td><span class="biblio-ref-no-author-date">liverpool.ac.uk</span></td>
            <td>&nbsp;</td>
        </tr>
        <tr onclick="MK.open(event, './collection/218103811')" onkeydown="MK.open(event, './collection/218103811')" role="link" tabindex="0">
            <td class="-highlight">Liverpool WM</td>
            <td>World Museum</td>
            <td>Liverpool, UK</td>
            <td>28</td>
            <td><span class="biblio-ref-no-author-date">liverpoolmuseums.org.uk</span></td>
            <td><span class="biblio-ref-no-author-date">available</span></td>
        </tr>
    </table>
</div>

<?php require 'partials/pagination.php'; ?>

<?php require 'partials/footer.php'; ?>
