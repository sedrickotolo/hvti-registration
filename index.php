<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Student Registration Form</h2>
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
        <div class="form-group">
            <label>Choose the best five performed subjects: (Including English, Mathematics, Physics)</label><br>
            <div class="form-check"> 
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="englishCheckbox" value="English">
                <label class="form-check-label" for="englishCheckbox">English</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="mathCheckbox" value="Mathematics">
                <label class="form-check-label" for="mathCheckbox">Mathematics</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="physicsCheckbox" value="Physics">
                <label class="form-check-label" for="physicsCheckbox">Physics</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="foodsCheckbox" value="Foods and Nutrition">
                <label class="form-check-label" for="foodsCheckbox">Foods and Nutrition</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="ictCheckbox" value="ICT">
                <label class="form-check-label" for="ictCheckbox">ICT</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="bioCheckbox" value="Biology">
                <label class="form-check-label" for="bioCheckbox">Biology</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="chemCheckbox" value="Chemistry">
                <label class="form-check-label" for="chemCheckbox">Chemistry</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="artCheckbox" value="Fine Art">
                <label class="form-check-label" for="artCheckbox">Fine Art</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="historyCheckbox" value="History">
                <label class="form-check-label" for="historyCheckbox">History</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="litCheckbox" value="English Literature">
                <label class="form-check-label" for="litCheckbox">English Literature</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="agriCheckbox" value="Agriculture">
                <label class="form-check-label" for="agriCheckbox">Agriculture</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="geoCheckbox" value="Geography">
                <label class="form-check-label" for="geoCheckbox">Geography</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="bestSubjects[]" id="creCheckbox" value="CRE">
                <label class="form-check-label" for="creCheckbox">CRE</label>
            </div>
        </div>
        
        
        
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
        <!-- Secondary School Information -->
        <div class="form-group">
            <label>Which secondary school do you go to?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="secondarySchool" id="hopeBbira" value="Hope Senior School Bbira">
                <label class="form-check-label" for="hopeBbira">Hope Senior School Bbira</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="secondarySchool" id="hopeSuubi" value="Hope Senior School Suubi">
                <label class="form-check-label" for="hopeSuubi">Hope Senior School Suubi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="secondarySchool" id="hopeLaminadera" value="Hope Senior School Laminadera">
                <label class="form-check-label" for="hopeLaminadera">Hope Senior School Laminadera</label>
            </div>
            <!-- Add more secondary school options as needed -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="secondarySchool" id="otherSchool" value="Other">
                <label class="form-check-label" for="otherSchool">Other</label>
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
    <div class="form-group">
    <label>Select your courses (up to 3):</label><br>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="course1" name="courses[]" value="National Certificate in Electrical Installation Systems & Maintenance (NCES)">
        <label class="form-check-label" for="course1">National Certificate in Electrical Installation Systems & Maintenance (NCES)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="course2" name="courses[]" value="National Certificate in Building Construction (NCBC)">
        <label class="form-check-label" for="course2">National Certificate in Building Construction (NCBC)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="course3" name="courses[]" value="National Certificate in Automotive Mechanics (NCAM)">
        <label class="form-check-label" for="course3">National Certificate in Automotive Mechanics (NCAM)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="course4" name="courses[]" value="National Certificate in Woodwork Technology (NCWT)">
        <label class="form-check-label" for="course4">National Certificate in Woodwork Technology (NCWT)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="course5" name="courses[]" value="National Certificate in Journalism and Media Studies (NCJM)">
        <label class="form-check-label" for="course5">National Certificate in Journalism and Media Studies (NCJM)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="course6" name="courses[]" value="National Certificate in Fashion and Design (NCFD)">
        <label class="form-check-label" for="course6">National Certificate in Fashion and Design (NCFD)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="course7" name="courses[]" value="National Certificate in Hotel Management and Institution Catering (NCHC)">
        <label class="form-check-label" for="course7">National Certificate in Hotel Management and Institution Catering (NCHC)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="course8" name="courses[]" value="National Certificate in Cosmetology and Beauty (NCCB)">
        <label class="form-check-label" for="course8">National Certificate in Cosmetology and Beauty (NCCB)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="course9" name="courses[]" value="National Certificate in Painting and Decoration (NCPD)">
        <label class="form-check-label" for="course9">National Certificate in Painting and Decoration (NCPD)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="course10" name="courses[]" value="National Certificate in Information and Communication Technology (NCIT)">
        <label class="form-check-label" for="course10">National Certificate in Information and Communication Technology (NCIT)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="course11" name="courses[]" value="National Certificate in Plumbing (NCPL)">
        <label class="form-check-label" for="course11">National Certificate in Plumbing (NCPL)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="course12" name="courses[]" value="National Certificate in Child Development (NCCD)">
        <label class="form-check-label" for="course12">National Certificate in Child Development (NCCD)</label>
    </div>
</div>


        <!-- Rating Section -->
        <div class="form-group">
            <label for="rating">Rate yourself (1-5, worse to best):</label>
            <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
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
            <label for="cv">Upload CV (PDF/Word):</label>
            <input type="file" class="form-control-file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
        </div>
        <div class="form-group">
            <label for="mentorLetter">Upload PDF Letter for a Mentor:</label>
            <input type="file" class="form-control-file" id="mentorLetter" name="mentorLetter" accept=".pdf" required>
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
