<?php

// CHARGEMENT DES LIBRAIRIES
include __DIR__.'/lib/debug.php';
include __DIR__.'/lib/format.php';
require_once('./config/config.php');

connect_db();

include './templates/index.phtml';
