

const dashboardTag = document.getElementById("dashboardTag");
const employeeTag = document.getElementById("employeeTag");
// Adds the class to give style depending the page you are
if (window.location.href.includes("dashboard")) {
dashboardTag.classList.add("current-tag");
} else {
    employeeTag.classList.add("current-tag");
}
