<?php $title = 'Inscribed Objects'; ?>
<?php require 'partials/html-head.php'; ?>
<?php require 'partials/header.php'; ?>

<h1><?=$title?></h1>

<form action="inscriptions.php" method="get" onreset="MK.removeAllFilters()">
    <div class="row">
        <div class="column">
            <label for="title" title="The title of the insciption used in the database">Title</label>
            <input name="title" id="title" value="" placeholder="Example: Adam, ASAE 56, 213" type="text">
        </div>
        <div class="column">
            <label for="collection">Collection</label>
            <input name="collection" id="collection" value="" placeholder="Example: Bruxelles" list="collections" type="text">
        </div>
    </div>

    <div class="row">
        <div class="column">
            <label for="text_content">Text</label>
            <select name="text_content" id="text_content">
                <option value="" selected>&nbsp;</option>
                <option value="private memorial/funerary inscription">private memorial/funerary inscription</option>
                <option value="royal inscription">royal inscription</option>
                <option value="letter">letter</option>
                <option value="account">account</option>
            </select>
        </div>
        <div class="column">
            <label for="script">Script</label>
            <select name="script" id="script">
                <option value="" selected>&nbsp;</option>
                <option value="hieroglyphic">hieroglyphic</option>
                <option value="hieratic">hieratic</option>
                <option value="mixed">mixed</option>
            </select>
        </div>
    </div>

    <div class="filters">
        <h3 class="sr-only">Filters</h3>

        <div class="filters_selection">
            <button class="filters_button" aria-controls="invno-filter" aria-expanded="false" onclick="MK.toggleFilter('invno-filter')" title="Toggle inventory number filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Inventory number
            </button>
            <button class="filters_button" aria-controls="type-filter" aria-expanded="false" onclick="MK.toggleFilter('type-filter')" title="Toggle object type filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Object type
            </button>
            <button class="filters_button" aria-controls="material-filter" aria-expanded="false" onclick="MK.toggleFilter('material-filter')" title="Toggle material filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Material
            </button>
            <button class="filters_button" aria-controls="size-filter" aria-expanded="false" onclick="MK.toggleFilter('size-filter')" title="Toggle size filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Size
            </button>
            <button class="filters_button" aria-controls="region-filter" aria-expanded="false" onclick="MK.toggleFilter('region-filter')" title="Toggle region filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Region
            </button>
            <button class="filters_button" aria-controls="period-filter" aria-expanded="false" onclick="MK.toggleFilter('period-filter')" title="Toggle period filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Period
            </button>
        </div>

        <div class="filter" id="invno-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('invno-filter')" title="Remove inventory number filter" type="button">
                    <?=icon('minus', 'Remove inventory number filter')?>
                </button>
                Inventory number
            </div>
            <div class="filter_content">
                <label for="inv_no" class="sr-only">Inventory number</label>
                <input name="inv_no" id="inv_no" value="" placeholder="Example: E.5265" type="text">
            </div>
        </div>

        <div class="filter" id="material-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('material-filter')" title="Remove material filter" type="button">
                    <?=icon('minus', 'Remove material filter')?>
                </button>
                Material
            </div>
            <div class="filter_content">
                <label for="material" class="sr-only">Material:</label>
                <input name="material" id="material" value="" placeholder="Example: Granite" list="materials" type="text">
            </div>
        </div>

        <div class="filter" id="type-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('type-filter')" title="Remove object type filter" type="button">
                    <?=icon('minus', 'Remove object type filter')?>
                </button>
                Object type
            </div>
            <div class="filter_content">
                <div class="filter_block">
                    <label for="object_type">Object type:</label>
                    <input name="object_type" id="object_type" value="" placeholder="Example: Stela" list="object-types" type="text">
                </div>
                <div class="filter_block">
                    <label for="object_subtype" title="Object subtype">Subtype:</label>
                    <input name="object_subtype" id="object_subtype" value="" placeholder="Example: Round-topped stela" list="object-subtypes" type="text">
                </div>
            </div>
        </div>

        <div class="filter" id="size-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('size-filter')" title="Remove size filter" type="button">
                    <?=icon('minus', 'Remove size filter')?>
                </button>
                <span id="size-label">Size</span>
            </div>
            <div class="filter_content">
                <input id="greater" name="length-option" value="greater" type="radio" checked aria-labelledby="size-label">
                <label for="greater">greater than or equal to</label>
                /
                <input id="less" name="length-option" value="less" type="radio" aria-labelledby="size-label">
                <label for="less">less than or equal to</label>
                <label for="size" class="sr-only">Size in mm</label>
                <input id="size" name="size" placeholder="size in mm" type="text">
            </div>
        </div>

        <div class="filter" id="region-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('region-filter')" title="Remove region filter" type="button">
                    <?=icon('minus', 'Remove region filter', 'Remove region filter')?>
                </button>
                <span id="region-label">Region or locality</span>
            </div>
            <div class="filter_content">
                <input checked id="provenance" name="geo-filter" type="radio" value="provenance" aria-labelledby="region-label">
                <label for="provenance" title="Attestations in sources found in the certain region">
                    Provenance
                </label>
                /
                <input id="installation-place" name="geo-filter" type="radio" value="installation-place" aria-labelledby="region-label">
                <label for="installation-place" title="Attestations on monuments installed in certain region">
                    installation place
                </label>
                /
                <input id="origin" name="geo-filter" type="radio" value="origin" aria-labelledby="region-label">
                <label for="origin" title="Attestations on monuments owned by people from a certain region">
                    origin
                </label>
                /
                <input id="production" name="geo-filter" type="radio" value="production" aria-labelledby="region-label">
                <label for="production" title="Attestations on monuments produced in a certain refino">
                    production
                </label>
                /
                <input id="all" name="geo-filter" type="radio" value="all" aria-labelledby="region-label">
                <label for="all" title="Attestations in sources anyhow related to a certain region">
                    all
                </label>
                in the region
                <label for="place" class="sr-only">Region</label>
                <input id="place" list="places" name="place" placeholder="region or locality" title="Enter the region" type="text">
            </div>
        </div>

        <div class="filter" id="period-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('period-filter')" title="Remove period filter" type="button">
                    <?=icon('minus', 'Remove period filter')?>
                </button>
                <span id="period-label">Period or reign</span>
            </div>
            <div class="filter_content">
                <input checked id="during" name="chrono-filter" type="radio" value="during" aria-labelledby="period-label">
                <label for="during" title="Attestations in sources beloging to a certain period">
                    During
                </label>
                /
                <input id="not-later" name="chrono-filter" type="radio" value="not-later" aria-labelledby="period-label">
                <label for="not-later" title="Attestations in sources dating not (demonstrably) later than">
                    not later than
                </label>
                /
                <input id="not-earlier" name="chrono-filter" type="radio" value="not-earlier" aria-labelledby="period-label">
                <label for="not-earlier" title="Attestations in sources dating not (demonstrably) earlier than">
                    not earlier than
                </label>
                the period
                <label for="period" class="sr-only">Period</label>
                <input id="period" list="periods" name="period" placeholder="period or reign" title="Enter the period" type="text">
            </div>
        </div>
    </div>

    <button type="submit">
        Search
    </button>
    <button type="reset" title="Clear search and display all records">
        Reset
    </button>

    <?=datalist('collections')?>
    <?=datalist('materials')?>
    <?=datalist('object-types')?>
    <?=datalist('object-subtypes')?>
    <?=datalist('periods')?>
    <?=datalist('places')?>
