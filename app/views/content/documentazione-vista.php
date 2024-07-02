    <header>
        <h1>Planeta Mascotas</h1>
        <div>
            <img src="/resources/" alt="">
        </div>
        <nav>
            <a href="<?php echo APP_URL; ?>iniziaSessione/">Inicio de sesion</a>
            <a href="<?php echo APP_URL; ?>./principale/">Menu</a>
        </nav>
    </header>

    <main>
        <div class="contenedor-login">
            <form class="formulario-login">
                <h2 id="dato">Registrarse</h2>
                <div class="grupo1" id="nameInput">
                    <label for="username"><i class="fas fa-user"></i> Usuario:</label>
                    <input type="text" id="username" class="form-control" name="username" pattern="[A-Za-z\s]+" required>
                </div>
                <div class="grupo2">
                    <label for="email"><i class="fas fa-message"></i> correo:</label>
                    
                    <input type="email" id="email" class="form-control" name="email" required>
                </div>
                <div class="grupo3" >
                    <label for="password"><i class="fas fa-lock"></i> Contraseña:</label>

                    <input type="password" id="password" class="form-control" name="password" minlength="8" maxlength="15" required>
                </div>
                <button type="submit" id="signUp">Registrarse</button>
                <button type="submit" id="signIn">Iniciar sesion</button>
                <ul>¿Ya tienes una cuenta?<a href="/public/inicioSesion.html"> inicia sesion</a></ul>
            </form>
        </div>
    </main>
    <script src="/public/Script/script.js"></script>
    <footer>
        <center>
        <div class="contenedor-abajo">
            <div class="seccion-contacto">
                <h2>Contacto</h2>
                <ul>
                    <li><a href="http://">Facebook</a></li>
                    <li><a href="http://">Whatsapp</a></li>
                    <li><a href="http://">Teléfono</a></li>
                </ul>
            </div>
            <div class="seccion-enlaces">
                <h2>Quienes somos</h2>
                <ul>
                    <li><a href="#quienes-somos">Quienes Somos</a></li>
                    <li><a href="#vision">Visión</a></li>
                    <li><a href="#mision">Misión</a></li>
                    <li><a href="#acerca-de">Acerca de</a></li>
                </ul>
            </div>
            <div class="seccion-metodos">
                <h2>Métodos de pago</h2>
                <ul>
                    <li><a href="http://">Tarjetas de crédito/débito</a></li>
                    <li><a href="http://">Pago en efectivo</a></li>
                    <li><a href="http://">Pago a meses</a></li>
                </ul>
            </div>
        </div></center>
    </footer>