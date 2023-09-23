<!DOCTYPE html>
<html>
<head>
  <title>Course Webpage</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
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
    .video-container {
      margin-top: 20px;
    }
    .video-list {
      display: flex; /* Display videos in a row */
      flex-wrap: wrap; /* Allow videos to wrap to the next row */
      justify-content: space-between; /* Space videos evenly in the row */
    }
    .video-item {
      flex: 0 0 calc(50% - 10px); /* Two videos in each row with some margin */
      margin-bottom: 20px; /* Add some margin between rows */
    }
    video {
      width: 320px;
      height: 240px;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div id="progressChartContainer">
    <canvas id="progressChart"></canvas>
  </div>

  <h1>Welcome to the Skill Development Course</h1>

  <div class="video-container">
    <h2>Skill Development Videos</h2>
    <ul class="video-list">
      <li class="first"> 
        <video width="320" height="240" controls onended="updateOverallProgress(10)">
          <source src="Class 6 _ CBSE _ NCERT _ ICSE.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
        <div>
          <p>Mathematics Class X</p>
          
        </div>
      </li>
      <!-- Add more video items as needed -->
      <li class="first"> 
        <video width="320" height="240" controls onended="updateOverallProgress(10)">
          <source src="../../mywork/1/images/Class 6 _ CBSE _ NCERT _ ICSE.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
        <div>
          <p>Biology Class X</p>
         
        </div>
      </li>
      <li class="first"> 
        <video width="320" height="240" controls onended="updateOverallProgress(10)">
          <source src="../../mywork/1/images/Class 6 _ CBSE _ NCERT _ ICSE.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
        <div>
          <p>Telugu Class X</p>
       
        </div>
      </li>
      <li class="first"> 
        <video width="320" height="240" controls onended="updateOverallProgress(10)">
          <source src="../../mywork/1/images/Class 6 _ CBSE _ NCERT _ ICSE.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
        <div>
          <p>English Class X</p>
          
        </div>
      </li>
      <li class="first"> 
        <video width="320" height="240" controls onended="updateOverallProgress(10)">
          <source src="../../mywork/1/images/Class 6 _ CBSE _ NCERT _ ICSE.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
        <div>
          <p>Social Class X</p>
          
        </div>
      </li>
      <li class="first"> 
        <video width="320" height="240" controls onended="updateOverallProgress(10)">
          <source src="../../mywork/1/images/Class 6 _ CBSE _ NCERT _ ICSE.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
        <div>
          <p>Hindi Class X</p>
          
        </div>
      </li>
    </ul>
  </div>

  <div id="overallProgress">Overall Progress: 0%</div>

  <script>
    // JavaScript code for updating overall progress
    var totalVideos = document.querySelectorAll(".video-list li").length;
    var completedVideos = 0;

    function updateOverallProgress(progressToAdd) {
      // Increment the completed videos count
      completedVideos++;

      // Calculate the new overall progress
      var overallProgress = (completedVideos / totalVideos) * 100;

      // Ensure progress is between 0 and 100
      overallProgress = Math.min(100, Math.max(0, overallProgress));

      // Update the progress text
      var overallProgressElement = document.getElementById("overallProgress");
      overallProgressElement.textContent = "Overall Progress: " + overallProgress.toFixed(2) + "%";

      // Update the pie chart data
      progressData[0] = overallProgress;
      progressData[1] = 100 - overallProgress;
      progressChart.update();
    }

    // Create the pie chart
    var progressData = [0, 100]; // Initial data for the pie chart
    var ctx = document.getElementById("progressChart").getContext("2d");
    var progressChart = new Chart(ctx, {
      type: "doughnut",
      data: {
        labels: ["Completed", "Remaining"],
        datasets: [{
          data: progressData,
          backgroundColor: ["green", "blue"],
        }],
      },
      options: {
        responsive: false,
      },
    });
  </script>
</body>
</html>
