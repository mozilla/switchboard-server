<?php
/* This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/. */

ini_set("display_errors", 1);

require_once("SwitchboardConfig.php");
require_once("SwitchboardManager.php");

$manager = new SwitchboardManager($_GET);

// Result experiment array
$resultArray = array();

// Setup the experiments for onboarding tests
// https://mana.mozilla.org/wiki/display/FIREFOX/Fennec+First+Run
$resultArray["onboarding-a"] = $manager->turnOnBucket(0, 50);
$resultArray["onboarding-b"] = $manager->turnOnBucket(50, 100);

// Return result array as JSON
$manager->renderResultJson($resultArray);
?>
