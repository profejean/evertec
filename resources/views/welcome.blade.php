@extends ('layout')

@section ('content')

    <div class="container">     
     <div class="login-container">
       <div class="register">
         <h2>Registrarse</h2>
        <form class="col text-center" method="post" action="{{route('register')}}">
            @csrf
            <input type="text" placeholder="Nombre" class="correo" name="name">
           <input type="email" placeholder="Correo" class="correo" name="email">
           <input type="password" placeholder="Contraseña" class="pass" name="password">
           <input type="submit" class="submit" value="REGISTRARSE">
         </form>
       </div>
       <div class="login">
         <h2>Iniciar Sesión</h2>
          <form class="col text-center" method="post" action="{{route('login')}}">
            @csrf
           <input type="email" placeholder="Correo" class="correo" name="email">
           <input type="password" placeholder="Contraseña" class="pass" name="password">
           <input type="submit" class="submit mt-5 p-2" value="Acceder">
         </form>


       </div>
     </div>
   </div>
@endsection














