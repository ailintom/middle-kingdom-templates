<?php $title = 'Personal Names'; ?>
<?php require 'partials/html-head.php'; ?>
<?php require 'partials/header.php'; ?>


<h1><?=$title?></h1>

<form action="names.php" method="get" onreset="MK.removeAllFilters()">
    <div class="row">
        <div class="column">
            <label for="personal_name">Personal name</label>
            <input id="personal_name" name="personal_name" placeholder="MdC (ra-Htp) or Unicode (rꜥ-ḥtp)" type="text" value="">
        </div>
        <div class="column">
            <label for="translation">Translation</label>
            <input id="translation" name="personal_name" placeholder="English translation" type="text" value="">
        </div>
    </div>
    <p>
        <span id="match-label">Return names</span>
        <input checked id="inexact" name="match" type="radio" value="inexact" aria-labelledby="match-label">
        <label for="inexact" title="Match any name containing the search term">
            containing
        </label>
        /
        <input id="exact" name="match" type="radio" value="exact" aria-labelledby="match-label">
        <label for="exact" title="Match any name equal to the search term">
            equalling
        </label>
        /
        <input id="startswith" name="match" type="radio" value="startswith" aria-labelledby="match-label">
        <label for="startswith" title="Match any name beginning with the search term">
            starting with
        </label>
        /
        <input id="endswith" name="match" type="radio" value="endswith" aria-labelledby="match-label">
        <label for="endswith" title="Match any name ending with the search term">
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
            <button class="filters_button" aria-controls="ranke-filter" aria-expanded="false" onclick="MK.toggleFilter('ranke-filter')" title="Toggle Ranke number filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Ranke number
            </button>
            <button class="filters_button" aria-controls="pattern-filter" aria-expanded="false" onclick="MK.toggleFilter('pattern-filter')" title="Toggle name pattern filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Name pattern
            </button>
            <button class="filters_button" aria-controls="class-filter" aria-expanded="false" onclick="MK.toggleFilter('class-filter')" title="Toggle name pattern filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Semantic class
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
                <input checked id="region-characteristic" name="match-region" type="radio" value="region-characteristic" aria-labelledby="region-label">
                <label for="region-characteristic" title="Match any name containing the search term">
                    Attested in
                </label>
                /
                <input id="region-attested" name="match-region" type="radio" value="region-attested" aria-labelledby="region-label">
                <label for="region-attested" title="Match any name equal to the search term">
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
                <input checked id="period-characteristic" name="match-date" type="radio" value="period-characteristic" aria-labelledby="period-label">
                <label for="period-characteristic" title="Match any name containing the search term">
                    Attested in
                </label>
                /
                <input id="period-attested" name="match-date" type="radio" value="period-attested" aria-labelledby="period-label">
                <label for="period-attested" title="Match any name equal to the search term">
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
                <input checked id="any" name="gender" type="radio" value="any" aria-labelledby="gender-label">
                <label for="any" title="Match names regardless of gender">
                    Regardless of gender
                </label>
                /
                <input id="female" name="gender" type="radio" value="female" aria-labelledby="gender-label">
                <label for="female" title="Match names borne only by women">
                    female names
                </label>
                /
                <input id="male" name="gender" type="radio" value="male" aria-labelledby="gender-label">
                <label for="male" title="Match names borne only by men">
                    male names
                </label>
                /
                <input id="both" name="gender" type="radio" value="both" aria-labelledby="gender-label">
                <label for="both" title="Match names borne by both men and women">
                    unisex names
                </label>
                /
                <input id="animal" name="gender" type="radio" value="animal" aria-labelledby="gender-label">
                <label for="animal" title="Match names given to animals">
                    animal names
                </label>
            </div>
        </div>

        <div class="filter" id="ranke-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('ranke-filter')" title="Remove Ranke number filter" type="button">
                    <?=icon('minus', 'Remove Ranke number filter')?>
                </button>
                Ranke number
            </div>
            <div class="filter_content">
                <label for="ranke" class="sr-only">Ranke number</label>
                <input id="ranke" name="ranke" placeholder="Example: I, 139.1" title="Enter the Ranke entry number" type="text">
            </div>
        </div>

        <div class="filter" id="pattern-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('pattern-filter')" title="Remove name pattern filter" type="button">
                    <?=icon('minus', 'Remove name pattern filter')?>
                </button>
                Name pattern
            </div>
            <div class="filter_content">
                <label for="name-type-formal" class="sr-only">Name pattern</label>
                <input id="name-type-formal" list="name-types-formal" name="name-type-formal" placeholder="Example: DN (m)+ḥtp.w" type="text">
            </div>
        </div>

        <div class="filter" id="class-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('class-filter')" title="Remove semantic class filter" type="button">
                    <?=icon('minus', 'Remove semantic class filter')?>
                </button>
                Semantic class
            </div>
            <div class="filter_content">
                <label for="name-type-semantic" class="sr-only">Semantic class</label>
                <input id="name-type-semantic" list="name-types-semantic" name="name-type-sematic" placeholder="Example: theophoric names" type="text">
            </div>
        </div>
    </div>

    <button type="submit">
        Search
    </button>
    <button type="reset" title="Clear search and display all records">
        Reset
    </button>

    <?=datalist('name-types-formal')?>
    <?=datalist('name-types-semantic')?>
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
                <a href="TODO" title="Sort by personal name, descending">Personal name
                    <?=icon('arrow-up')?>
                </a>
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
                <a href="TODO" title="Sort by Ranke, PN, ascending">Ranke, <i>PN</i></a>
            </th>
            <th>
                <a href="TODO" title="Sort by translation, ascending">Translation</a>
            </th>
        </tr>
        <tr onclick="MK.open(event, './name/142606600')" onkeydown="MK.open(event, './name/142606600')" role="link" tabindex="0">
            <td class="-highlight pn">jnpw-m-sꜣ⸗f</td>
            <td><span class="gender" title="male">m</span></td>
            <td class="no-att">1</td>
            <td>early 12th Dyn.</td>
            <td>&nbsp;</td>
            <td>I&nbsp;37.12</td>
            <td>Anubis is his protection</td>
        </tr>
        <tr onclick="MK.open(event, './name/142606570')" onkeydown="MK.open(event, './name/142606570')" role="link" tabindex="0">
            <td class="-highlight pn">jnpw-m-sꜣ⸗s</td>
            <td><span class="gender" title="female">f</span></td>
            <td class="no-att">2</td>
            <td>12th Dyn.</td>
            <td>&nbsp;</td>
            <td>I&nbsp;37.13</td>
            <td>Anubis is her protection</td>
        </tr>
        <tr onclick="MK.open(event, './name/142606605.html')" onkeydown="MK.open(event, './name/142606605.html')" role="link" tabindex="0">
            <td class="-highlight pn">ptḥ-wnn⸗f</td>
            <td><span class="gender">both</span></td>
            <td class="no-att">12</td>
            <td>early 12th–mid-13th Dyn.</td>
            <td title="Memphis-Faiyum Region">MFR</td>
            <td>I&nbsp;139.3–4</td>
            <td>Ptah exists</td>
        </tr>
    </table>
</div>

<?php require 'partials/pagination.php'; ?>

<?php require 'partials/footer.php'; ?>
