<?php
$config = include '../config.php';
include 'QueryBuilder.php';

return new QueryBuilder($config['database']);