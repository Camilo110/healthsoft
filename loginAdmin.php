<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body class="bg-dark d-flex justify-content-center align-items-center vh-100">
    <form id="formlAdmin" action="php/login_admin_be.php" method="POST">
        <div class="bg-shadow p-5 rounded-5 text-secondary shadow" style="width: 25rem">
            <div class="d-flex justify-content-center ">
                <img src="/img/login-icon.svg" alt="login-icon" style="height: 7rem" />
            </div>
            <div class="text-center fs-3 fw-bold">Login Administrador</div>
            <div class="input-group mt-4">
                <div class="input-group-text bg-secondary">
                    <img src="/img/username-icon.svg" alt="username-icon" style="height: 1rem" />
                </div>
                <input class="form-control bg-light" type="text" placeholder="Username" name="codigo" />
            </div>
            <div class="input-group mt-1">
                <div class="input-group-text bg-secondary">
                    <img src="/img/password-icon.svg" alt="password-icon" style="height: 1rem" />
                </div>
                <input class="form-control bg-light" type="password" placeholder="Password" name="password" />
            </div>
            
            <div>
                <button type="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm btn-primary">Login</button>
            </div>
            
        </div>
    </form>
</body>

</html>