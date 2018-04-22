<?php $title = 'Places'; ?>
<?php require 'partials/html-head.php'; ?>
<?php require 'partials/header.php'; ?>

<h1><?=$title?></h1>

<form action="places.php" method="get" onreset="MK.removeAllFilters()">
    <div class="row">
        <div class="column">
            <label for="place">Place name</label>
            <input id="place" name="place" list="places" title="Enter the region" placeholder="Region or locality" type="text">
        </div>
        <div class="column">
            <label for="macroregion">Macroregion</label>
            <select id="macroregion" name="macroregion">
                <option value="" selected>&nbsp;</option>
                <option value="Eastern Desert">Eastern Desert</option>
                <option value="Levant">Levant</option>
                <option value="Lower Egypt">Lower Egypt</option>
                <option value="Memphis-Faiyum Region">Memphis-Faiyum Region</option>
                <option value="Northern Upper Egypt">Northern Upper Egypt</option>
                <option value="Nubian Nile Valley">Nubian Nile Valley</option>
                <option value="Southern Nile Valley">Southern Upper Egypt</option>
                <option value="Western Desert">Western Desert</option>
            </select>
        </div>
    </div>

    <div class="filters">
        <h2 class="sr-only">Filters</h2>

        <div class="filters_selection">
            <button class="filters_button" aria-controls="northof-filter" aria-expanded="false" onclick="MK.toggleFilter('northof-filter')" title="Toggle 'north of' filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Places north of
            </button>
            <button class="filters_button" aria-controls="southof-filter" aria-expanded="false" onclick="MK.toggleFilter('southof-filter')" title="Toggle 'south of' filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Places south of
            </button>
            <button class="filters_button" aria-controls="near-filter" aria-expanded="false" onclick="MK.toggleFilter('near-filter')" title="Toggle 'near' filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Places near
            </button>
            <button class="filters_button" aria-controls="tm_geoid-filter" aria-expanded="false" onclick="MK.toggleFilter('tm_geoid-filter')" title="Toggle Trismegistos GEO ID filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Trismegistos GEO ID
            </button>
            <button class="filters_button" aria-controls="topbib_id-filter" aria-expanded="false" onclick="MK.toggleFilter('topbib_id-filter')" title="Toggle TopBib ID filter" type="button">
                <?=icon('plus') . icon('minus')?>
                TopBib ID
            </button>
        </div>

        <div class="filter" id="northof-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('northof-filter')" title="Remove 'north of' filter" type="button">
                    <?=icon('minus', 'Remove "north of" filter')?>
                </button>
                Places north of
            </div>
            <div class="filter_content">
                <label for="northof" class="sr-only">Places north of</label>
                <input id="northof" list="places" name="northof" placeholder="Region or locality" type="text">
            </div>
        </div>

        <div class="filter" id="southof-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('southof-filter')" title="Remove 'south of' filter" type="button">
                    <?=icon('minus', 'Remove "south of" filter')?>
                </button>
                Places south of
            </div>
            <div class="filter_content">
                <label for="southof" class="sr-only">Places south of</label>
                <input id="southof" list="places" name="southof" placeholder="Region or locality" type="text">
            </div>
        </div>

        <div class="filter" id="near-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('near-filter')" title="Remove 'near' filter" type="button">
                    <?=icon('minus', 'Remove "near" filter')?>
                </button>
                Places near
            </div>
            <div class="filter_content">
                <label for="near" class="sr-only">Places near</label>
                <input id="near" list="places" name="near" placeholder="Region or locality" type="text">
            </div>
        </div>

        <div class="filter" id="tm_geoid-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('tm_geoid-filter')" title="Remove Trismegistos GEO ID filter" type="button">
                    <?=icon('minus', 'Remove Trismegistos GEO ID filter')?>
                </button>
                Trismegistos GEO ID
            </div>
            <div class="filter_content">
                <label for="tm_geoid" class="sr-only">Trismegistos GEO ID</label>
                <input id="tm_geoid" name="northof" placeholder="Example: 188" type="text">
            </div>
        </div>

        <div class="filter" id="topbib_id-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('topbib_id-filter')" title="Remove TopBib ID filter" type="button">
                    <?=icon('minus', 'Remove TopBib ID filter')?>
                </button>
                TopBib ID
            </div>
            <div class="filter_content">
                <label for="topbib_id" class="sr-only">Places north of</label>
                <input id="topbib_id" name="topbib_id" placeholder="Example: 501-180" type="text">
            </div>
        </div>
    </div>

    <button type="submit">
        Search
    </button>
    <button type="reset" title="Clear search and display all records">
        Reset
    </button>

    <?=datalist('places')?>
