<?php
$employee = $_SESSION['employee'];
$first_name = $employee[0]['first_name'];
$last_name = $employee[0]['last_name'];
$email = $employee[0]['email'];
$gender = $employee[0]['gender'];
$city = $employee[0]['city'];
$streetAddress = $employee[0]['streetAddress'];
$state = $employee[0]['state'];
$age = $employee[0]['age'];
$postalCode = $employee[0]['postalCode'];
$phoneNumber = $employee[0]['phoneNumber'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/main.css">
  <script src="../assets/js/employees.js" defer></script>
  <title>Employee Page</title>
</head>

<body>
  <h1 class="title">Employee Page</h1>
  <form action=<?php echo BASE_URL . "employee/addEmployee" ?> method="post" class="form">
    <!-- <input type="hidden" name="userid"> -->
    <div class="row">
      <label for="first_name">Name</label>
      <input type="text" class="form-control-file" name="first_name" id="name" value = <?= $first_name ?>>

      <!-- <input type="hidden" name=""> -->

      <label for="last_name">Last Name</label>
      <input type="text" class="form-control-file" name="last_name" id="lastname" value = <?= $last_name ?>>
    </div>
    <div class="row">
      <label for="email">E-mail</label>
      <input type="email" class="form-control-file" name="email" id="email" value = <?= $email ?>>

      <label for="gender">Gender</label>
      <select name="gender" class="form-control-file" id="gender" value = <?= $gender ?>>
        <option value="man">Man</option>
        <option value="woman">Woman</option>
        <option value="others">Others</option>
      </select>
    </div>
    <div class="row">
      <label for="city">City</label>
      <input type="text" required class="form-control-file" name="city" id="city" value = <?= $city ?>>

      <label for="streetAddress">Streeet Adress</label>
      <input type="text" required class="form-control-file" name="streetAddress" id="streetAdress" value = <?= $streetAddress ?>>
    </div>
    <div class="row">
      <label for="state">State</label>
      <input type="text" required class="form-control-file" name="state" id="state" value = <?= $state ?>>

      <label for="age">Age</label>
      <input type="text" required class="form-control-file" name="age" id="age" value = <?= $age ?>>
    </div>
    <div class="row">
      <label for="postalCode"> Postal code</label>
      <input type="text" required class="form-control-file" name="postalCode" id="postalCode" value = <?= $postalCode ?>>

      <label for="phoneNumber">Phone Number</label>
      <input type="text" required class="form-control-file" name="phoneNumber" id="phoneNumber" value = <?= $phoneNumber ?>>
    </div>
    <div class="buttons">
      <button type="submit" required class="btn btn-primary">Submit</button>
      <a class="btn btn-secondary" id="returnToDashboard" href=<?php echo BASE_URL . "employee/dashboard" ?>>Return</a>
     
    </div>
  </form>
</body>

</html>