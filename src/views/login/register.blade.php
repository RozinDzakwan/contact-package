<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"
        integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4" style="padding-top: 80px">
            <div class="card" style="padding: 10px">
                <h1 class="text-center">Register</h1>
                <Form action="{{ route('register') }}" method="POST">
                    @csrf
                    <label for="">Name</label><br>
                    <input class="form-control" type="text" name="name" placeholder="Input your valid name"><br>
                    <label for="">Email</label><br>
                    <input class="form-control" type="email" name="email" placeholder="Input your valid email"><br>
                    <label for="">Password</label><br>
                    <input class="form-control" type="password" name="password" placeholder="Input your password"><br>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Register</button><br>
                    </div>
                </Form>
                <div style="text-align: center">
                    <p>Do you already have an account?</p>
                    <p><a href="{{ route('login') }}">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
