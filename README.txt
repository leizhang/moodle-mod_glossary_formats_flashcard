GLOSSARY FORMAT FLASHCARD STYLE
-----------------------
Version 0.1

To install this new glossary format:

1.Unzip the flashcard zip file, drop the folder to mod/glossary/formats/ and rename it to flashcard.

2.Modify style.css file under mod/glossary/, add the following css style sheets.

/** Flashcard styles **/
.quickFlip{height:216px;width:322px}
.backPanel,.frontPanel{text-align:center}
.quickFlip .frontPanel,.quickFlip .backPanel{background:#F7F7F7;-moz-border-radius:8px;-webkit-border-radius:8px}
.quickFlip .frontPanel{border:1px outset #ddd}
.quickFlip .backPanel{border:1px outset #ddd}
.frontPanel .nolink {padding-top:40px;}
.backPanel .nolink {padding-top:40px;}

3. Add the following line to your lang file under mod/glossary/lang/en/ folder
$string['displayformatflashcard'] = "Flashcard style";

4. In site administration setting, purge all caches under development to load your new stylesheet.

5. Create your first new glossary format in flashcard format.

For any question about Glossary format, go to:
    http://moodle.org/mod/forum/discuss.php?d=163353

Lei Zhang
