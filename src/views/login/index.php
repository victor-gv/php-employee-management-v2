<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <main class="container">
        <section class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Login</h2>
                <div class="card my-5">
                    <form class="card-body cardbody-color p-lg-5" action="login/loginUser" method="post" autocomplete="on">
                        <div class="mb-3">
                            <input type="text"  id="Username" name="username" aria-describedby="emailHelp" placeholder="User Name">
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password"  id="password" placeholder="password">
                        </div>
                        <div class="text-center"><button type="submit" name="submit" class="btn btn-dark px-5 mb-5 w-100">Login</button></div>
       
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>