const slots = ["-", "-", "-", "-", "-"];
const jobs = [];
const deadlines = [];
const profits = [];

function getFutureDate(daysInFuture) {
  const today = new Date();
  const futureDate = new Date(today);
  futureDate.setDate(today.getDate() + daysInFuture);
  return futureDate;
}

function populateTables() {
  // List of specific job names
  const specificJobNames = ["3x2.5", "5x1.5", "1x1.5", "3x1.5", "5x6"];

  for (let i = 0; i < 5; i++) {
    // Use specific job names instead of generating random ones
    const jobName = specificJobNames[i];

    const futureDays = Math.floor(Math.random() * 5) + 1;
    const randomDeadline = getFutureDate(futureDays);

    const randomProfit = Math.floor(Math.random() * 100) + 1;

    jobs.push(jobName);
    deadlines.push(randomDeadline);
    profits.push(randomProfit);
  }
  updateTables();
  hideFirstRow(); // Hide the first row after populating the tables
}

function updateTable(tableId, data, header) {
  const table = document.getElementById(tableId);

  while (table.rows.length > 0) {
    table.deleteRow(0);
  }

  const headerRow = table.insertRow(0);
  const indexCell = headerRow.insertCell(0);
  indexCell.innerHTML = "<th><b>Index</b></th>";

  if (tableId === "tableSlots") {
    const today = new Date();
    for (let i = 0; i < data.length; i++) {
      const cell = headerRow.insertCell(i + 1);
      const date = new Date(today);
      date.setDate(today.getDate() + i);
      cell.innerHTML = `<th>${date.toLocaleDateString()}</th>`;
    }
  } else if (tableId === "tableDeadlines") {
    for (let i = 0; i < data.length; i++) {
      const cell = headerRow.insertCell(i + 1);
      const deadlineDate = new Date(data[i]);
      cell.innerHTML = `<th>${deadlineDate.toLocaleDateString()}</th>`;
    }
  } else {
    for (let i = 0; i < data.length; i++) {
      const cell = headerRow.insertCell(i + 1);
      cell.innerHTML = `<th>${i}</th>`;
    }
  }

  const row = table.insertRow(1);
  const headerCell = row.insertCell(0);
  headerCell.innerHTML = `<b>${header}</b>`;

  for (let i = 0; i < data.length; i++) {
    const cell = row.insertCell(i + 1);
    cell.innerHTML =
      data[i] instanceof Date ? data[i].toLocaleDateString() : data[i];
  }
}

function openJobModal() {
  document.getElementById("jobModal").style.display = "flex";
}

function closeJobModal() {
  document.getElementById("jobModal").style.display = "none";
}

function addNewJob() {
  const jobName = document.getElementById("jobName").value;
  const jobDeadlineInput = document.getElementById("jobDeadline").value;
  const jobProfit = document.getElementById("jobProfit").value;

  // Convert the job deadline to a Date object
  const jobDeadline = new Date(jobDeadlineInput);

  // Push the job details to their respective arrays
  jobs.push(jobName);
  deadlines.push(jobDeadline); // Store the Date object directly
  profits.push(jobProfit);

  // Update tables and apply the date format
  updateTables();
  hideFirstRow(); // Hide the first row after adding a new job
  addNewSlot();
  closeJobModal();
}

function addNewSlot() {
  slots.push("-");

  updateTable("tableSlots", slots, "Data");
  hideFirstRow(); // Hide the first row after adding a new slot
}

function updateTables() {
  updateTable("tableJobs", jobs, "Job Name");
  updateTable("tableDeadlines", deadlines, "Deadline");
  updateTable("tableProfits", profits, "Profit");
  updateTable("tableSlots", slots, "Data");
  hideFirstRow(); // Hide the first row after updating the tables
}

