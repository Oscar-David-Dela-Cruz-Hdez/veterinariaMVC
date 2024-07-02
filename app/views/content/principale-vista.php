    <header>
        <h1>Planeta Mascotas</h1>
        <div>
            <img src="/resources/" alt="">
        </div>
        <form class="busqueda">
            <input type="search" id="barra_busqueda" placeholder="Buscar barritas de cereal">
            <button type="submit"><i class="fas fa-search"></i> Buscar</button>
        </form> 
        <nav>
            <a href="<?php echo APP_URL; ?>iniziaSessione/">Inicio de sesion</a>
            <a href="<?php echo APP_URL; ?>documentazione/">Registro</a>
        </nav>
    </header>
    
    <main class="product-list">
        <div class="product-card">
            <img src="<?php echo APP_URL; ?>app/views/img/asd.png" alt="Producto 1">
            <h3><i class="fas fa-paw"></i> Alimento</h3>
            <p class="price">$50</p>
            <p class="stock">En existencia</p>
        </div>
        <div class="product-card">
            <img src="<?php echo APP_URL; ?>app/views/img/asdfdf.jpg" alt="Producto 2">
            <h3><i class="fas fa-paw"></i> Juguetes</h3>
            <p class="price">$60</p>
            <p class="stock">En existencia</p>
        </div>
        <div class="product-card">
            <img src="<?php echo APP_URL; ?>app/views/img/asdfsd.jpg" alt="Producto 3">
            <h3><i class="fas fa-paw"></i> Productos de limpieza</h3>
            <p class="price">$70</p>
            <p class="stock">En existencia</p>
        </div>
    </main>
    <!-- Modal -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img id="modalImage" src="" alt="Product Image">
            <h3 id="modalTitle"></h3>
            <p id="modalDescription"></p>
            <p class="price" id="modalPrice"></p>
            <p class="stock" id="modalStock"></p>
            <label for="quantity">Cantidad:</label>
            <input type="number" id="quantity" name="quantity" value="1" min="1">
            <button id="addToCartButton"><i class="fas fa-shopping-cart"></i> Agregar al carrito</button>
        </div>
    </div>

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
    <!-- El script para el modal -->
    <script src="/public/Script/vistaProducto.js"></script> 