<?php 
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>
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
            color: blue; /* Set loan headings to blue color */
            font-weight: bold;
        }

        .loan-link:hover {
            text-decoration: underline;
        }

        /* Center the loan headings */
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
    <title>Government Loans for Students in India</title> <!-- Update the title -->
</head>
<body>
    <div class="container">
        <h1 class="max-text large-text">Government Loans for Students in India</h1> <!-- Update the h1 -->
        <div class="loan-list">
            <div class="loan-item">
                <img src="images/el.jpg" alt="Loan 1 Image">
                <h2><a href="https://sbi.co.in/web/interest-rates/interest-rates/loan-schemes-interest-rates/education-loan-scheme" class="loan-link">Education Loan Scheme</a></h2>
                <p>Financial support for higher education. This loan helps students cover tuition fees, living expenses, and other educational costs. It is available for various academic levels, including undergraduate, postgraduate, and doctoral studies.</p>
            </div>
            <div class="loan-item">
                <img src="images/sdl.jpg" alt="Loan 2 Image">
                <h2><a href="loan2.html" class="loan-link">Skill Development Loan</a></h2>
                <p>Loans for skill development programs. This loan supports students who want to acquire specialized skills or certifications. It covers the cost of training programs, skill-building courses, and certification exams.</p>
            </div>
            <div class="loan-item">
                <img src="images/sl.jpg" alt="Loan 3 Image">
                <h2><a href="loan3.html" class="loan-link">Startup Funding for Students</a></h2>
                <p>Support for student entrepreneurs. This loan helps students with innovative business ideas kickstart their ventures. It provides funding for business development, product prototyping, and market research.</p>
            </div>
            <div class="loan-item">
                <img src="images/heal.jpg" alt="Loan 4 Image">
                <h2><a href="loan4.html" class="loan-link">Higher Education Abroad Loan</a></h2>
                <p>Financial assistance for studying abroad. This loan enables students to pursue higher education in foreign countries. It covers tuition fees, travel expenses, and living costs for international students.</p>
            </div>
            <div class="loan-item">
                <img src="images/msl.jpg" alt="Loan 5 Image">
                <h2><a href="loan5.html" class="loan-link">Minority Student Loan</a></h2>
                <p>Loans for students from minority communities. This loan promotes educational opportunities for minority students. It assists in covering educational expenses such as tuition, books, and accommodation.</p>
            </div>
            <div class="loan-item">
                <img src="images/wel.jpg" alt="Loan 6 Image">
                <h2><a href="loan6.html" class="loan-link">Women Empowerment Loan</a></h2>
                <p>Financial support for women pursuing education. This loan empowers women to achieve their academic goals. It covers educational costs and encourages female students to excel in various fields.</p>
            </div>
        </div>
    </div>
</body>
</html>
