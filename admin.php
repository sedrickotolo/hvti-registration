<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <?php
        // Include your database connection file
        include 'db.php';

        // SQL query to fetch data
        $sql = "SELECT `id`, `fullName`, `phone`, `otherNames`, `dob`, `uceIndex`, `totalAggregates`, `bestSubjects`, `currentAddress`, `mobileNumber`, `email`, `secondarySchool`, `parentName`, `parentTel`, `courses`, `rating`, `source`, `otherSource`, `cvPath`, `mentorLetterPath`, `agreeTerms`, `submissionDate` FROM `studentregistration` WHERE 1";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table>';
            echo '<tr>';
            echo '<th>ID</th>';
            echo '<th>Full Name</th>';
            echo '<th>Phone</th>';
            echo '<th>DOB</th>';
            // ... Add other column headers here based on your data
            echo '<th>Submission Date</th>';
            echo '</tr>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['fullName'] . '</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['dob'] . '</td>';
                // ... Add other column data here based on your data
                echo '<td>' . $row['submissionDate'] . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No records found.';
        }

        // Close the database connection
        $conn->close();
    ?>
</body>
</html>
