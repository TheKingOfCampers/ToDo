<?php

// CHARGEMENT DES LIBRAIRIES
include __DIR__.'/lib/debug.php';
include __DIR__.'/lib/format.php';
require_once  __DIR__.'/config/config.php';
require_once  __DIR__.'/controleur/addTask.php';


$task = addfirstTask();



include './templates/addTask.phtml';