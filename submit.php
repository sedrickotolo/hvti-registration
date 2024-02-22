<?php
// Include your database connection file
include 'db.php';

// Specify the directory for file uploads
$uploadDirectory = "uploads/";

// Create the upload directory if it doesn't exist
if (!file_exists($uploadDirectory)) {
    mkdir($uploadDirectory, 0777, true);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Check if each field is set before trying to access it
    $fullName = isset($_POST['fullName']) ? mysqli_real_escape_string($conn, $_POST['fullName']) : "";
    $phone = isset($_POST['phone']) ? mysqli_real_escape_string($conn, $_POST['phone']) : "";
    $otherNames = isset($_POST['otherNames']) ? mysqli_real_escape_string($conn, $_POST['otherNames']) : "";
    $dob = isset($_POST['dob']) ? mysqli_real_escape_string($conn, $_POST['dob']) : "";
    $uceIndex = isset($_POST['uceIndex']) ? mysqli_real_escape_string($conn, $_POST['uceIndex']) : "";
    $totalAggregates = isset($_POST['totalAggregates']) ? mysqli_real_escape_string($conn, $_POST['totalAggregates']) : "";
    $bestSubjects = isset($_POST['bestSubjects']) ? implode(", ", $_POST['bestSubjects']) : "";
    $currentAddress = isset($_POST['currentAddress']) ? mysqli_real_escape_string($conn, $_POST['currentAddress']) : "";
    $mobileNumber = isset($_POST['mobileNumber']) ? mysqli_real_escape_string($conn, $_POST['mobileNumber']) : "";
    $email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : "";
    $secondarySchool = isset($_POST['secondarySchool']) ? mysqli_real_escape_string($conn, $_POST['secondarySchool']) : "";
    $parentName = isset($_POST['parentName']) ? mysqli_real_escape_string($conn, $_POST['parentName']) : "";
    $parentTel = isset($_POST['parentTel']) ? mysqli_real_escape_string($conn, $_POST['parentTel']) : "";
    $courses = isset($_POST['courses']) ? implode(", ", $_POST['courses']) : "";
    $rating = isset($_POST['rating']) ? mysqli_real_escape_string($conn, $_POST['rating']) : "";
    $source = isset($_POST['source']) ? mysqli_real_escape_string($conn, $_POST['source']) : "";
    $otherSource = isset($_POST['otherSource']) ? mysqli_real_escape_string($conn, $_POST['otherSource']) : "";
    $cvPath = isset($_FILES['cv']['name']) ? "uploads/" . basename($_FILES['cv']['name']) : "";
    $mentorLetterPath = isset($_FILES['mentorLetter']['name']) ? "uploads/" . basename($_FILES['mentorLetter']['name']) : "";
    $agreeTerms = isset($_POST['agreeTerms']) ? mysqli_real_escape_string($conn, $_POST['agreeTerms']) : "";

    // Upload files only if they are set
    if (isset($_FILES['cv']['tmp_name']) && isset($_FILES['mentorLetter']['tmp_name'])) {
        move_uploaded_file($_FILES['cv']['tmp_name'], $cvPath);
        move_uploaded_file($_FILES['mentorLetter']['tmp_name'], $mentorLetterPath);
    }

    // SQL query to insert data into the database
    $sql = "INSERT INTO StudentRegistration (fullName, phone, otherNames, dob, uceIndex, totalAggregates, bestSubjects, currentAddress, mobileNumber, email, secondarySchool, parentName, parentTel, courses, rating, source, otherSource, cvPath, mentorLetterPath, agreeTerms) 
            VALUES ('$fullName', '$phone', '$otherNames', '$dob', '$uceIndex', '$totalAggregates', '$bestSubjects', '$currentAddress', '$mobileNumber', '$email', '$secondarySchool', '$parentName', '$parentTel', '$courses', '$rating', '$source', '$otherSource', '$cvPath', '$mentorLetterPath', '$agreeTerms')";

    if ($conn->query($sql) === TRUE) {
        // Close the database connection
        $conn->close();

        // Redirect to thank you page after a successful submission
        header("Location: thank_you.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
