<?php
$svgSymbols = [];
function icon($name, $screenReaderText = '')
{
    global $svgSymbols;

    if (isset($svgSymbols[$name])) {
        return $svgSymbols[$name]['html'];
    }

    $svg = simplexml_load_file(__DIR__ . "/../assets/icons/$name.svg");

    $innerSVG = '';
    foreach ($svg->children() as $child) {
        $innerSVG .= $child->asXML();
    }

    $html = "<svg class='icon -$name' viewBox='{$svg->attributes()->viewBox}'>"
        . "<use xlink:href='#icon-$name'></use></svg>"
        . ($screenReaderText ? "<span class='sr-only'>$screenReaderText</span>" : "");

    $svgSymbols[$name] = [
        'symbol' => "<symbol id='icon-$name'>$innerSVG</symbol>",
        'html' => $html
    ];

    return $html;
}

function datalist($name)
{
    $items = file(__DIR__ . "/../assets/data/$name.txt");

    $html = "<datalist id='$name'>";
    foreach ($items as $item) {
        $html .= "<option>" . trim($item) . "</option>";
    }
    $html .= "</datalist>";

    return $html;
}
