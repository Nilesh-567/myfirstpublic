<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Records</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Records from mytable</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Age</th>
        </tr>
        <?php
        // Database connection details
        $servername = "localhost";
        $username = "root";
        $password = "Nilesh123@"; // Replace with your actual password
        $dbname = "mydb";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to fetch all records from the table
        $sql = "SELECT id, name, roll, age FROM mytable";
        $result = $conn->query($sql);

        // Check if there are results
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"]. "</td>";
                echo "<td>" . $row["name"]. "</td>";
                echo "<td>" . $row["roll"]. "</td>";
                echo "<td>" . $row["age"]. "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found</td></tr>";
        }

        // Close the connection
        $conn->close();
        ?>
    </table>
</body>
</html>
