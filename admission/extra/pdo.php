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
        try {
            // Database connection details
            $dsn = "mysql:host=localhost;dbname=mydb";
            $username = "root";
            $password = "Nilesh123@"; // Replace with your actual password

            // Create a PDO instance
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // SQL query to fetch all records from the table
            $sql = "SELECT id, name, roll, age FROM mytable";
            $stmt = $pdo->query($sql);

            // Check if there are results
            if ($stmt->rowCount() > 0) {
                // Output data of each row
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["roll"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["age"]) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No records found</td></tr>";
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
    </table>
</body>
</html>