</form>

<h2 class="sr-only">Results</h2>

<p>Displaying titles 101&ndash;150 out of 150</p>

<?php require 'partials/pagination.php'; ?>

<div class="table-container">
    <table>
        <tr>
            <th>
                <a href="TODO" title="Sort by type, ascending">Type</a>
            </th>
            <th class="-highlight">
                <a href="TODO" title="Sort by object, descending">Object <?=icon('arrow-up')?></a>
            </th>
            <th>
                <a href="TODO" title="Sort by material, ascending">Material</a>
            </th>
            <th>
                <a href="TODO" title="Sort by size (largest dimension in mm), ascending">Size</a>
            </th>
            <th>
                <a href="TODO" title="Sort by text, ascending">Text</a>
            </th>
            <th>
                <a href="TODO" title="Sort by Date, ascending">Date</a>
            </th>
            <th>
                <a href="TODO" title="Sort by provenance and/or installation place, ascending">Provenance</a>
            </th>
            <th>
                <a href="TODO" title="Sort by origin of the owners and/or production place, ascending">Origin/Prod. place</a>
            </th>
            <th>
                <a href="TODO" title="Sort by owner, ascending">Owner</a>
            </th>
        </tr>
        <tr onclick="MK.open(event, './inscription/33555427.html')" onkeydown="MK.open(event, './inscription/33555427.html')" role="link" tabindex="0">
            <td>Stela</td>
            <td class="-highlight">Cairo CG 20102</td>
            <td>Granite</td>
            <td>860</td>
            <td>private</td>
            <td>13th Dyn.</td>
            <td>Abydos</td>
            <td>Thebes (origin)</td>
            <td class="tit">jr.j-pꜥ.t; ḥꜣ.tj-ꜥ; jm.j-rꜣ nj.wt; ṯꜣ.tj <span class="pn">sꜣ-mnṯ.w</span></td>
        </tr>
        <tr onclick="MK.open(event, './inscription/33554965')" onkeydown="MK.open(event, './inscription/33554965')" role="link" tabindex="0">
            <td>Stela</td>
            <td class="-highlight">Cairo CG 20733</td>
            <td>Limestone</td>
            <td>490</td>
            <td>private</td>
            <td>Senusret III</td>
            <td>Abydos</td>
            <td>Thebes (origin)</td>
            <td class="tit">jr.j-pꜥ.t; ḥꜣ.tj-ꜥ; wḥm.w <span class="pn">mnṯw-ꜥꜣ.w</span></td>
        </tr>
        <tr onclick="MK.open(event, './inscription/33562880')" onkeydown="MK.open(event, './inscription/33562880')" role="link" tabindex="0">
            <td>Scarab</td>
            <td class="-highlight">Martin 557</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>private</td>
            <td>13th Dyn.</td>
            <td>&nbsp;</td>
            <td title="Southern Upper Egypt">SUE</td>
            <td class="tit">ḫtm.w-bj.tj; ḫrp wsḫ.t; wḥm.w <span class="pn">mn.w-ḥtp.w</span></td>
        </tr>
        <tr onclick="MK.open(event, './inscription/33560825')" onkeydown="MK.open(event, './inscription/33560825')" role="link" tabindex="0">
            <td>Stela</td>
            <td class="-highlight">Sotheby's London, 12.07.1971, no. 30</td>
            <td>Limestone</td>
            <td>610</td>
            <td>private</td>
            <td>early 12th Dyn.</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="pn">[...]n.j</td>
        </tr>
    </table>
</div>

<?php require 'partials/pagination.php'; ?>

<?php require 'partials/footer.php'; ?>