</form>

<h2 class="sr-only">Results</h2>

<p>Displaying titles 101&ndash;150 out of 150</p>

<?php require 'partials/pagination.php'; ?>

<div class="table-container">
    <table>
        <tr>
            <th class="-highlight"><a href="TODO" title="Sort by place name, ascending">Place name <?=icon('arrow-up')?></a>
            </th>
            <th>
                <a href="TODO" title="Sort by macroregion, ascending">Macroregion</a>
            </th>
            <th>
                <a href="TODO" title="Sort by latitute, ascending">Latitute</a>
            </th>
        </tr>
        <tr onclick="MK.open(event, './place/184549377.html')" onkeydown="MK.open(event, './place/184549377.html')" role="link" tabindex="0">
            <td class="-highlight">Abydos</td>
            <td>Southern Upper Egypt</td>
            <td>26.11° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549497')" onkeydown="MK.open(event, './place/184549497')" role="link" tabindex="0">
            <td class="-highlight">Akasha</td>
            <td>Nubian Nile Valley</td>
            <td>21.05° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549497.html')" onkeydown="MK.open(event, './place/184549497.html')" role="link" tabindex="0">
            <td class="-highlight">Byblos</td>
            <td>Levant</td>
            <td>34.07° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549524.html')" onkeydown="MK.open(event, './place/184549524.html')" role="link" tabindex="0">
            <td class="-highlight">Dakhla</td>
            <td>Western Desert</td>
            <td>25.29° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549382.html')" onkeydown="MK.open(event, './place/184549382.html')" role="link" tabindex="0">
            <td class="-highlight">Edfu</td>
            <td>Southern Upper Egypt</td>
            <td>24.58° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549444.html')" onkeydown="MK.open(event, './place/184549444.html')" role="link" tabindex="0">
            <td class="-highlight">Giza</td>
            <td>Memphis-Faiyum Region</td>
            <td>30.01° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549497')" onkeydown="MK.open(event, './place/184549497')" role="link" tabindex="0">
            <td class="-highlight">Khozam</td>
            <td>Southern Upper Egypt</td>
            <td>25.78° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549404')" onkeydown="MK.open(event, './place/184549404')" role="link" tabindex="0">
            <td class="-highlight">Meir</td>
            <td>Northern Upper Egypt</td>
            <td>27.27° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549470')" onkeydown="MK.open(event, './place/184549470')" role="link" tabindex="0">
            <td class="-highlight">Ramesseum</td>
            <td>Southern Upper Egypt</td>
            <td>25.42° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549497')" onkeydown="MK.open(event, './place/184549497')" role="link" tabindex="0">
            <td class="-highlight">Mersa Gawasis</td>
            <td>Eastern Desert</td>
            <td>23.66° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549405')" onkeydown="MK.open(event, './place/184549405')" role="link" tabindex="0">
            <td class="-highlight">Mendes</td>
            <td>Southern Upper Egypt</td>
            <td>30.57° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549497')" onkeydown="MK.open(event, './place/184549497')" role="link" tabindex="0">
            <td class="-highlight">Shibin El Qanatir</td>
            <td>Lower Egypt</td>
            <td>30.18° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549536')" onkeydown="MK.open(event, './place/184549536')" role="link" tabindex="0">
            <td class="-highlight">Tell el-Farah (North)</td>
            <td>Levant</td>
            <td>32.17° N</td>
        </tr>
        <tr onclick="MK.open(event, './place/184549497')" onkeydown="MK.open(event, './place/184549497')" role="link" tabindex="0">
            <td class="-highlight">Zagazig</td>
            <td>Lower Egypt</td>
            <td>30.34° N</td>
        </tr>
    </table>
</div>

<?php require 'partials/pagination.php'; ?>

<?php require 'partials/footer.php'; ?>
