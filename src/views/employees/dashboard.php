<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link href=<?php echo BASE_URL . "assets/css/main.css" ?> rel="stylesheet">
    <script src=<?php echo BASE_URL . "assets/js/employees.js" ?> defer></script>
    <script src=<?php echo BASE_URL . "assets/js/navigator.js" ?> defer></script>
    <title>Dashboard</title>
</head>

<body>
<?php
    include BASE_PATH . '/assets/templates/navbar.php';
?>
    <table class="table" id="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Street No.</th>
                <th scope="col">City</th>
                <th scope="col">State</th>
                <th scope="col">Postal code</th>
                <th scope="col">Phone Number</th>
                <th>
                <a href=<?php echo BASE_URL . "employee/employee" ?>> <button type="submit" value="submit" class="btn" id="createNewEmployee"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7bc62d" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg></button></a>
               </th>
                        </tr>
        </thead>
        <tbody id="employeeTable">
        </tbody>

    </table>
    <?php
    if(isset($_SESSION["msg-added"])){
        $message = $_SESSION["msg-added"];
        echo "
        <dialog id='dialog' open class='dialog-ok'>$message</dialog>

        <script language='javascript'>
        setTimeout(function(){
            document.getElementById('dialog').remove();
        },3000);
        </script>";
    unset($_SESSION["msg-added"]);
    
    } else if (isset($_SESSION["msg-error"])){
        $message = $_SESSION["msg-error"];
        echo "
        <dialog id='dialog' open class='dialog--error'>$message</dialog>
        
        <script language='javascript'>
        setTimeout(function(){
            document.getElementById('dialog').remove();
        },3000);
        </script>";
    unset($_SESSION["msg-error"]);
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>