<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
    <link rel="stylesheet" href="ViewStyle.css">
</head>
<header>
        <div class="logo">
            <img src="Asset/logo.png" alt="Company Logo">
            <h1>Hamed IT LTD.</h1>
        </div>
    </header>
<body>
    

    <!-- Add the search form here -->
    <div class="search">
    <h1>Search for Employee</h1>
    <form method="POST" action="">
        <input type="text" name="search" placeholder="Enter employee name or ID">
        <input type="submit" name="submit" value="Search">
    </form>
</div>


    <?php
    require_once("database.php");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connected to Database";
    }

    if(isset($_POST['submit'])){
        $search = $_POST['search'];

        // Modify your SQL query to search for employees based on the search term
        $sql = "SELECT * FROM `Employees` WHERE 
                `employee_id` LIKE '%$search%' OR 
                `first_name` LIKE '%$search%' OR 
                `last_name` LIKE '%$search%'";

    } else {
        // If no search term is specified, fetch all employees
        $sql = "SELECT * FROM `Employees`";
    }

    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        // Display the search results in a table similar to your existing code
        echo "<p>Search Results: $num</p>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Employee ID</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Email</th>";
        echo "<th>Telephone</th>";
        echo "<th>Department</th>";
        echo "<th>Salary per Time</th>";
        echo "<th>Hours per Month</th>";
        echo "<th>Annual Salary</th>";
        echo "<th>Yearly Salary</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['employee_id'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telephone'] . "</td>";
            echo "<td>" . $row['department_name'] . "</td>";
            echo "<td>" . $row['salary_per_time'] . "</td>";
            echo "<td>" . $row['hours_per_month'] . "</td>";
            echo "<td>" . $row['annual_salary'] . "</td>";
            echo "<td>" . $row['yearly_salary'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No matching employees found.";
    }

    mysqli_close($conn);
    ?>
</body>
<footer>
        &copy;  Company Name. All Rights Reserved.
    </footer>
</html>


<style>
   body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

/* Center the title */
h1 {
    text-align: center;
}

/* Style the header and footer */
header, footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    
}

.logo img {
    max-width: 100px;
    height: auto;
    vertical-align: middle;
    margin-right: 10px;
}

/* Style the login container */
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

/* Style the login form */
.login-form {
    background: linear-gradient(45deg, #00bcd4, #3f51b5);
    background-size: 200% 200%;
    animation: gradientGrow 5s linear infinite;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    color: #fff;
    padding: 20px;
    text-align: center;
}
/* Style for the centered search container */
.search {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    
}

/* Style for input elements within the form */
.search input[type="text"],
.search input[type="submit"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-right: 10px;
    transition: transform 0.2s ease-in-out;
}

/* Add a subtle grow effect to input elements on hover */
.search input[type="text"]:hover,
.search input[type="submit"]:hover {
    transform: scale(1.05);
}
footer{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: white;
    text-align: center;
}

</style>