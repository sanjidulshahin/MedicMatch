document.addEventListener("DOMContentLoaded", function () {
  const forms = document.querySelectorAll(".form-container");

  function toggleFormVisibility(form) {
    forms.forEach(function (f) {
      if (f !== form) {
        f.classList.add("hidden");
      }
    });
    form.classList.toggle("hidden");
  }

  document
    .getElementById("addHospitalBtn")
    .addEventListener("click", function () {
      toggleFormVisibility(document.getElementById("addHospitalForm"));
    });

  document
    .getElementById("deleteHospitalBtn")
    .addEventListener("click", function () {
      toggleFormVisibility(document.getElementById("deleteHospitalForm"));
    });

  document
    .getElementById("addDoctorBtn")
    .addEventListener("click", function () {
      toggleFormVisibility(document.getElementById("addDoctorForm"));
    });

  document
    .getElementById("deleteDoctorBtn")
    .addEventListener("click", function () {
      toggleFormVisibility(document.getElementById("deleteDoctorForm"));
    });
});
