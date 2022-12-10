<?php
/**
 * Connect to the database
 * And execute a query
 */

class Database
{
 public $conn;

 public function __construct($config, $user_name = 'root', $user_password = '')
 {
  $dsn        = 'mysql:' . http_build_query($config, '', ';');
  $this->conn = new PDO($dsn, $user_name, $user_password, [
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);
 }

 public function query($query)
 {
  $stmt = $this->conn->prepare($query);
  $stmt->execute();
  return $stmt;
 }
}