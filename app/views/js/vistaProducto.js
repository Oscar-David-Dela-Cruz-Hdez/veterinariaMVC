document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('productModal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalDescription = document.getElementById('modalDescription');
    const modalPrice = document.getElementById('modalPrice');
    const modalStock = document.getElementById('modalStock');
    const closeModal = document.getElementsByClassName('close')[0];

    const products = [
        { id: 1, name: "Producto 1", image: "<?php echo APP_URL; ?>app/views/img/asd.png", description: "Descripción del Producto 1", price: 50, stock: 10 },
        { id: 2, name: "Producto 2", image: "<?php echo APP_URL; ?>app/views/img/asdfdf.jpg", description: "Descripción del Producto 2", price: 60, stock: 8 },
        { id: 3, name: "Producto 3", image: "<?php echo APP_URL; ?>app/views/img/asdfsd.jpg", description: "Descripción del Producto 3", price: 70, stock: 15 },
    ];

    // Función para abrir el modal
    function openModal(product) {
        modalImage.src = product.image;
        modalTitle.textContent = product.name;
        modalDescription.textContent = product.description;
        modalPrice.textContent = `$${product.price}`;
        modalStock.textContent = `En existencia: ${product.stock}`;
        modal.style.display = "block";
    }

    // Función para cerrar el modal
    closeModal.onclick = function() {
        modal.style.display = "none";
    }

    // Cerrar el modal al hacer clic fuera del contenido
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    document.querySelectorAll('.slide').forEach((slide, index) => {
        slide.addEventListener('click', () => {
            openModal(products[index]);
        });
    });
});