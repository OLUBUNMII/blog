<?php
require 'config/constants.php';

//destroy sessions
session_destroy();
header('location: ' . ROOT_URL);
die();