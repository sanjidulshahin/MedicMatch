// JavaScript to show and hide pop-up forms and overlay
// Add event listener for Add Hospital button
document.getElementById("addHospitalBtn").onclick = function () {
  document.getElementById("addHospitalPopup").classList.add("active");
  document.getElementById("overlay").classList.add("active");
};

// Add event listener for Delete Hospital button
document.getElementById("deleteHospitalBtn").onclick = function () {
  document.getElementById("deleteHospitalPopup").classList.add("active");
  document.getElementById("overlay").classList.add("active");
};

// Add event listener for Add Doctor button
document.getElementById("addDoctorBtn").onclick = function () {
  document.getElementById("addDoctorPopup").classList.add("active");
  document.getElementById("overlay").classList.add("active");
};

// Add event listener for Delete Doctor button
document.getElementById("deleteDoctorBtn").onclick = function () {
  document.getElementById("deleteDoctorPopup").classList.add("active");
  document.getElementById("overlay").classList.add("active");
};

// Add event listeners for cancel buttons
document.querySelectorAll(".cancel-btn").forEach(function (cancelBtn) {
  cancelBtn.onclick = function () {
    // Remove 'active' class from the pop-up container and overlay
    document
      .querySelectorAll(".popup-container.active")
      .forEach(function (element) {
        element.classList.remove("active");
      });
    document.getElementById("overlay").classList.remove("active");
  };
});

// Close pop-up forms and overlay when clicking outside the forms
document.getElementById("overlay").onclick = function () {
  document
    .querySelectorAll(".popup-container.active")
    .forEach(function (element) {
      element.classList.remove("active");
    });
  this.classList.remove("active");
};

// ajax request to get the doctor chart data
// $.ajax({
//   url: "config-dashboard.php",
//   dataType: "json",
//   success: function (data) {
//     // Process the data received from the server
//     displayDoctorChart(data);
//   },
//   error: function (xhr, status, error) {
//     // Handle errors
//     console.error(xhr.responseText);
//   },
// });

// function displayDoctorChart(data) {
//   var cardDiv = $("#doctor-chart");
//   cardDiv.append(
//     `
//     <canvas id="chart-doctor" width="200" height="200"></canvas>
//     `
//   );
//   data.forEach((arr) => {
//     var canvas = document.getElementById(`chart-${project.projectName}`);
//     if (canvas) {
//       // Chart configuration
//       const chartData = {
//         labels: [arr[0], "Not Completed"],
//         datasets: [
//           {
//             label: "Task Status",
//             data: [
//               parseInt(project.completedTasks),
//               parseInt(project.notCompletedTasks),
//             ],
//             backgroundColor: ["rgb(75, 192, 192)", "rgb(255, 99, 132)"],
//           },
//         ],
//       };

//       const chartConfig = {
//         type: "doughnut", // Change the chart type to doughnut
//         data: chartData,
//       };

//       // Create chart
//       new Chart(canvas, chartConfig);
//     }
//   });
// }
