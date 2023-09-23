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

        .exam-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        /* Add CSS for each exam item */
        .exam-item {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }

        .exam-link {
            text-decoration: none;
            color: blue; /* Set exam headings to blue color */
            font-weight: bold;
        }

        .exam-link:hover {
            text-decoration: underline;
        }

        /* Center the exam headings */
        .exam-item h2 {
            text-align: center;
        }

        /* Adjust image size and center them */
        .exam-item img {
            max-width: 100%; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
            display: block; /* Center the images horizontally */
            margin: 0 auto; /* Center the images horizontally */
        }

        /* Style the h1 element */
        .max-text.large-text {
            font-weight: bold;
        }

        /* Add CSS for exam descriptions */
        .exam-item p {
            margin: 10px 0;
        }
    </style>
    <title>Government Entrance Exams in India</title> <!-- Update the title -->
</head>
<body>
    <div class="container">
        <h1 class="max-text large-text">Government Exams for Students in India</h1> <!-- Update the h1 -->
        <div class="exam-list">
            <div class="exam-item">
                <img src="images/neet.jpg" alt="Exam 1 Image">
                <h2><a href="exam1.html" class="exam-link">National Eligibility-cum-Entrance Test (NEET)</a></h2>
                <p>NEET is a national-level medical entrance exam. It's required for admission to medical and dental courses in India. The exam assesses a student's eligibility for undergraduate medical programs.</p>
            </div>
            <div class="exam-item">
                <img src="images/jee.jpg" alt="Exam 2 Image">
                <h2><a href="https://jeeadv.ac.in/" class="exam-link">Joint Entrance Examination (JEE)</a></h2>
                <p>JEE is a common engineering entrance exam for admission to various engineering colleges in India. It consists of two phases: JEE Main and JEE Advanced, and evaluates students' knowledge of physics, chemistry, and mathematics.</p>
            </div>
            <div class="exam-item">
                <img src="images/upsccse.jpg" alt="Exam 3 Image">
                <h2><a href="exam3.html" class="exam-link">Civil Services Examination (UPSC CSE)</a></h2>
                <p>UPSC CSE is a prestigious competitive exam for recruitment to various civil services of the Indian government. Successful candidates become IAS, IPS, IRS, and other top officers in the Indian bureaucracy.</p>
            </div>
            <div class="exam-item">
                <img src="images/gate.jpg" alt="Exam 4 Image">
                <h2><a href="exam4.html" class="exam-link">Graduate Aptitude Test in Engineering (GATE)</a></h2>
                <p>GATE is an entrance exam for postgraduate engineering and technology programs. It's a gateway for admission to M.Tech and Ph.D. programs in Indian engineering institutions.</p>
            </div>
            <div class="exam-item">
                <img src="images/cat.jpg" alt="Exam 5 Image">
                <h2><a href="exam5.html" class="exam-link">Common Admission Test (CAT)</a></h2>
                <p>CAT is a competitive management entrance exam used for admission to top business schools in India. It evaluates a candidate's quantitative, verbal, and logical reasoning skills.</p>
            </div>
            <div class="exam-item">
                <img src="images/nda.jpg" alt="Exam 6 Image">
                <h2><a href="exam6.html" class="exam-link">National Defence Academy (NDA) Exam</a></h2>
                <p>The NDA exam is for admission to the Indian Army, Navy, and Air Force. It's a crucial step for those aspiring to join the defense services of India.</p>
            </div>
        </div>
    </div>
</body>
</html>
