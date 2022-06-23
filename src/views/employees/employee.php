
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
  <form action=<?php if(!isset($this->employee)){echo BASE_URL . "employee/addEmployee";}else{echo BASE_URL . "employee/modifyEmployee/" . $this->employee['id'];} ?> method="post" class="form">
    <input type="hidden" name="id" value = <?php if(isset($this->employee)){echo $this->employee['id'];}else{echo "0";}?>>
    <div class="row">
      <label for="first_name">Name</label>
      <input type="text" class="form-control-file" name="first_name" id="name" value = <?php if(isset($this->employee)){echo $this->employee['first_name'];}?>>

      <!-- <input type="hidden" name=""> -->

      <label for="last_name">Last Name</label>
      <input type="text" class="form-control-file" name="last_name" id="lastname" value = <?php if(isset($this->employee)){echo $this->employee['last_name'];}?>>
    </div>
    <div class="row">
      <label for="email">E-mail</label>
      <input type="email" class="form-control-file" name="email" id="email" value = <?php if(isset($this->employee)){echo $this->employee['email'];}?>>

      <label for="gender">Gender</label>
      <select name="gender" class="form-control-file" id="gender" value = <?php if(isset($this->employee)){echo $this->employee['gender'];}?>>
        <option value="man">Man</option>
        <option value="woman">Woman</option>
        <option value="others">Others</option>
      </select>
    </div>
    <div class="row">
      <label for="city">City</label>
      <input type="text" required class="form-control-file" name="city" id="city" value = <?php if(isset($this->employee)){echo $this->employee['city'];}?>>

      <label for="streetAddress">Streeet Adress</label>
      <input type="text" required class="form-control-file" name="streetAddress" id="streetAdress" value = <?php if(isset($this->employee)){echo $this->employee['streetAddress'];}?>>
    </div>
    <div class="row">
      <label for="state">State</label>
      <input type="text" required class="form-control-file" name="state" id="state" value = <?php if(isset($this->employee)){echo $this->employee['state'];}?>>

      <label for="age">Age</label>
      <input type="text" required class="form-control-file" name="age" id="age" value = <?php if(isset($this->employee)){echo $this->employee['age'];}?>>
    </div>
    <div class="row">
      <label for="postalCode"> Postal code</label>
      <input type="text" required class="form-control-file" name="postalCode" id="postalCode" value = <?php if(isset($this->employee)){echo $this->employee['postalCode'];}?>>

      <label for="phoneNumber">Phone Number</label>
      <input type="text" required class="form-control-file" name="phoneNumber" id="phoneNumber" value = <?php if(isset($this->employee)){echo $this->employee['phoneNumber'];}?>>
    </div>
    <div class="buttons">
      <button type="submit" required class="btn btn-primary">Submit</button>
      <a class="btn btn-secondary" id="returnToDashboard" href=<?php echo BASE_URL . "employee/dashboard" ?>>Return</a>
     
    </div>
  </form>
</body>

</html>