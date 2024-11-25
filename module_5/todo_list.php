<?php
$config = require 'config.php';

try {
  // Connect to the database using PDO
  $db = new PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['database'], $config['user'], $config['password']);
  
  // Fetch and display todo list
  echo "<h2>TODO</h2><ol>";
  foreach ($db->query("SELECT content FROM todo_list") as $row) {
    // Display each content item in the list with htmlspecialchars to prevent XSS
    echo "<li>" . htmlspecialchars($row['content']) . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    // Log the error and display a user-friendly message
    error_log($e->getMessage(), 3, '/var/log/php_errors.log');
    echo "Error fetching todo list.";
}
?>
