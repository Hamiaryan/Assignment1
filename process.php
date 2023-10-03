<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $employee_id = $_POST['employee_id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $telephone = $_POST['telephone'];
            $department = $_POST['department'];
            $salary_per_time = $_POST['salary_per_time'];
            $hours_per_month = $_POST['hours_per_month'];
            $annual_salary = $_POST['annual_salary'];
            $yearly_salary = $_POST['yearly_salary'];

            require_once("database.php");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                // Remove the extra comma after 'yearly_salary'
                $sql = "INSERT INTO `Employees` (`employee_id`, `first_name`, `last_name`, `email`, `telephone`, `department`, `salary_per_time`, `hours_per_month`, `annual_salary`, `yearly_salary`) VALUES ('$employee_id', '$first_name', '$last_name', '$email', '$telephone', '$department', '$salary_per_time', '$hours_per_month', '$annual_salary', '$yearly_salary')";
        
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
        }
        ?>