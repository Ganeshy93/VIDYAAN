
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add CSS for grid layout */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center; /* Center align the container content */
        }

        .loan-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        /* Add CSS for each loan item */
        .loan-item {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }

        .loan-link {
            text-decoration: none;
            color: blue; /* Set scholarship headings to blue color */
            font-weight: bold;
        }

        .loan-link:hover {
            text-decoration: underline;
        }

        /* Center the scholarship headings */
        .loan-item h2 {
            text-align: center;
        }

        /* Adjust image size */
        .loan-item img {
            max-width: 100%; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
        }

        /* Style the h1 element */
        .max-text.large-text {
            font-weight: bold;
        }
    </style>
    <title>Government Scholarships for Students in India</title> <!-- Update the title -->
</head>
<body>
    <div class="container">
        <h1 class="max-text large-text">Government Scholarships for Students in India</h1> <!-- Update the h1 -->
        <div class="loan-list">
            <div class="loan-item">
                <img src="images/nms.jpg" alt="Scholarship 1 Image">
                <h2><a href="scholarship1.html" class="loan-link">National Merit Scholarship</a></h2>
                <p>Financial support for meritorious students. This scholarship recognizes outstanding academic achievements and provides financial assistance to pursue higher education.</p>
            </div>
            <div class="loan-item">
                <img src="images/pms.jpg" alt="Scholarship 2 Image">
                <h2><a href="https://pmsonline.bih.nic.in/pmsedu/(S(fhofyh04vyxzxr3m0s23updq))/pms/Default.aspx" class="loan-link">Post-Matric Scholarship for SC/ST Students</a></h2>
                <p>Support for SC/ST students pursuing higher education. This scholarship aims to bridge educational gaps by providing financial aid to students from disadvantaged backgrounds.</p>
            </div>
            <div class="loan-item">
                <img src="images/pmss.jpg" alt="Scholarship 3 Image">
                <h2><a href="scholarship3.html" class="loan-link">Prime Minister's Scholarship Scheme</a></h2>
                <p>Financial assistance for the wards of armed forces personnel. This scholarship honors the sacrifices of armed forces personnel by offering support to their children's education.</p>
            </div>
            <div class="loan-item">
                <img src="images/css.jpg" alt="Scholarship 4 Image">
                <h2><a href="scholarship4.html" class="loan-link">Central Sector Scholarship Scheme</a></h2>
                <p>Scholarships for college and university students. This scheme provides financial aid to eligible students to help them pursue their undergraduate and postgraduate studies.</p>
            </div>
            <div class="loan-item">
                <img src="images/ios.jpg" alt="Scholarship 5 Image">
                <h2><a href="scholarship5.html" class="loan-link">Indian Oil Scholarships</a></h2>
                <p>Financial support from Indian Oil Corporation. These scholarships are designed to assist students in meeting their educational expenses and achieving their career goals.</p>
            </div>
            <div class="loan-item">
                <img src="images/apjs.jpg" alt="Scholarship 6 Image">
                <h2><a href="scholarship6.html" class="loan-link">Dr. APJ Abdul Kalam Scholarship</a></h2>
                <p>Scholarship in honor of Dr. Kalam's legacy. This scholarship encourages students to pursue science and aerospace-related fields and contribute to the nation's progress.</p>
            </div>
        </div>
    </div>
</body>
</html>
