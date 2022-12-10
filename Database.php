<?php
/**
 * Connect to the database
 * And execute a query
 */

class Database
{
 public $conn;

 public function __construct()
 {
  $dsn        = "mysql:host=localhost;port=3306;dbname=laracasts;user=root;charset=utf8mb4";
  $this->conn = new PDO($dsn);
 }

 public function query($query)
 {
  $stmt = $this->conn->prepare($query);
  $stmt->execute();
  return $stmt;
 }
}