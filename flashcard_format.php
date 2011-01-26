<?php

function glossary_show_entry_flashcard($course, $cm, $glossary, $entry, $mode="", $hook="", $printicons=1, $aliases=true) {
    global $CFG, $USER, $PAGE;
    $PAGE->requires->js('/mod/glossary/formats/flashcard/javascript/jquery-1.4.4.min.js');
    $PAGE->requires->js('/mod/glossary/formats/flashcard/javascript/jquery.quickflip.js');
    $PAGE->requires->js('/mod/glossary/formats/flashcard/javascript/quickflip.js');
    echo '<div class="quickFlip">';
    echo '<div class="frontPanel">';
    glossary_print_entry_approval($cm, $entry, $mode);
    glossary_print_entry_attachment($entry, $cm, 'html', 'right');
    glossary_print_entry_concept($entry);
    echo '<p><a class="quickFlipCta">Click to see answer</a></p>';
    echo '</div><div class="backPanel">';
    glossary_print_entry_definition($entry, $glossary, $cm);
    glossary_print_entry_lower_section($course, $cm, $glossary, $entry, $mode, $hook, $printicons, $aliases);
    echo '<p><a class="quickFlipCta">Click to see question</a><p>';
    echo '</div>';
    echo "</div>\n";
}

function glossary_print_entry_flashcard($course, $cm, $glossary, $entry, $mode='', $hook='', $printicons=1) {

    //The print view for this format is exactly the normal view, so we use it

    //Take out autolinking in definitions un print view
    $entry->definition = '<span class="nolink">'.$entry->definition.'</span>';

    //Call to view function (without icons, ratings and aliases) and return its result
    return glossary_show_entry_flashcard($course, $cm, $glossary, $entry, $mode, $hook, false, false, false);

}