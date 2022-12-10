<?php
require 'functions.php';
require 'Database.php';

// require 'router.php';
// php -S localhost:8888

// Connect to the database, and execute a query

$db    = new Database();
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

/**
 * Laracasts
 * connection to our MySQL database.
 * $dbh = new PDO('mysql:host=localhost;dbname=my_db;charset=utf8mb4;user=root;password=')
 */

// foreach ($posts as $post) {
//  echo "<li>" . $post['title'] . "</li>";
// }