<?php $title = 'wr ḫrp ḥmw.w'; ?>
<?php $stableUrl = 'TODO'; ?>
<?php require 'partials/html-head.php'; ?>
<?php require 'partials/header.php'; ?>

<a class="main_parent-link" href="titles.php">Back to title search</a>

<h1><?=$title?></h1>

<p>
    <span class="translation" lang="en">“greatest of directors of craftsmen (Memphite high-priest of Ptah)”</span>, <span class="translation" lang="de">“Oberster Handwerker (Hohepriester des Ptah von Memphis)”</span> (<span class="biblio-ref-no-author-date">Ward/Fischer, 729</span>)
</p>

<dl>
    <dt>Usage area:</dt>
    <dd><span class="place"><a href="./place/184549412" title="Memphis-Faiyum Region">MFR</a></span></dd>
    <dt>Usage period:</dt>
    <dd><span class="period">Middle Kingdom</span></dd>
    <dt>Gender:</dt>
    <dd><span class="gender" title="male">m</span></dd>
    <dt>Bibliography:</dt>
    <dd><span class="biblio-ref"><a href="./bibliography.html#16787528">Maystre 1992</a></span>; <span class="biblio-ref"><a href="./bibliography.html#16787065">Quirke 2004</a>, 129</span></dd>
    <dt>References:</dt>
    <dd><span class="title-attribute-second-order">TLA:</span> <span class="biblio-ref-no-author-date"><a href="http://aaew.bbaw.de/tla/servlet/GetWcnDetails?f=0&amp;l=0&amp;db=0&amp;wn=47660">47660</a></span>. <span class="title-attribute-second-order">Hannig:</span> <span class="biblio-ref-no-author-date">7829</span></dd>
    <dt>Note:</dt>
    <dd><span class="note">Variants: <span class="title"><a href="./title/41943089">wr ḫrp ḥmw.w nṯr⸗f</a></span></span></dd>
</dl>

<h2>Attestations</h2>

<form action="title.php" method="get" onreset="MK.removeAllFilters()">
    <h3 class="sr-only">Filters</h3>

    <p>
        <span id="region-label">Geographic filter:</span>
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
    </p>

    <p>
        <span id="period-label">Chronological filter:</span>
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
    </p>

    <button type="submit">
        Filter
    </button>
    <button type="reset" title="Clear filters">
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
                <a href="TODO" title="Sort by name, descending">Name <?=icon('arrow-up')?></a>
            </th>
            <th>
                <a href="TODO" title="Sort by gender, ascending">Gender</a>
            </th>
            <th title="Full title string">
                <a href="TODO" title="Sort by titles, ascending">Titles</a>
            </th>
            <th>
                <a href="TODO" title="Sort by source, ascending">Source</a>
            </th>
            <th>
                <a href="TODO" title="Sort by date, ascending">Date</a>
            </th>
            <th>
                <a href="TODO" title="Sort by religion, ascending">Region</a>
            </th>
            <th>
                <a href="TODO" title="Sort by person, ascending">Person</a>
            </th>
        </tr>
        <tr onclick="MK.open(event, './attestation/67113149')" onkeydown="MK.open(event, './attestation/67113149')" role="link" tabindex="0">
            <td class="-highlight pn">jmp.j</td>
            <td><span class="gender" title="male">m</span></td>
            <td class="tit">jr.j-pꜥ.t; ḥꜣ.tj-ꜥ; sm; wr ḫrp ḥmw.w</td>
            <td>Statue Louvre E.17365</td>
            <td>Late MK–SIP</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr onclick="MK.open(event, './attestation/41943049')" onkeydown="MK.open(event, './attestation/41943049')" role="link" tabindex="0">
            <td class="-highlight pn">ptḥ-wnn⸗f</td>
            <td><span class="gender" title="male">m</span></td>
            <td class="tit">ḥr.j-sštꜣ m pr-nswt; wr ḫrp ḥmw.w</td>
            <td>Coffin L12X (Allen, The World of the Coffin Texts, 4 [PW1A])</td>
            <td>mid- to late 12th Dyn.</td>
            <td>Lisht (provenance)</td>
            <td><span class="person">ptḥ-wnn⸗f&nbsp;#2</span></td>
        </tr>
        <tr onclick="MK.open(event, './attestation/67113149')" onkeydown="MK.open(event, './attestation/67113149')" role="link" tabindex="0">
            <td class="-highlight pn">sḥtp-jb-rꜥ-ꜥnḫ-nḏm </td>
            <td><span class="gender" title="male">m</span></td>
            <td class="tit">ḫtmw-bjtj; wr ḫrp ḥmw.w</td>
            <td>Table Berlin 1189</td>
            <td>late 12th Dyn.</td>
            <td>&nbsp;</td>
            <td><span class="person">ḥtp-jb-rꜥ-ꜥnḫ-nḏm&nbsp;#1</span></td>
        </tr>
    </table>
</div>

<?php require 'partials/pagination.php'; ?>

<?php require 'partials/footer.php'; ?>
