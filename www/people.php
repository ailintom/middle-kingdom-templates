<?php $title = 'People'; ?>
<?php require 'partials/html-head.php'; ?>
<?php require 'partials/header.php'; ?>

<h1><?=$title?></h1>

<p class="info-box">
    <?=icon('info')?>
    You can use <b>%</b> or <b>*</b> as wildcards.
    “nfr*” will match “nfr.wj” or “nfr-ḥtp”. “*nfr*” will also match “snfr.wj”.
</p>

<form action="people.php" method="get" onreset="MK.removeAllFilters()">
    <div class="row -border">
        <div class="column">
            <h2>Person A</h2>
            <div class="row -small">
                <div class="column">
                    <label id="gender-label-a">Gender:</label>
                </div>
                <div class="column -wide">
                    <input id="Aany" name="Agender" value="any" checked type="radio" aria-labelledby="gender-label-a">
                    <label for="Aany" title="Match names regardless of gender">any</label>
                    /
                    <input id="Afemale" name="Agender" value="female" type="radio" aria-labelledby="gender-label-a">
                    <label for="Afemale" title="Match names borne only by women">female</label>
                    /
                    <input id="Amale" name="Agender" value="male" type="radio" aria-labelledby="gender-label-a">
                    <label for="Amale" title="Match names borne only by men">male</label>
                </div>
            </div>
            <div class="row -small">
                <div class="column">
                    <label for="Atitle">Title:</label>
                </div>
                <div class="column -wide">
                    <input name="Atitle" id="Atitle" value="" placeholder="MdC (jmj-rA pr) or Unicode (jmj-rꜣ pr)" type="text">
                </div>
            </div>
            <div class="row -small">
                <div class="column">
                    <label for="personal_nameA">Name:</label>
                </div>
                <div class="column -wide">
                    <input name="personal_nameA" id="personal_nameA" value="" placeholder="MdC (ra-Htp) or Unicode (rꜥ-ḥtp)" type="text">
                </div>
            </div>
            <div class="row -small">
                <div class="column">
                    <label for="Aname-type-formal">Name pattern:</label>
                </div>
                <div class="column -wide">
                    <input id="Aname-type-formal" name="Aname-type-formal" title="" placeholder="Example: DN (m)+ḥtp.w" list="name-types-formal" type="text">
                </div>
            </div>
            <div class="row -small">
                <div class="column">
                    <label for="Aname-type-sematic">Semantic class:</label>
                </div>
                <div class="column -wide">
                    <input id="Aname-type-sematic" name="Aname-type-sematic" title="" placeholder="Example: theophoric names" list="name-types-semantic" type="text">
                </div>
            </div>
        </div>
        <div class="column -border">
            <h2>Person B</h2>
            <div class="row -small">
                <div class="column">
                    <label id="gender-label-b">Gender:</label>
                </div>
                <div class="column -wide">
                    <input id="Bany" name="Bgender" value="any" checked type="radio" aria-labelledby="gender-label-b">
                    <label for="Bany" title="Match names regardless of gender">any</label>
                    /
                    <input id="Bfemale" name="Bgender" value="female" type="radio" aria-labelledby="gender-label-b">
                    <label for="Bfemale" title="Match names borne only by women">female</label>
                    /
                    <input id="Bmale" name="Bgender" value="male" type="radio" aria-labelledby="gender-label-b">
                    <label for="Bmale" title="Match names borne only by men">male</label>
                </div>
            </div>
            <div class="row -small">
                <div class="column">
                    <label for="Btitle">Title:</label>
                </div>
                <div class="column -wide">
                    <input name="Btitle" id="Btitle" value="" placeholder="MdC (jmj-rB pr) or Unicode (jmj-rꜣ pr)" type="text">
                </div>
            </div>
            <div class="row -small">
                <div class="column">
                    <label for="personal_nameB">Name:</label>
                </div>
                <div class="column -wide">
                    <input name="personal_nameB" id="personal_nameB" value="" placeholder="MdC (ra-Htp) or Unicode (rꜥ-ḥtp)" type="text">
                </div>
            </div>
            <div class="row -small">
                <div class="column">
                    <label for="Bname-type-formal">Name pattern:</label>
                </div>
                <div class="column -wide">
                    <input id="Bname-type-formal" name="Bname-type-formal" title="" placeholder="Example: DN (m)+ḥtp.w" list="name-types-formal" type="text">
                </div>
            </div>
            <div class="row -small">
                <div class="column">
                    <label for="Bname-type-sematic">Semantic class:</label>
                </div>
                <div class="column -wide">
                    <input id="Bname-type-sematic" name="Bname-type-sematic" title="" placeholder="Example: theophoric names" list="name-types-semantic" type="text">
                </div>
            </div>
        </div>
    </div>

    <p>
        <label for="relation">Relation between A and B:</label>
        <select name="relation" id="relation">
            <option value="same_inscription" selected>A and B appear in the same source</option>
            <option value="child">A is a child of B</option>
            <option value="parent">A is a parent of B</option>
            <option value="spouses">A and B are spouses</option>
            <option value="siblings">A and B are siblings</option>
        </select>
    </p>

    <p>
        <input id="only_persons" name="only_persons" value="true" type="checkbox">
        <label for="only_persons" title="Only show dossiers of persons with multiple attestations">Only dossiers of persons with multiple attestations</label>
    </p>

    <div class="filters">
        <h3 class="sr-only">Filters</h3>

        <div class="filters_selection">
            <button class="filters_button" aria-controls="region-filter" aria-expanded="false" onclick="MK.toggleFilter('region-filter')" title="Toggle region filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Region or locality
            </button>
            <button class="filters_button" aria-controls="period-filter" aria-expanded="false" onclick="MK.toggleFilter('period-filter')" title="Toggle period filter" type="button">
                <?=icon('plus') . icon('minus')?>
                Period or reign
            </button>
        </div>

        <div class="filter" id="region-filter">
            <div class="filter_label">
                <button class="filter_remove" onclick="MK.toggleFilter('region-filter')" title="Remove region filter" type="button">
                    <?=icon('minus', 'Remove region filter')?>
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
        <tr class="-no-border">
            <th colspan="3">Person A</th>
            <th class="-border" colspan="3">Person B</th>
            <th class="-border" colspan="3">Common</th>
        </tr>
        <tr>
            <th class="-highlight">
                <a href="TODO" title="Sort by gender of person A, descending">Gender <?=icon('arrow-up')?></a>
            </th>
            <th>
                <a href="TODO" title="Sort by title of person A, ascending">Title</a>
            </th>
            <th title="Full title string">
                <a href="TODO" title="Sort by name of person A, ascending">Name</a>
            </th>
            <th class="-border">
                <a href="TODO" title="Sort by gender of person B, ascending">Gender</a>
            </th>
            <th>
                <a href="TODO" title="Sort by title of person B, ascending">Title</a>
            </th>
            <th>
                <a href="TODO" title="Sort by name of person B, ascending">Name</a>
            </th>
            <th class="-border">
                <a href="TODO" title="Sort by source or dossier, ascending">Source or dossier</a>
            </th>
            <th>
                <a href="TODO" title="Sort by date, ascending">Date</a>
            </th>
            <th>
                <a href="TODO" title="Sort by region, ascending">Region</a>
            </th>
        </tr>
        <tr onclick="MK.open(event, './attestation/67131355.html')" onkeydown="MK.open(event, './attestation/67131355.html')" role="link" tabindex="0">
            <td class="-highlight person-A"><span class="gender" title="male">m</span></td>
            <td class="tit person-A">ꜥḥꜥ.w</td>
            <td class="pn person-A">rn(⸗j)-snb.w</td>
            <td class="-border person-B"><span class="gender" title="female">f</span></td>
            <td class="tit person-B">nb.t pr</td>
            <td class="pn person-B">ḥn.wt</td>
            <td class="-border">Stela München Gl. WAF 34</td>
            <td>13th Dyn.</td>
            <td>MFR (origin)</td>
        </tr>
        <tr onclick="MK.open(event, './person/67112920')" onkeydown="MK.open(event, './person/67112920')" role="link" tabindex="0">
            <td class="-highlight person-A"><span class="gender" title="male">m</span></td>
            <td class="tit person-A">ḫtm.w-bj.tj; jm.j-rꜣ gs-pr</td>
            <td class="pn person-A">rn(⸗j)-snb.w</td>
            <td class="-border person-B"><span class="gender" title="female">f</span></td>
            <td class="tit person-B">&nbsp;</td>
            <td class="pn person-B">ḥn.wt</td>
            <td class="-border">Dossier <span class="person">rn(⸗j)-snb.w&nbsp;#7</span> (3 sources)</td>
            <td>13th Dyn.</td>
            <td>&nbsp;</td>
        </tr>
        <tr onclick="MK.open(event, './person/67131976.html')" onkeydown="MK.open(event, './person/67131976.html')" role="link" tabindex="0">
            <td class="-highlight person-A"><span class="gender" title="male">m</span></td>
            <td class="tit person-A">jm.j-rꜣ pr; sš</td>
            <td class="pn person-A">rn(⸗j)-snb.w</td>
            <td class="-border person-B"><span class="gender" title="female">f</span></td>
            <td class="tit person-B">&nbsp;</td>
            <td class="pn person-B">ḥn.wt</td>
            <td class="-border">Dossier <span class="person">rn(⸗j)-snb.w&nbsp;#12</span> (2 sources)</td>
            <td>13th Dyn.</td>
            <td>Thebes</td>
        </tr>
        <tr onclick="MK.open(event, './attestation/33554888')" onkeydown="MK.open(event, './attestation/33554888')" role="link" tabindex="0">
            <td class="-highlight person-A"><span class="gender" title="male">m</span></td>
            <td class="tit person-A">jm.j-rꜣ pr</td>
            <td class="pn person-A">rn(⸗j)-snb.w-wr</td>
            <td class="-border person-B"><span class="gender" title="female">f</span></td>
            <td class="tit person-B">&nbsp;</td>
            <td class="pn person-B">ḥn.wt</td>
            <td class="-border">Stela Fitzwilliam E.59.1926</td>
            <td>13th Dyn.</td>
            <td>Thebes (origin)</td>
        </tr>
    </table>
</div>

<?php require 'partials/pagination.php'; ?>

<?php require 'partials/footer.php'; ?>
