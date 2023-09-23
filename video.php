<!DOCTYPE html>
<html>
<head>
<title>Vidyan Video learning</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="1/styles/style.css">
<style>
  #overallProgress {
    text-align: center;
    font-size: 18px;
    color: red;
    margin-top: 20px;
  }
  #progressChartContainer {
    float: right; /* Move the chart to the right */
    margin-top: 30px;
    margin-right: 20px; /* Add some margin for spacing */
  }
  #progressChart {
    width: 400px; /* Increase the chart size */
    height: 400px;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div id="progressChartContainer">
  <canvas id="progressChart"></canvas>
</div>

<div id="header">
  <div class="section"> <span id="ribbon"></span> <span id="button"></span>
    <div>
      <div id="logo"><a href="index.html"><img src="1/images/logo.gif" alt=""></a></div>
      <div id="navigation">
      
      </div>
    </div>
  </div>
</div>
<div id="content">
  <div> <span class="background"></span>
    <div class="button-container">
        <a href="textbook.php" class="button">TEXT BOOKS</a>
        <a href="pdfs.php" target="_blank" class="button">PDFs</a>
        <a href="video.php" target="_blank" class="button">VIDEO LEARNING</a>
       
    </div>
    <div class="section">
      <h3><span>Video Learning</span></h3>
      <div>
        <h3 style="margin-top:100px ; color: blue;" >Video Content For School Students:</h3>
        <div id="progressChartContainer">
          <canvas id="progressChart" width="100" height="100"></canvas>
        </div>
        <div>
         
          <ul class="gallery">
            <li class="first"> 
              <video width="320" height="240" controls onended="updateOverallProgress(10)">
                <source src="1/images\Class 6 _ CBSE _ NCERT _ ICSE.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
              </video>
              <div>
                <p>Mathematics Class X</p>
                <span>Mathematics Class X</span>
              </div>
            </li>
            <li>
              <video width="320" height="240" controls onended="updateOverallProgress(10)">
                <source src="1/images\Class 6 _ CBSE _ NCERT _ ICSE.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
              </video>
              <div>
                <p>Biological Science</p>
                <span>Biological Science Class X</span>
              </div>
            </li>
            <li> 
              <video width="320" height="240" controls onended="updateOverallProgress(10)">
                <source src="1/images/Class 6 _ CBSE _ NCERT _ ICSE.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
              </video>
              <div>
                <p>Physics Class X</p>
                <span>Physics Class X</span>
              </div>
            </li>
          </ul>
          <div id="paging"> <a href="#" class="prev">Prev</a> <a href="#" class="next current">Next</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <p>Copyright &copy; <a href="#">Domain Name</a> - All Rights Reserved |  <a target="_blank" href="#">vidyan</a></p>
</div>

<div id="overallProgress">Overall Progress: 0%</div>

<script>
  var overallProgress = 0;
  var progressData = [0, 100]; // Initial data for the pie chart (0% completed)

  // JavaScript code for updating overall progress
  function updateOverallProgress(progressToAdd) {
    overallProgress += progressToAdd;
    var overallProgressElement = document.getElementById("overallProgress");
    overallProgressElement.textContent = "Overall Progress: " + overallProgress + "%";

    // Update the pie chart data
    progressData[0] = overallProgress;
    progressData[1] = 100 - overallProgress;
    progressChart.update();
  }

  // Create the pie chart
  var ctx = document.getElementById("progressChart").getContext("2d");
  var progressChart = new Chart(ctx, {
    type: "doughnut", // Use doughnut chart for a smaller size
    data: {
      labels: ["Completed", "Remaining"],
      datasets: [{
        data: progressData,
        backgroundColor: ["#36A2EB", "#FFCE56"],
      }],
    },
    options: {
      responsive: false, // Disable responsiveness for a fixed size
    },
  });
</script>
</body>
</html>
