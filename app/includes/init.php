<?php

session_set_cookie_params(null, COOKIE_PATH);
session_start();

require_once(__DIR__ . '/../core/App.php');
require_once(__DIR__ . '/../core/Middleware.php');
require_once(__DIR__ . '/../core/Controller.php');
require_once(__DIR__ . '/../core/Model.php');
require_once(__DIR__ . '/../core/View.php');
require_once(__DIR__ . '/../core/Database.php');
require_once(__DIR__ . '/../core/Language.php');