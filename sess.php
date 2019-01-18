<?php

//用來測試log-in session
session_start();
header('Content-Type: text/plain');

print_r($_SESSION);