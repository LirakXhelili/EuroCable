const slots = ["-", "-", "-", "-", "-"];
const jobs = [];
const deadlines = []; // This will now contain date deadlines
const profits = [];
const dates = []; // Array to keep track of dates

// Generate a random deadline date within the next 7 days (used only for default jobs)
function getRandomDate() {
  const start = new Date();
  const end = new Date(start);
  end.setDate(start.getDate() + 7); // Jobs will have deadlines up to 7 days in the future
  const randomDate = new Date(
    start.getTime() + Math.random() * (end.getTime() - start.getTime())
  );
  return randomDate;
}

// Function to generate the next dates (including today)
function getNextDates(count) {
  const dates = [];
  const today = new Date();

  for (let i = 0; i < count; i++) {
    const newDate = new Date(today);
    newDate.setDate(today.getDate() + i);
    dates.push(newDate);
  }

  return dates;
}

function getNextDate() {
  if (dates.length === 0) {
    return new Date(); // Start with today's date if no dates are available
  } else {
    const lastDate = dates[dates.length - 1];
    const nextDate = new Date(lastDate);
    nextDate.setDate(lastDate.getDate() + 1); // Increment date by 1 day
    return nextDate;
  }
}

// Populate tables with some default jobs
function populateTables() {
  for (let i = 0; i < 5; i++) {
    // Random job names (a, b, c...)
    const randomJobName = String.fromCharCode(97 + i);

    // Random deadline (as a date)
    const randomDeadline = getRandomDate();

    // Random profit
    const randomProfit = Math.floor(Math.random() * 100) + 1;

    jobs.push(randomJobName);
    deadlines.push(randomDeadline);
    profits.push(randomProfit);
  }
  updateTables();
}

function updateDatesTable() {
  const table = document.getElementById("tableSlots");

  // Ensure dates array has the same length as slots
  while (dates.length < slots.length) {
    dates.push(getNextDate());
  }

  const dateRows = table.querySelectorAll("tr");
  // Update date row
  if (dateRows.length > 1) {
    const dateRow = dateRows[1];
    for (let i = 0; i < dates.length; i++) {
      const cell = dateRow.cells[i + 1];
      cell.innerHTML = dates[i].toLocaleDateString(); // Show date as a readable format
    }
  }
}

// Generic function to update a table with data
function updateTable(tableId, data, header, isDate = false) {
  const table = document.getElementById(tableId);

  // Clear the table
  while (table.rows.length > 0) {
    table.deleteRow(0);
  }

  // Insert header row with dates
  const headerRow = table.insertRow(0);
  const indexCell = headerRow.insertCell(0);
  indexCell.innerHTML = "<th><b>Index</b></th>";

  // Generate header dates based on current slots length
  const dateHeaders = getNextDates(slots.length);
  for (let i = 0; i < dateHeaders.length; i++) {
    const cell = headerRow.insertCell(i + 1);
    cell.innerHTML = `<th>${dateHeaders[i].toLocaleDateString()}</th>`; // Show date as header
  }

  // Insert data row
  const row = table.insertRow(1);
  const headerCell = row.insertCell(0);
  headerCell.innerHTML = `<b>${header}</b>`;

  for (let i = 0; i < data.length; i++) {
    const cell = row.insertCell(i + 1);
    if (isDate) {
      // Format date to a readable format
      cell.innerHTML = data[i].toLocaleDateString();
    } else {
      cell.innerHTML = data[i];
    }
  }
}

// Function to open the job modal
function openJobModal() {
  document.getElementById("jobModal").style.display = "flex"; // Show the modal
}

// Function to close the modal
function closeJobModal() {
  document.getElementById("jobModal").style.display = "none"; // Hide the modal
}

// Function to add a new job and close the modal
function addNewJob() {
  const jobName = document.getElementById("jobName").value;
  const jobDeadline = new Date(document.getElementById("jobDeadline").value); // Capture the user input deadline
  const jobProfit = parseInt(document.getElementById("jobProfit").value);

  // Validate inputs
  if (jobName === "" || isNaN(jobProfit) || isNaN(jobDeadline.getTime())) {
    alert("Please enter valid job details (name, deadline, profit).");
    return;
  }
  if (jobDeadline < new Date()) {
    alert("The deadline must be a future date.");
    return;
  }

  // Add job details to arrays
  jobs.push(jobName);
  deadlines.push(jobDeadline); // User-specified deadline
  profits.push(jobProfit);

  // Update the tables with new data
  updateTables();

  // Add a new slot to the slots table
  addNewSlot();

  // Close the modal after adding the job
  closeJobModal();
}

// Add new empty slots
function addNewSlot() {
  // Add new slot symbol
  slots.push("-");

  // Add a new date to the dates array
  dates.push(getNextDate());

  // Update both slots and dates table
  updateTable("tableSlots", slots, "Data");
  updateDatesTable();
}

// Function to hide the first row of all tables except tableSlots
function hideFirstRow() {
  // Array of table IDs to process
  const tableIds = [
    "tableJobs",
    "tableDeadlines",
    "tableProfits",
    "tableSlots",
  ];

  tableIds.forEach((tableId) => {
    const table = document.getElementById(tableId);
    if (table) {
      // Only hide the first row for tables other than tableSlots
      if (tableId !== "tableSlots") {
        const firstRow = table.querySelector("tr:nth-child(1)");
        if (firstRow) {
          firstRow.style.display = "none";
        }
      }
    }
  });
}

// Call this function after updating the tables or whenever needed
function updateTables() {
  updateTable("tableJobs", jobs, "Job Name");
  updateTable("tableDeadlines", deadlines, "Deadline", true); // True for date formatting
  updateTable("tableProfits", profits, "Profit");
  updateTable("tableSlots", slots, "Data");

  // Hide the first row of tables other than tableSlots
  hideFirstRow();
}

