<?php $title = 'Titles'; ?>
<?php require 'partials/html-head.php'; ?>
<?php require 'partials/header.php'; ?>

<h1><?=$title?></h1>

<form action="titles.php" method="get" onreset="MK.removeAllFilters()">
    <div class="row">
        <div class="column">
            <label for="title">Title</label>
            <input id="title" name="title" placeholder="MdC (jmj-rA pr) or Unicode (jmj-rꜣ pr)" type="text" value="">
        </div>
        <div class="column">
            <label for="translation">Translation</label>
            <input id="translation" name="personal_name" placeholder="English translation" type="text" value="">
        </div>
    </div>

    <p>
        <span id="match-label">Return titles</span>
        <input type="radio" id="inexact" name="match" value="inexact" aria-labelledby="match-label" checked>
        <label for="inexact" title="Match any title containing the search term">
            containing
        </label>
        /
        <input type="radio" id="exact" name="match" value="exact" aria-labelledby="match-label">
        <label for="exact" title="Match any title equal to the search term ">
            equalling
        </label>
        /
        <input type="radio" id="startswith" name="match" value="startswith" aria-labelledby="match-label">
        <label for="startswith" title="Match any title beginning with the search term ">
            starting with
        </label>
        /
        <input type="radio" id="endswith" name="match" value="endswith" aria-labelledby="match-label">
        <label for="endswith" title="Match any title ending with the search term ">
            ending with
        </label>
        the search term.
    </p>

    <div class="filters">
        <h2 class="sr-only">Filters</h2>

        <div class="filters_selection">
            <button class="filters_button" aria-controls="region-filter" aria-expanded="false" onclick="MK.toggleFilter('region-filter')" title="Toggle region filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Region
            </button>
            <button class="filters_button" aria-controls="period-filter" aria-expanded="false" onclick="MK.toggleFilter('period-filter')" title="Toggle period filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Period
            </button>
            <button class="filters_button" aria-controls="gender-filter" aria-expanded="false" onclick="MK.toggleFilter('gender-filter')" title="Toggle gender filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Gender
            </button>
            <button class="filters_button" aria-controls="ward-filter" aria-expanded="false" onclick="MK.toggleFilter('ward-filter')" title="Toggle Ward/Fischer number filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Ward/Fischer number
            </button>
            <button class="filters_button" aria-controls="hannig-filter" aria-expanded="false" onclick="MK.toggleFilter('hannig-filter')" title="Toggle Hannig number filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Hannig number
            </button>
        </div>

        <div class="filter" id="region-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('region-filter')" title="Remove region filter" type="button">
                    <?=icon('minus', 'Remove region filter')?>
                </button>
                <span id="region-label">Region</span>
            </div>
            <div class="filter_content">
                <input id="region-characteristic" name="match-region" type="radio" value="region-characteristic" aria-labelledby="region-label" checked>
                <label for="region-characteristic" title="Match any title containing the search term">
                    Attested in
                </label>
                /
                <input id="region-attested" name="match-region" type="radio" value="region-attested" aria-labelledby="region-label">
                <label for="region-attested" title="Match any title equal to the search term">
                    characteristic of
                </label>
                the region
                <label for="place" class="sr-only">Region</label>
                <input id="place" list="places" name="place" placeholder="region or locality" title="Enter the region" type="text">
            </div>
        </div>

        <div class="filter" id="period-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('period-filter')" title="Remove period filter" type="button">
                    <?=icon('minus', 'Remove period filter')?>
                </button>
                <span id="period-label">Period</span>
            </div>
            <div class="filter_content">
                <input id="period-characteristic" name="match-date" type="radio" value="period-characteristic" aria-labelledby="period-label" checked>
                <label for="period-characteristic" title="Match any title containing the search term">
                    Attested in
                </label>
                /
                <input id="period-attested" name="match-date" type="radio" value="period-attested" aria-labelledby="period-label">
                <label for="period-attested" title="Match any title equal to the search term ">
                    only attested in
                </label>
                the period
                <label for="period" class="sr-only">Period</label>
                <input id="period" list="periods" name="period" placeholder="period or reign" title="Enter the period" type="text">
            </div>
        </div>

        <div class="filter" id="gender-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('gender-filter')" title="Remove gender filter" type="button">
                    <?=icon('minus', 'Remove gender filter')?>
                </button>
                <span id="gender-label">Gender</span>
            </div>
            <div class="filter_content">
                <?php // TODO: The first option can probably be removed ?>
                <input type="radio" id="any" name="gender" value="any" aria-labelledby="gender-label" checked>
                <label for="any" title="Match titles regardless of gender">
                    Regardless of gender
                </label>
                /
                <input type="radio" id="female" name="gender" value="female" aria-labelledby="gender-label">
                <label for="female" title="Match titles borne only by women">
                    female titles
                </label>
                /
                <input type="radio" id="male" name="gender" value="male" aria-labelledby="gender-label">
                <label for="male" title="Match titles borne only by men ">
                    male titles
                </label>
                /
                <input type="radio" id="both" name="gender" value="both" aria-labelledby="gender-label">
                <label for="both" title="Match titles borne by both men and women">
                    unisex titles
                </label>
            </div>
        </div>

        <div class="filter" id="ward-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('ward-filter')" title="Remove Ward/Fischer number filter" type="button">
                    <?=icon('minus', 'Remove Ward/Fischer number filter')?>
                </button>
                Ward/Fischer number
            </div>
            <div class="filter_content">
                <label for="ward" class="sr-only">Ward/Fischer number</label>
                <input id="ward" name="ward" placeholder="Example: 1346" title="Enter the entry number in Ward, Index of Egyptian Administrative and Religious Titles of the Middle Kingdom, or Fischer, Egyptian Titles of the Middle Kingdom. A Supplement to Wm. Ward's Index" type="text">
            </div>
        </div>

        <div class="filter" id="hannig-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('hannig-filter')" title="Remove Hannig number filter" type="button">
                    <?=icon('minus', 'Remove Hannig number filter')?>
                </button>
                Hannig number
            </div>
            <div class="filter_content">
                <label for="hannig" class="sr-only">Hannig number</label>
                <input id="hannig" name="hannig" placeholder="Example: 2044" title="Enter the entry number Hannig, Ägyptisches Wörterbuch II: Mittleres Reich und Zweite Zwischenzeit" type="text">
            </div>
        </div>
    </div>

    <button type="submit">
        Search
    </button>
    <button type="reset" title="Clear search and display all records">
        Reset
    </button>

    <?=datalist('periods')?>
    <?=datalist('places')?>
