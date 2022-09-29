<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <link rel="stylesheet" href="{{asset('style.css')}}">
  </head>
  <body>


        @include('process') 
     
 
        <div class="container">     
          <div class="login-container">
            <div class="register">
              <h2>Register</h2>
              <form class="col text-center" method="post" action="{{route('register')}}">
                  @csrf
                  <input type="text" placeholder="Name" class="correo" name="name">
                <input type="email" placeholder="Email" class="correo" name="email">
                <input type="password" placeholder="Password" class="pass" name="password">
                <input type="submit" class="submit" value="REGISTRARSE">
              </form>
            </div>
            <div class="login">
              <h2>Login</h2>
                <form class="col text-center" method="post" action="{{route('login')}}">
                  @csrf
                <input type="email" placeholder="Email" class="correo" name="email">
                <input type="password" placeholder="Passsword" class="pass" name="password">
                <input type="submit" class="submit mt-5 p-2" value="Login">
              </form>


            </div>
          </div>
        </div>   

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

    















