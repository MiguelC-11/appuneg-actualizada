<?php

require_once '../header.php';

?>

<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Registro</h1>
      <form method="post" action="register.php">
        <div class="input-group">
          <img class="iconos_login" src="user-line.png" alt="">
          <input type="text" name="fName" id="fName" placeholder="First Name" required>
          <label for="fname">Nombre</label>
        </div>
        <div class="input-group">
            <img class="iconos_login" src="user-line.png" alt="">
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Apellido</label>
        </div>
        <div class="input-group">
            <img class="iconos_login" src="mail-line.png" alt="">
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Correo</label>
        </div>
        <div class="input-group">
            <img class="iconos_login" src="lock-line.png" alt="">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Contraseña</label>
        </div>
      <input type="submit" class="btn" value="Registrarse" name="signUp">
      </form>

      <div class="links">
        <p>¿Ya posees una cuenta?</p>
        <button id="signInButton">Inicia sesión</button>
      </div>
    </div>
    
<!--------- Esta es la parte para iniciar sesion ---->

    <div class="container" id="signIn">
        <h1 class="form-title">Inicia Sesión</h1>
        <form method="post" action="register.php">
          <div class="input-group">
            <img class="iconos_login" src="user-line.png" alt=""> 
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Correo</label>
          </div>
          <div class="input-group">
              <img class="iconos_login" src="lock-line.png" alt="">
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Contraseña</label>
          </div>
          <p class="recover">

            <!----- Aqui tengo que agregar la Recuperacion de Contraseña ---->

            <a href="#">Recuperacion de contraseña</a>
          </p>
        <input type="submit" class="btn" value="Inicio de Sesión" name="signIn">
        </form>

        <div class="links">
          <p>¿Aún no te has registrado?</p>
          <button id="signUpButton">Registrarse</button>
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>