function hideFirstRow() {
  const tableIds = [
    "tableJobs",
    "tableDeadlines",
    "tableProfits",
    "tableSlots",
  ];

  tableIds.forEach((tableId) => {
    const table = document.getElementById(tableId);
    if (table) {
      if (tableId !== "tableSlots") {
        const firstRow = table.querySelector("tr:nth-child(1)");
        if (firstRow) {
          firstRow.style.display = "none";
        }
      }
    }
  });
}

function greedyJobScheduling(jobNames, deadlines, profits, tableSlots) {
  const N = deadlines.length;

  // Array of indices sorted by profits in descending order
  const indices = Array.from({ length: N }, (_, i) => i);
  bubbleSort(indices, (a, b) => profits[a] - profits[b]); // Sort by profits in descending order

  // Convert tableSlots to actual date objects (if they are not already)
  const slotDates = tableSlots.map((slot, index) => {
    const today = new Date();
    if (slot === "-") {
      const futureDate = new Date(today);
      futureDate.setDate(today.getDate() + index); // Calculate future dates based on index
      return futureDate;
    }
    return new Date(slot);
  });

  // Bubble Sort (Modified to handle deadline sorting first, and profit second)
  function bubbleSort(arr, compareFunction) {
    const N = arr.length;
    for (let i = 0; i < N - 1; i++) {
      for (let j = 0; j < N - i - 1; j++) {
        if (compareFunction(arr[j], arr[j + 1]) < 0) {
          let temp = arr[j];
          arr[j] = arr[j + 1];
          arr[j + 1] = temp;
        }
      }
    }
  }

  const result = new Array(slotDates.length).fill("-");

  // Iterate over sorted jobs by profit (high-profit jobs first)
  for (let i = 0; i < indices.length; i++) {
    const jobIdx = indices[i]; // Get the job index from the sorted array
    const jobDeadline = new Date(deadlines[jobIdx]); // Get the deadline for the current job

    // Assign job to the latest available slot that fits within its deadline
    for (let j = slotDates.length - 1; j >= 0; j--) {
      // Start from the latest slot
      if (result[j] === "-" && slotDates[j] <= jobDeadline) {
        result[j] = jobNames[jobIdx]; // Schedule job
        break; // Move to the next job after assigning
      }
    }
  }

  return result;
}

function sortJobs() {
  const sortedSchedule = greedyJobScheduling(jobs, deadlines, profits, slots);

  updateTable("tableSlots", sortedSchedule, "Data"); // Update the slot table with the sorted schedule
  hideFirstRow(); // Optionally hide the first row
}

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

let stepIndex = 0;

function playAlgorithm() {
  const sortedSchedule = greedyJobScheduling(jobs, deadlines, profits, slots);

  stepIndex = 0;

  performStep(sortedSchedule);
}

function stepForward() {
  const sortedSchedule = greedyJobScheduling(jobs, deadlines, profits, slots);

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
    const sortedSchedule = greedyJobScheduling(jobs, deadlines, profits, slots);
    const currentJob = sortedSchedule[stepIndex];

    removeColumnHighlight("tableJobs", currentJob);
    removeColumnHighlight("tableDeadlines", currentJob);
    removeColumnHighlight("tableProfits", currentJob);

    updateSlotsTable(sortedSchedule.slice(0, stepIndex));
  }
}

function updateSlotsTable(schedule) {
  const table = document.getElementById("tableSlots");

  // Ensure table has enough rows for slots
  let row = table.querySelector("tr:nth-child(2)");
  if (!row) {
    row = table.insertRow(2);
    const headerCell = row.insertCell(0);
    headerCell.innerHTML = `<b>Data</b>`;
  }

  // Clear existing cells
  for (let i = 1; i < row.cells.length; i++) {
    row.cells[i].innerHTML = "-";
  }

  // Update cells with the current schedule
  for (let i = 0; i < schedule.length; i++) {
    const cell = row.cells[i + 1];
    cell.innerHTML = schedule[i] !== "-" ? schedule[i] : "-";
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
