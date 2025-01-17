<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="css/scheduling.css" />
    

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Job Scheduling</title>
  </head>
  <body onload="populateTables()">
    <div class="parent-container">
      <div class="child-container">
        <h1>Job Scheduling using Greedy Algorithm</h1>
        <div class="div-btn">
          <button class="slots-button" onclick="addNewSlot()">Add Slots</button>
          <button onclick="sortJobs()">Sort</button>
          <button class="" onclick="stepBackward()">
            <i class="fa-solid fa-backward-step"></i>
          </button>
          <button class="" onclick="playAlgorithm()">
            <i class="fa-solid fa-play"></i>
          </button>
          <button class="" onclick="stepForward()">
            <i class="fa-solid fa-forward-step"></i>
          </button>
          <button class="round-button" onclick="openJobModal()">
            Add Jobs
          </button>
        </div>

        <div class="container">
          <!-- Table 0 (Slots) -->
          <table id="tableSlots">
            <tr>
              <th>Data</th>
            </tr>
          </table>

          <!-- Table 1 (Jobs) -->
          <table id="tableJobs">
            <tr id="index" class="index-row">
              <!-- <th>Index</th> -->
              <!-- <td style="border: none">
            
          </td> -->
            </tr>
            <tr>
              <th>Job Name</th>
            </tr>
          </table>

          <!-- Table 2 (Deadlines) -->
          <table id="tableDeadlines">
            <tr id="index" class="index-row">
              <!-- <th>Index</th> -->
            </tr>
            <tr>
              <th>Deadline</th>
            </tr>
          </table>

          <!-- Table 3 (Profits) -->
          <table id="tableProfits">
            <tr id="index" class="index-row">
              <!-- <th>Index</th> -->
            </tr>
            <tr>
              <th>Profit</th>
            </tr>
          </table>

          <!-- The Popup Modal -->
          <div class="popup" id="jobModal">
            <div class="modal">
              <span class="close" onclick="closeJobModal()">&times;</span>
              <!-- Close button -->
              <h2>Add Job</h2>
              <div class="labels">
                <label for="jobName">Job Name:</label>
                <input type="text" id="jobName" required /><br />

                <label for="jobDeadline">Job Deadline:</label>
                <input type="date" id="jobDeadline" required /><br />

                <label for="jobProfit">Job Profit:</label>
                <input type="number" id="jobProfit" required /><br />
              </div>
              <button onclick="addNewJob()">Add New Job</button>
              <!-- Add Job Button -->
            </div>
          </div>

          <!-- <button class="round-button" onclick="openJobModal()">Add Jobs</button> -->
        </div>
      </div>
    </div>
    <!-- JavaScript for Popup Functionality -->
    <script src="js/scheduling3.js"></script>
  </body>
</html>
