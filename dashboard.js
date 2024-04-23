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
