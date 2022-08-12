<?php

$json = file_get_contents('data/pages/layout-garden.json');

$pageData = json_decode($json, true);

$sections = $pageData['sections'];

?> 