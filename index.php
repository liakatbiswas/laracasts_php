<?php
require 'functions.php';
require 'Database.php';

// require 'router.php';
// php -S localhost:8888

// Connect to the database, and execute a query
$db    = new Database();
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);