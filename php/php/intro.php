<h2>Writing Your First PHP Script
</h2>
<h3>Hello World Example
</h3>
<?php
echo "Hello from PHP";
// Adding another h3 inside the PHP script
echo "<h3>Understanding Variables and Data Types
</h3>";
$name = "Alok";
$age = 40;
$is_employee = false;
// Using concatenation and converting boolean to string
echo "$name is $age and Is employed? " . ($is_employee ? "Yes" : "No");
echo "<p>The simplest method to render HTML in PHP is by using the echo or print statements. These functions can output HTML directly.</p>";
echo "<p>Hello {$name}. Glad to see you again!</p>";
// For loop
for ($i = 1; $i <= 10; $i++) {
    echo "<p> $i</p>";
}
?>