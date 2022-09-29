@extends ('layout')

@section ('content')

    <div class="container">     
     <div class="login-container">
       <div class="register">
         <h2>Register</h2>
        <form class="col text-center" method="post" action="{{route('register')}}">
            @csrf
            <input type="text" placeholder="Name" class="correo" name="name">
           <input type="email" placeholder="Email" class="correo" name="email">
           <input type="password" placeholder="Password" class="pass" name="password">
           <input type="submit" class="submit" value="Register">
         </form>
       </div>
       <div class="login">
         <h2>Login</h2>
          <form class="col text-center" method="post" action="{{route('login')}}">
            @csrf
           <input type="email" placeholder="Email" class="correo" name="email">
           <input type="password" placeholder="Password" class="pass" name="password">
           <input type="submit" class="submit mt-5 p-2" value="Login">
         </form>


       </div>
     </div>
   </div>
@endsection














