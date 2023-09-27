<?php
$text = "The quick brown fox jumps over the lazy dog.";

function manipulateString($inputText) {
    $lowercaseText = strtolower($inputText);
    $modifiedText = str_replace("brown", "red", $lowercaseText);
    echo $modifiedText . "\n";
}

manipulateString($text);

?>