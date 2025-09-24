<?php
/**
 * Database Connection Test Script
 * Run this file to test if your database connection is working
 */

echo "<h2>Learnify - Database Connection Test</h2>";
echo "<hr>";

// Test 1: Basic MySQL Connection
echo "<h3>Test 1: Basic MySQL Connection</h3>";
$connection = mysqli_connect("localhost", "root", "", "learnify");

if (mysqli_connect_errno()) {
    echo "❌ <strong>FAILED:</strong> " . mysqli_connect_error() . "<br>";
    echo "<strong>Possible solutions:</strong><br>";
    echo "- Make sure XAMPP MySQL service is running<br>";
    echo "- Check if database 'learnify' exists<br>";
    echo "- Verify MySQL credentials<br>";
} else {
    echo "✅ <strong>SUCCESS:</strong> Connected to MySQL database 'learnify'<br>";
}

echo "<hr>";

// Test 2: Check if tables exist
echo "<h3>Test 2: Database Tables Check</h3>";
if ($connection) {
    $tables = ['admin', 'guru', 'siswa', 'materi', 'kelas', 'token'];
    $allTablesExist = true;
    
    foreach ($tables as $table) {
        $result = mysqli_query($connection, "SHOW TABLES LIKE '$table'");
        if (mysqli_num_rows($result) > 0) {
            echo "✅ Table '$table' exists<br>";
        } else {
            echo "❌ Table '$table' is missing<br>";
            $allTablesExist = false;
        }
    }
    
    if ($allTablesExist) {
        echo "<br><strong>✅ All required tables are present!</strong><br>";
    } else {
        echo "<br><strong>❌ Some tables are missing. Please import the database schema.</strong><br>";
        echo "Run: mysql -u root learnify < database/learnify.sql<br>";
    }
}

echo "<hr>";

// Test 3: Check sample data
echo "<h3>Test 3: Sample Data Check</h3>";
if ($connection) {
    // Check admin table
    $result = mysqli_query($connection, "SELECT COUNT(*) as count FROM admin");
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo "✅ Admin records: " . $row['count'] . "<br>";
    }
    
    // Check guru table
    $result = mysqli_query($connection, "SELECT COUNT(*) as count FROM guru");
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo "✅ Teacher records: " . $row['count'] . "<br>";
    }
    
    // Check siswa table
    $result = mysqli_query($connection, "SELECT COUNT(*) as count FROM siswa");
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo "✅ Student records: " . $row['count'] . "<br>";
    }
    
    // Check materi table
    $result = mysqli_query($connection, "SELECT COUNT(*) as count FROM materi");
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        echo "✅ Material records: " . $row['count'] . "<br>";
    }
}

echo "<hr>";

// Test 4: CodeIgniter Database Config Test
echo "<h3>Test 4: CodeIgniter Database Configuration</h3>";
if (file_exists('application/config/database.php')) {
    echo "✅ CodeIgniter database config file exists<br>";
    
    // Read the config file
    $config_content = file_get_contents('application/config/database.php');
    if (strpos($config_content, "'database' => 'learnify'") !== false) {
        echo "✅ Database name is correctly set to 'learnify'<br>";
    } else {
        echo "❌ Database name is not set to 'learnify'<br>";
    }
    
    if (strpos($config_content, "'username' => 'root'") !== false) {
        echo "✅ Username is correctly set to 'root'<br>";
    } else {
        echo "❌ Username is not set to 'root'<br>";
    }
} else {
    echo "❌ CodeIgniter database config file not found<br>";
}

echo "<hr>";

// Summary
echo "<h3>Summary</h3>";
if ($connection && $allTablesExist) {
    echo "<div style='background-color: #d4edda; padding: 10px; border: 1px solid #c3e6cb; border-radius: 5px;'>";
    echo "<strong>🎉 SUCCESS!</strong> Your database is properly configured and ready to use.<br>";
    echo "You can now access your Learnify application at: <a href='http://localhost/ci_project_rusella/'>http://localhost/ci_project_rusella/</a>";
    echo "</div>";
} else {
    echo "<div style='background-color: #f8d7da; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px;'>";
    echo "<strong>⚠️ ATTENTION!</strong> There are some issues that need to be resolved.<br>";
    echo "Please check the errors above and fix them before running the application.";
    echo "</div>";
}

if ($connection) {
    mysqli_close($connection);
}
?>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background-color: #f8f9fa;
}
h2, h3 {
    color: #333;
}
hr {
    border: 1px solid #ddd;
    margin: 20px 0;
}
</style>
