<?php
$strConnection = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
if (!$strConnection)
  die('Cant connection');
mysqli_set_charset($strConnection, 'utf8');