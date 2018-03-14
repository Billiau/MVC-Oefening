<?php

//test.php
require_once("data/GenreDAO.php");

$dao = new GenreDAO();
$genre = $dao->getById(2);
print("<pre>");
print_r($genre);
print("</pre>");
