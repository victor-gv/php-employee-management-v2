<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
    <link href=<?php echo BASE_URL . "assets/css/error.css" ?> rel="stylesheet">
    <title>Error</title>
</head>
<body>
    <section class="page_404">
        <div class="container">
            <div class="row">	
            <div class="col-sm-12 ">
            <div class="col-sm-10 col-sm-offset-1  text-center">
            <div class="four_zero_four_bg">
                <h1 class="text-center ">404</h1>
            
            
            </div>
            
            <div class="contant_box_404">
            <h3 class="h2">
            Look like you're lost
            </h3>
            
            <p><?php if(isset($this->message)){echo $this->message;}?></p>
            
            <a href="<?= BASE_URL . "login/index" ?>" class="link_404">Go to Home</a>
        </div>
            </div>
            </div>
            </div>
        </div>
    </section>
</body>
</html>