// Sort and schedule jobs based on profits and deadlines
function sortJobs() {
  const sortedSchedule = greedyJobScheduling(jobs, deadlines, profits);
  updateTable("tableSlots", sortedSchedule, "Data");
}

// Bubble Sort (Modified to handle deadline sorting first, and profit second)
function bubbleSort(arr, deadlines, profits) {
  const N = arr.length;
  for (let i = 0; i < N - 1; i++) {
    for (let j = 0; j < N - i - 1; j++) {
      const deadlineA = deadlines[arr[j]];
      const deadlineB = deadlines[arr[j + 1]];
      const profitA = profits[arr[j]];
      const profitB = profits[arr[j + 1]];

      // Compare deadlines first, if equal, compare profits
      if (
        deadlineA > deadlineB ||
        (deadlineA.getTime() === deadlineB.getTime() && profitA < profitB)
      ) {
        let temp = arr[j];
        arr[j] = arr[j + 1];
        arr[j + 1] = temp;
      }
    }
  }
}

// Greedy Job Scheduling Algorithm (with deadline and profit sorting)
function greedyJobScheduling(jobNames, deadlines, profits) {
  const N = deadlines.length;

  // Sort indices based on deadlines and profits
  const indices = Array.from({ length: N }, (_, i) => i);
  bubbleSort(indices, deadlines, profits); // Sort based on deadlines, and profit if deadlines are the same

  const result = new Array(N).fill("-"); // Slot array initialized to empty

  for (let i = 0; i < N; i++) {
    const jobIdx = indices[i];
    const jobDeadline = deadlines[jobIdx];

    // Assign the job to the nearest available slot based on the deadline
    for (let j = N - 1; j >= 0; j--) {
      const slotDate = new Date();
      slotDate.setDate(slotDate.getDate() + j); // Calculate the slot's corresponding date

      if (result[j] === "-" && jobDeadline >= slotDate) {
        result[j] = jobNames[jobIdx];
        break;
      }
    }
  }
  return result;
}

// Algorithm playback functions
let stepIndex = 0;

function performStep(sortedSchedule) {
  if (stepIndex < sortedSchedule.length) {
    const currentJob = sortedSchedule[stepIndex];

    highlightColumn("tableJobs", currentJob);
    highlightColumn("tableDeadlines", currentJob);
    highlightColumn("tableProfits", currentJob);

    updateSlotsTable(sortedSchedule.slice(0, stepIndex + 1));

    setTimeout(() => {
      removeColumnHighlight("tableJobs", currentJob);
      removeColumnHighlight("tableDeadlines", currentJob);
      removeColumnHighlight("tableProfits", currentJob);

      stepIndex++;
      performStep(sortedSchedule);
    }, 2000);
  }
}

function playAlgorithm() {
  const sortedSchedule = greedyJobScheduling(jobs, deadlines, profits);
  stepIndex = 0;
  performStep(sortedSchedule);
}

function stepForward() {
  const sortedSchedule = greedyJobScheduling(jobs, deadlines, profits);

  if (stepIndex < sortedSchedule.length) {
    const currentJob = sortedSchedule[stepIndex];
    highlightColumn("tableJobs", currentJob);
    highlightColumn("tableDeadlines", currentJob);
    highlightColumn("tableProfits", currentJob);

    stepIndex++;
    updateSlotsTable(sortedSchedule.slice(0, stepIndex));
  }
}

function stepBackward() {
  if (stepIndex > 0) {
    stepIndex--;
    const sortedSchedule = greedyJobScheduling(jobs, deadlines, profits);
    const currentJob = sortedSchedule[stepIndex];

    removeColumnHighlight("tableJobs", currentJob);
    removeColumnHighlight("tableDeadlines", currentJob);
    removeColumnHighlight("tableProfits", currentJob);

    updateSlotsTable(sortedSchedule.slice(0, stepIndex));
  }
}

function updateSlotsTable(schedule) {
  const table = document.getElementById("tableSlots");

  // Check if the second row exists
  let row = table.querySelector("tr:nth-child(2)");
  if (!row) {
    // Create the second row if it does not exist
    row = table.insertRow(1);
    const headerCell = row.insertCell(0);
    headerCell.innerHTML = `<b>Data</b>`;
  }

  // Update existing cells or add new cells for the slots
  for (let i = 0; i < schedule.length; i++) {
    let cell = row.cells[i + 1];
    if (!cell) {
      // Add a new cell if it does not exist
      cell = row.insertCell(i + 1);
    }
    // Update cell content
    cell.innerHTML = schedule[i] !== "-" ? schedule[i] : "-";
  }

  // Remove extra cells if there are more cells than needed
  while (row.cells.length > schedule.length + 1) {
    row.deleteCell(-1);
  }
}

function highlightColumn(tableId, value) {
  const table = document.getElementById(tableId);

  for (let i = 1; i < table.rows.length; i++) {
    const cell = table.rows[i].cells;
    for (let j = 1; j < cell.length; j++) {
      if (cell[j].innerHTML === value) {
        cell[j].style.backgroundColor = "yellow";
      }
    }
  }
}

function removeColumnHighlight(tableId, value) {
  const table = document.getElementById(tableId);

  for (let i = 1; i < table.rows.length; i++) {
    const cell = table.rows[i].cells;
    for (let j = 1; j < cell.length; j++) {
      if (cell[j].innerHTML === value) {
        cell[j].style.backgroundColor = "";
      }
    }
  }
}
