<?php
require './classes/Preferences.php';

$pref = Preferences::getInstance();
$pref->setProperty( "name", "alan" );

unset( $pref ); // remove the reference

$pref2 = Preferences::getInstance();
print $pref2->getProperty( "name") . "\n"; //demonstrate the value is not lost