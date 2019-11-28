<?php

/* File, where the random text/quotes are stored one per line */
$settings['text_from_file'] = '';

/*
   If you prefer you can list quotes that RanTex will choose from here.
   In this case set above variable to $settings['text_from_file'] = '';
*/
$settings['quotes'] = array(
'<b>"These guys are truly amazing.  Darragh, Sean and Gus are rock stars in more ways than one! If you are moving you MUST call them." <br><br>&nbsp;&nbsp;&nbsp;<a href="http://www.yelp.com/biz/gaelic-moving-san-francisco#hrid:lhDrlGPMmN16du-MWH9WOA">~Valentina C, Yelp</a></b>',
'<b>"Look no further than Gaelic Moving -- This is a terrific moving company. Professional, punctual, fast, pleasant and very reasonably priced." <br><br> &nbsp;&nbsp;&nbsp;<a href="http://www.yelp.com/biz/gaelic-moving-san-francisco#hrid:qA4_AIJq9NyN2umxsrRv-Q">~Audry L, Yelp</a></b>',
'<b>"Third move in the last 18 months with these guys (yeah, I know, I move a lot.)  As with the prior two moves, no complaints whatsoever." <br><br> &nbsp;&nbsp;&nbsp;<a href="http://www.yelp.com/biz/gaelic-moving-san-francisco#hrid:B4JX6pxwdJnnPrYroH2ALQ">~Michael H, Yelp</a></b>',
);

/*
   How to display the text?
   0 = raw mode: print the text as it is, when using RanTex as an include
   1 = Javascript mode: when using Javascript to display the quote
*/
$settings['display_type'] = 1;

/* Allow on-the-fly settings override? 0 = NO, 1 = YES */
$settings['allow_otf'] = 1;

/*******************************************************************************
*  DO NOT EDIT BELOW...
*
*  ...or at least make a backup before you do!
*******************************************************************************/

/* Override type? */
if ($settings['allow_otf'] && isset($_GET['type']))
{
	$type = intval($_GET['type']);
}
else
{
	$type = $settings['display_type'];
}

/* Get a list of all text options */
if ($settings['text_from_file'])
{
	$settings['quotes'] = file($settings['text_from_file']);
}

/* If we have any text choose a random one, otherwise show 'No text to choose from' */
if (count($settings['quotes']))
{
	$txt = $settings['quotes'][array_rand($settings['quotes'])];
}
else
{
	$txr = 'No text to choose from';
}

/* Output the image according to the selected type */
if ($type)
{
    /* New lines will break Javascript, remove any and replace them with <br /> */
    $txt = nl2br(trim($txt));
    $txt = str_replace(array("\n","\r"),'',$txt);
	echo 'document.write(\''.addslashes($txt).'\')';
}
else
{
	echo $txt;
}
?>
