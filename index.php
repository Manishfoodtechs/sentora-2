<?php

/**
 * @copyright 2020 Sentora2 (http://www.sentora2.com/) 
 * Sentora2 is a GPL fork of the Sentora Project found here:
 * https://github.com/sentora/sentora-core
 */
session_start();
require_once 'dryden/loader.inc.php';
require_once 'cnf/db.php';
debug_phperrors::SetMode('dev');
require_once 'inc/dbc.inc.php';
debug_phperrors::SetMode(ctrl_options::GetSystemOption('debug_mode'));
require_once 'inc/init.inc.php';
//This is where we check the session for hi-jacking
if(!runtime_sessionsecurity::antiSessionHijacking()){
    exit(header("location: ./?sessionIssue"));
}
?>
