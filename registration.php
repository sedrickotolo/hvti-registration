<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

       <style>
        #clock {
            font-family: 'Arial', sans-serif;
            font-size: 48px;
            font-weight: bold;
            color: #333;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #clock-sections {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .clock-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 10px;
        }

        .clock-value {
            font-size: 24px;
        }

        .clock-label {
            font-size: 14px;
            color: #555;
        }
    </style>

    

</head>
<body class="mt-5">
 <!-- <div id="countdown"></div> -->

    <div class="container text-center">
         <div id="clock" class="text-center">
            <div id="clock-sections">
                <div class="clock-section">
                    <div id="days" class="clock-value"></div>
                    <div class="clock-label">Days</div>
                </div>
                <div class="clock-section">
                    <div id="hours" class="clock-value"></div>
                    <div class="clock-label">Hours</div>
                </div>
                <div class="clock-section">
                    <div id="minutes" class="clock-value"></div>
                    <div class="clock-label">Minutes</div>
                </div>
                <div class="clock-section">
                    <div id="seconds" class="clock-value"></div>
                    <div class="clock-label">Seconds</div>
                </div>
            </div>
        </div>

    </div>
       
<script>
    // Set the date we're counting down to
    const countDownDate = new Date("March 3, 2024 00:00:00").getTime();

    // Update the countdown every 1 second
    const x = setInterval(function() {
        // Get the current date and time
        const now = new Date().getTime();

        // Calculate the time remaining
        const distance = countDownDate - now;

        // Calculate days, hours, minutes, and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the countdown as a clock
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the countdown is over, display a message
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("clock").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

 
     
 </div>
  

<div class="container mt-5 mb-5">
    <h2 class="mb-4 mt-5 text-center">HVTI Student Admission 2024</h2>
    <!-- <p> 2024</p> -->
    <form action="submit.php" method="post" enctype="multipart/form-data">
        <!-- Personal Information -->
        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="otherNames">Other Names:</label>
            <input type="text" class="form-control" id="otherNames" name="otherNames">
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label for="uceIndex">UCE Index Number:</label>
            <input type="text" class="form-control" id="uceIndex" name="uceIndex" required>
        </div>
        <div class="form-group">
            <label for="totalAggregates">Total Aggregates:</label>
            <select class="form-control" id="totalAggregates" name="totalAggregates" required>
                <option value="">Select Total Aggregates Scored</option>
                <!-- Options for total aggregates (8 to 50) -->
                <?php
                for ($i = 8; $i <= 50; $i++) {
                    echo "<option value=\"$i\">$i</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group" id="subjectCheckboxGroup">
    <label>Choose the best five performed subjects: (Including English, Mathematics, Physics)</label><br>

    <!-- JavaScript will dynamically populate this section -->
</div>

<script>
    // List of subjects
    var subjects = ["English", "Mathematics", "Physics", "Foods and Nutrition", "ICT", "Biology", "Chemistry", "Fine Art", "History", "English Literature", "Agriculture", "Geography", "CRE"];

    // Function to dynamically create checkboxes
    function createCheckboxes() {
        var checkboxGroup = document.getElementById("subjectCheckboxGroup");
        var selectedCheckboxes = 0;

        subjects.forEach(function (subject) {
            var checkbox = document.createElement("div");
            checkbox.className = "form-check";
            checkbox.innerHTML = `
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="${subject.toLowerCase().replace(/ /g, '')}Checkbox" value="${subject}">
                <label class="form-check-label" for="${subject.toLowerCase().replace(/ /g, '')}Checkbox">${subject}</label>
            `;
            checkboxGroup.appendChild(checkbox);

            // Event listener to track the number of selected checkboxes
            checkbox.querySelector("input").addEventListener("change", function () {
                if (this.checked) {
                    selectedCheckboxes++;
                } else {
                    selectedCheckboxes--;
                }

                // Disable additional checkboxes when the limit is reached
                subjects.forEach(function (subject) {
                    var checkbox = document.getElementById(`${subject.toLowerCase().replace(/ /g, '')}Checkbox`);
                    checkbox.disabled = selectedCheckboxes >= 5 && !checkbox.checked;
                });
            });
        });
    }

    // Call the function to create checkboxes
    createCheckboxes();
</script>

        
        <div class="form-group">
            <label for="currentAddress">Current Home Address:</label>
            <select class="form-control" id="currentAddress" name="currentAddress" required>
                <option value="">Select Current Home Address</option>
                <option value="Bbira Home">Bbira Home</option>
                <option value="Suubi Home">Suubi Home</option>
                <option value="Laminadera Home">Laminadera Home</option>
                <option value="Seed/Community/Neighbourhood">Seed/Community/Neighbourhood</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <!-- Contact Information -->
        <div class="form-group">
            <label for="mobileNumber">Mobile Number:</label>
            <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber" required>
        </div>
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        
        <div class="form-group">
        <label>Which secondary school do you go to?</label><br> <br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="secondarySchool" id="hopeBbira" value="Hope Senior School Bbira" onclick="toggleFields()">
            <label class="form-check-label" for="hopeBbira">Hope Senior School Bbira</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="secondarySchool" id="hopeSuubi" value="Hope Senior School Suubi" onclick="toggleFields()">
            <label class="form-check-label" for="hopeSuubi">Hope Senior School Suubi</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="secondarySchool" id="hopeLaminadera" value="Hope Senior School Laminadera" onclick="toggleFields()">
            <label class="form-check-label" for="hopeLaminadera">Hope Senior School Laminadera</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="secondarySchool" id="otherSchool" value="Other" onclick="toggleFields()">
            <label class="form-check-label" for="otherSchool">Other</label>
        </div>
    </div>

    <!-- Additional fields for pass slip -->
    <div id="passSlipFields" style="display: none;">
        <div class="form-group">
            <label for="schoolName">Name of School Attended:</label>
            <input type="text" class="form-control" name="schoolName">
        </div>
        <div class="form-group">
            <label>Attach a pass slip (PDF, JPEG, DOC, PNG):</label>
            <input type="file" class="form-control-file" name="passSlip" accept=".pdf, .jpeg, .jpg, .png">
        </div>
    </div>
        
        <!-- Parent/Guardian Details -->
        <div class="form-group">
            <label for="parentName">Parent/Guardian Name:</label>
            <input type="text" class="form-control" id="parentName" name="parentName" required>
        </div>
        <div class="form-group">
            <label for="parentTel">Parent/Guardian Telephone Number:</label>
            <input type="tel" class="form-control" id="parentTel" name="parentTel" required>
        </div>

      <!-- Course Choices -->
    <div class="form-group" id="courseCheckboxGroup">
    <label>Select your courses (up to 5):</label><br>

    <!-- JavaScript will dynamically populate this section -->
</div>

<script>
    // List of courses
    var courses = [
        "National Certificate in Electrical Installation Systems & Maintenance (NCES)",
        "National Certificate in Building Construction (NCBC)",
        "National Certificate in Automotive Mechanics (NCAM)",
        "National Certificate in Woodwork Technology (NCWT)",
        "National Certificate in Journalism and Media Studies (NCJM)",
        "National Certificate in Fashion and Design (NCFD)",
        "National Certificate in Hotel Management and Institution Catering (NCHC)",
        "National Certificate in Cosmetology and Beauty (NCCB)",
        "National Certificate in Painting and Decoration (NCPD)",
        "National Certificate in Information and Communication Technology (NCIT)",
        "National Certificate in Plumbing (NCPL)",
        "National Certificate in Child Development (NCCD)"
    ];

    // Function to dynamically create checkboxes
    function createCheckboxes() {
        var checkboxGroup = document.getElementById("courseCheckboxGroup");
        var selectedCheckboxes = 0;

        courses.forEach(function (course) {
            var checkbox = document.createElement("div");
            checkbox.className = "form-check";
            checkbox.innerHTML = `
                <input class="form-check-input" type="checkbox" name="courses[]" id="${course.toLowerCase().replace(/ /g, '')}Checkbox" value="${course}">
                <label class="form-check-label" for="${course.toLowerCase().replace(/ /g, '')}Checkbox">${course}</label>
            `;
            checkboxGroup.appendChild(checkbox);

            // Event listener to track the number of selected checkboxes
            checkbox.querySelector("input").addEventListener("change", function () {
                if (this.checked) {
                    selectedCheckboxes++;
                } else {
                    selectedCheckboxes--;
                }

                // Disable additional checkboxes when the limit is reached
                courses.forEach(function (course) {
                    var checkbox = document.getElementById(`${course.toLowerCase().replace(/ /g, '')}Checkbox`);
                    checkbox.disabled = selectedCheckboxes >= 5 && !checkbox.checked;
                });
            });
        });
    }

    // Call the function to create checkboxes
    createCheckboxes();
</script>

        <!-- Rating Section -->
            <div class="form-group">
                <label for="rating">How would you rate HVTI?</label>
                <select class="form-control" id="rating" name="rating" required>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Average</option>
                    <option value="4">4 - Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
            </div>
        <!-- How did you know about HVTI? -->
        <div class="form-group">
                <label for="source">How did you know about HVTI?</label>
                <select class="form-control" id="source" name="source" required>
                    <option value="">Select One</option>
                    <option value="Church">Church</option>
                    <option value="High School">High School</option>
                    <option value="Internet">Internet</option>
                    <option value="Friend">Friend</option>
                    <option value="Newspaper">Newspaper</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="form-group" id="otherSourceInput" style="display: none;">
                <label for="otherSource">Please specify:</label>
                <input type="text" class="form-control" id="otherSource" name="otherSource">
            </div>

        <!-- Attachments -->
        <div class="form-group">
            <label for="cv">Upload your CV in PDF/Word</label>
            <input type="file" class="form-control-file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
        </div>
      <div class="form-group">
        <label for="mentorLetter"> <b> Attach a letter of recommendation from a person who has known you for more than 3 years eg Pastor, Principal/Headteacher, Mentor, Business person or counselor </b></label>
        <input type="file" class="form-control-file" id="mentorLetter" name="mentorLetter" accept=".pdf, .jpg, .png, .docx" required>
    </div>

        <!-- Agreement of Terms and Conditions -->
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="agreeTerms" required>
            <label class="form-check-label" for="agreeTerms">I agree to the terms and conditions</label>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