</form>

<h2 class="sr-only">Results</h2>

<p>Displaying titles 101&ndash;150 out of 150</p>

<?php require 'partials/pagination.php'; ?>

<div class="table-container">
    <table>
        <tr>
            <th class="-highlight">
                <a href="TODO" title="Sort by title, descending">Title <?=icon('arrow-up')?></a>
            </th>
            <th>
                <a href="TODO" title="Sort by gender, ascending">Gender</a>
            </th>
            <th>
                <a href="TODO" title="Sort by number of attestations, ascending">Atts.</a>
            </th>
            <th>
                <a href="TODO" title="Sort by period, ascending">Period</a>
            </th>
            <th>
                <a href="TODO" title="Sort by area, ascending">Area</a>
            </th>
            <th>
                <a href="TODO" title="Sort by Ward/Fischer number, ascending">Ward/Fischer</a>
            </th>
            <th>
                <a href="TODO" title="Sort by Hannig number, ascending">Hannig</a>
            </th>
            <th>
                <a href="TODO" title="Sort by translation, ascending">Translation</a>
            </th>
        </tr>
        <tr onclick="MK.open(event, './title/41943049')" onkeydown="MK.open(event, './title/41943049')" role="link" tabindex="0">
            <td class="-highlight tit">wꜥb</td>
            <td><span class="gender" title="male">m</span></td>
            <td class="no-att">227</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>639</td>
            <td>6969</td>
            <td>wab-priest</td>
        </tr>
        <tr onclick="MK.open(event, './title/41943051.html')" onkeydown="MK.open(event, './title/41943051.html')" role="link" tabindex="0">
            <td class="-highlight tit">wr ḫrp ḥmw.w</td>
            <td><span class="gender" title="male">m</span></td>
            <td class="no-att">15</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>729</td>
            <td>7829</td>
            <td>greatest of directors of craftsmen (Memphite high-priest of Ptah)</td>
        </tr>
        <tr onclick="MK.open(event, './title/41943048')" onkeydown="MK.open(event, './title/41943048')" role="link" tabindex="0">
            <td class="-highlight tit">ḫrp sšr.w stp-sꜣ</td>
            <td><span class="gender" title="male">m</span></td>
            <td class="no-att">1</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>director of linen of the palace </td>
        </tr>
        <tr onclick="MK.open(event, './title/41943045')" onkeydown="MK.open(event, './title/41943045')" role="link" tabindex="0">
            <td class="-highlight tit">sš n njw.t</td>
            <td><span class="gender" title="male">m</span></td>
            <td class="no-att">3</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>30148</td>
            <td>scribe of the town</td>
        </tr>
    </table>
</div>

<?php require 'partials/pagination.php'; ?>

<?php require 'partials/footer.php'; ?>
