//const url = "../src/library/employeeController.php?action=getDataEmployees&source=js";


getAllEmployees();
function getAllEmployees() {
  const url = document.getElementById("main-nav").getAttribute("data") + "employee/getEmployees";
    fetch(url)
    .then(async response => {
      try{
        const data = await response.json();
        console.log(data);
        renderDashboard(data);
      }catch(error){
        console.log(error);
      }
    });
}

function renderDashboard(data) {
  data.map((employee) => {
    const tableBody = document.getElementById("employeeTable");
    let tr = document.createElement("tr");
    let tdId = document.createElement("td");
    tableBody.append(tr);

    // ID EMPLOYEE
    tr.append(tdId);
    tdId.append(employee.id);
    //NAME EMPLOYEE
    let tdName = document.createElement("td");
    tr.append(tdName);
    tdName.append(employee.first_name);
    //EMAIL EMPLOYEE
    let tdEmail = document.createElement("td");
    tr.append(tdEmail);
    tdEmail.append(employee.email);
    //AGE EMPLOYEE
    let tdAge = document.createElement("td");
    tr.append(tdAge);
    tdAge.append(employee.age);
    // STREET NUMBER EMPLOYEE
    let tdStreet = document.createElement("td");
    tr.append(tdStreet);
    tdStreet.append(employee.streetAddress);
    // CITY EMPLOYEE
    let tdCity = document.createElement("td");
    tr.append(tdCity);
    tdCity.append(employee.city);
    //STATE EMPLOYEE
    let tdState = document.createElement("td");
    tr.append(tdState);
    tdState.append(employee.state);
    //POSTAL CODE EMPLOYEE
    let tdPostal = document.createElement("td");
    tr.append(tdPostal);
    tdPostal.append(employee.postalCode);
    //PHONE NUMBER EMPLOYEE
    let tdPhone = document.createElement("td");
    tr.append(tdPhone);
    tdPhone.append(employee.phoneNumber);
    //BUTTON TO DELETE and modify THE EMPLOYEE
    let btnTrash = document.createElement("button");
    btnTrash.classList.add('btn__trash', 'btn', 'btn-light');
 
    btnTrash.setAttribute('id','btnDelete');
    btnTrash.textContent="Delete";
    btnTrash.setAttribute('data-id', employee.id);
    btnTrash.addEventListener('click', deleteEmployee);
    tr.append(btnTrash);
    //button modify
    let btnModify = document.createElement("button");
    btnModify.classList.add('btn__Modify','btn', 'btn-warning');
    btnModify.setAttribute('id','btnModify');
    btnModify.textContent="Modify";
    btnModify.setAttribute('data-id', employee.id);
    btnModify.addEventListener('click', showEmployee);
    tr.append(btnModify);
  });
}



function deleteEmployee(e) {
  const id = e.currentTarget.getAttribute('data-id');
  const url = document.getElementById("main-nav").getAttribute("data") + "employee/deleteEmployee/" + id;
  fetch(url)
  .then(async response => {
    try{
      const data = await response.json();
      console.log(data);
    }catch(error){
      console.log(error);
    }
  });
deleteTable();
getAllEmployees();
}


function showEmployee(e) {
  const id = e.currentTarget.getAttribute('data-id');
  const url = document.getElementById("main-nav").getAttribute("data") + "employee/showEmployee/" + id;

  location.href = url;
}


function deleteTable(){
  const table = document.getElementById("employeeTable");
  if (table.children != 0){
    Array.from(table.children).forEach(element=> {
      table.removeChild(element);
      });
      
  }
}