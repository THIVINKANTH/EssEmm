<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="webstite icon" type="png" href="Images/google.png" >
    <link rel="stylesheet" href="design.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
        <div class="row  justify-content-center" id="page">
            <div class="col" id="welcome">
                <p class="fs-1 text-light">Welcome to website</p>
                <span class="text-light"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, ex ratione et consequuntur magni dolorem aut ipsum doloremque iste in similique unde voluptatem suscipit minima non itaque praesentium eligendi possimus.</span>
            </div>
            <div class="col" id="loginpage">
                <p class="user">USER LOGIN</p>
                <form class="inline mt-4" name="validate" id="validate" method="POST" action="loginsql.php">
                    <div class="input-icons" id="username">
                        <div style="width:100%">
                            <i class="fas fa-user fs-5 ms-3 mt-2"></i>
                            <input type="text" class="input-field" id="input" name="Username"/>
                        </div>
                        <span id="uerr"></span>
                    </div>
                    <div class="mt-4 input-icons" id="username">
                        <div style="width:100%">
                            <i class="fas fa-lock fs-5 ms-3 mt-2"></i>
                            <input type="password" class="input-field" id="input" name="Password"/>
                        </div>
                        <span id="perr"></span>
                    </div>
                    <div class="mt-3 d-flex" id="checkbox" >
                        <input type="checkbox" id="box">Remember
                        <div>
                            <span class="ms-5">Forgotpassword?</span>
                        </div>
                    </div>
                    <div class="mt-5 d-flex" id="footer">
                        <button id="login" class="text-light" type="submit" name="submit">LOGIN</button>
                        <div>
                            <a href="registerform.php" class="regs text-light ms-3"  type="button">Register</a>
                        </div>
                    </div>
                            
                </form>
            </div>
        </div>
        <script src="active.js"></script>
</body>
</html>