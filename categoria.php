<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="lenguaje">
    <link rel="stylesheet" href="./css/carro.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/script.js"></script>
    <script src="./js/categoria.js"></script>
    <script src="./js/carro.js"></script>
    <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(364822)</script>
    <title>Categoria</title>
   
</head>
<body>
    <header class="encabezado">
        <nav class="logo-info">
            <div class="logo-izquierdo">
               
                <select name="elegir" id="">
                    <option value="Español">Español</option>
                    <option value="Ingles">Ingles</option>
                </select>
                <i class="bi bi-telephone-fill"></i>
                <p>+51 721311415</p>
                
                
            </div>
            <div class="logo-centro">
                <a href="index.html"><img src="img/logo/iconno.ico" alt=""></a>
            </div>
            <div class="logo-derecho">
                <a href="loginVans.php"><i class="bi bi-person-fill"></i></a> 
                <div class="container-icon">
					<div class="container-cart-icon">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke-width="1.5"
							stroke="currentColor"
							class="icon-cart"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
							/>
						</svg>
						<div class="count-products">
							<span id="contador-productos">0</span>
						</div>
					</div>
	
					<div class="container-cart-products hidden-cart">
						<div class="row-product hidden">
							<div class="cart-product">
								<!-- <div class="info-cart-product">
									<span class="cantidad-producto-carrito">1</span>
									<p class="titulo-producto-carrito">Zapatos Nike</p>
									<span class="precio-producto-carrito">$80</span>
								</div>
								<svg
									xmlns="http://www.w3.org/2000/svg"
									fill="none"
									viewBox="0 0 24 24"
									stroke-width="1.5"
									stroke="currentColor"
									class="icon-close"
								>
									<path
										stroke-linecap="round"
										stroke-linejoin="round"
										d="M6 18L18 6M6 6l12 12"
									/>
								</svg> -->
							</div> 
						</div>
	
						<div class="cart-total hidden">
							<h3>Total:</h3>
							<span class="total-pagar">$0</span>
						</div>
						<p class="cart-empty"><!-- El carrito está vacío< --></p>
						<div class="boton-de-compra"><button  id="btn-comp">Comprar</button></div>
					</div>
				</div>
                <button class="boton-circular" onclick="cambiarFondo()"></button>
                <button class="boton-circular2" onclick="cambiarFondo2()"></button> 
            </div>
            <div id="notificacion-container" class="notificacion-container"></div>
        </nav>
        <hr> 
        <nav class="menu">
            <ul>
                <a href="index.html" class="link-menu" id="inicio"><li>Inicio </li> </a>
                <a href="categoria.php" class="link-menu" id="categoria"><li> Categoria </li></a>
                <a href="blog.php" class="link-menu"><li>Blog</li></a>
                <a href="contacto.html" class="link-menu"><li>Contáctanos</li></a>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <main>
        <section class="nombre-pagina">
            <h4>CATEGORIA</h4>

            <select name="elegir-categoria" id="elegir-cate">
                <option value="todos">Todos </option>
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
            </select>
        </section>
        <br>
        <h2>Zapatillas</h2>
        <p>En VANS, creemos que el estilo urbano es una forma de expresión. Las zapatillas Vans son una parte integral de ese estilo, y estamos emocionados de ser tu destino de elección para encontrar las últimas tendencias y clásicos eternos. Visítanos hoy mismo y sumérgete en el mundo de las zapatillas urbanas de Vans. Tu próxima aventura urbana comienza aquí..</p><br>
        
        <!-- Hacer dinámico< -->
        <div class="main">
            
        <?php 
        require("conexion.php");  
        // Realiza una consulta para seleccionar todos los productos
        $sql = "SELECT id_producto, nombre_producto, descripcion, precio, imagen FROM producto";
        $result = $conexion->query($sql);
        ?>

        <!-- Hacer dinámico -->
        <div class="main">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='product-card'>";
                    echo "<img src='data:image/jpeg;base64," . base64_encode($row['imagen']) . "' alt='" . $row['nombre_producto'] . "'>";
                    echo "<div class='info-card'>";
                    echo "<h2>" . $row['nombre_producto'] . "</h2>";
                    echo "<span>" . $row['descripcion'] . "</span>";
                    echo "<p class='price'>$" . $row['precio'] . "</p>";
                    echo "<button class='agregar' id='agregar-carrito'>Agregar al carrito</button>";
                    // Puedes añadir más detalles o acciones según tus necesidades
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "No se encontraron productos.";
            }
            // Cierra la conexión si ya no es necesaria
            $conexion->close();
            ?>
        </div>
        
    </main>

    <br>
    <br><br>
    <footer>
        <nav class="footer-logo">
            <img src="./img/logo/iconno.ico" alt="logo-imagen">
            
             <span>En VANS, creemos que el estilo urbano es una forma de expresión. 
                Las zapatillas Vans son una parte integral de ese estilo, y estamos emocionados de ser tu destino de elección para 
                encontrar las últimas tendencias y clásicos eternos  
            </span>

        </nav>
        <nav class="footer-logo2">
            <ul>
                <p>Compañia</p>
                <a href="#inicio"><li>Inicio</li></a>
                <a href="categoria.html"><li>Nuestros Productos</li></a>
                <a href="blog.html"><li>Blog</li></a>
                <a href="contacto.html"><li>Contactanos</li></a>
                
            </ul>

        </nav>
        <nav class="footer-logo3">
            <ul>
                <p>Nuestras Redes</p>
                <a href="https://www.facebook.com/" target="_blank"><li><i class="bi bi-facebook"></i>   Facebook</li></a>
                <a href="https://wa.me/qr/X553IXENOAY2F1" target="_blank"><li><i class="bi bi-twitter"></i>   Twiter</li></a>
                <a href="https://www.instagram.com/" target="_blank"><li><i class="bi bi-instagram"></i>   Instagram</li></a>
                <a href="https://api.whatsapp.com/send?phone=51923600120" target="_blank"><li><i class="bi bi-whatsapp"></i>   WhatsApp</li></a>
            </ul>

        </nav>
        <nav class="footer-logo4">
            <ul>
                <p>Información de la tienda</p>
                <a href="contacto.html"><li><i class="bi bi-geo-alt-fill"></i>Jockey Plaza, Av. Javier Prado Este 4200, Santiago de Surco 15023</li></a>
                <a href="contacto.html"><li><i class="bi bi-telephone-fill"></i> 2926565</li></a>
                <a href="contacto.html"><li><i class="bi bi-envelope-at-fill"></i> emailvans@store.com</li></a>
            </ul>

        </nav>

    </footer>
    <script>

    // EVENTO CAMBIAR DE CATEGORIA
    var select = document.getElementById("elegir-cate");

    // Evento change para redireccionar y seleccionar la opción adecuada
    select.addEventListener("change", function () {
        var seleccion = this.value;
        if (seleccion === "hombre") {
            window.location.href = "categorias/hombre.html";
        } else if (seleccion === "mujer") {
            window.location.href = "categorias/mujer.html";
        } else if (seleccion === "todos"){
            window.location.href = "categoria.php";
            
        }
    });

    // Obtener la página actual
    var currentPage = window.location.pathname;

    // Establecer la opción seleccionada basada en la página actual
    if (currentPage.endsWith("/hombre.html")) {
        select.value = "hombre";
    } else if (currentPage.endsWith("/mujer.html")) {
        select.value = "mujer";
    } else if (currentPage.endsWith("categoria.php")){
        select.value = "todos";
    }

	// PARA CARRITO 
const btnCart = document.querySelector('.container-cart-icon')
const containerCartProducts = document.querySelector('.container-cart-products')

btnCart.addEventListener('click', () => {
    containerCartProducts.classList.toggle('hidden-cart')
})

const cartInfo = document.querySelector('.cart-product');
const rowProduct = document.querySelector('.row-product');

// Lista de todos los contenedores de productos
const productsList = document.querySelector('.main');

// Variable de arreglos de Productos
let allProducts = [];

const valorTotal = document.querySelector('.total-pagar');

const countProducts = document.querySelector('#contador-productos');

const cartEmpty = document.querySelector('.cart-empty');
const cartTotal = document.querySelector('.cart-total');

productsList.addEventListener('click', e => {
	Swal.fire({
			title: "¡agregado al carrito!",
			icon: "success"
			});
	if (e.target.classList.contains('agregar')) {



		const product = e.target.parentElement;

		const infoProduct = {
			quantity: 1,
			title: product.querySelector('h2').textContent,
			price: product.querySelector('p').textContent,
		};

		const exits = allProducts.some(
			product => product.title === infoProduct.title
		);

		if (exits) {
			const products = allProducts.map(product => {
				if (product.title === infoProduct.title) {
					product.quantity++;
					return product;
				} else {
					return product;
				}
			});
			allProducts = [...products];
		} else {
			allProducts = [...allProducts, infoProduct];
		}
		


		showHTML();
	}
});

rowProduct.addEventListener('click', e => {
	if (e.target.classList.contains('icon-close')) {
		const product = e.target.parentElement;
		const title = product.querySelector('p').textContent;

		allProducts = allProducts.filter(
			product => product.title !== title
		);

		console.log(allProducts);

		showHTML();
	}
});

// Funcion para mostrar  HTML
const showHTML = () => {
	if (!allProducts.length) {
		cartEmpty.classList.remove('hidden');
		rowProduct.classList.add('hidden');
		cartTotal.classList.add('hidden');
	} else {
		
		cartEmpty.classList.add('hidden');
		rowProduct.classList.remove('hidden');
		cartTotal.classList.remove('hidden');
	}

	// Limpiar HTML
	rowProduct.innerHTML = '';

	let total = 0;
	let totalOfProducts = 0;

	allProducts.forEach(product => {
		const containerProduct = document.createElement('div');
		containerProduct.classList.add('cart-product');

		containerProduct.innerHTML = `
            <div class="info-cart-product">
                <span class="cantidad-producto-carrito">${product.quantity}</span>
                <p class="titulo-producto-carrito">${product.title}</p>
                <span class="precio-producto-carrito">${product.price}</span>
            </div>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="icon-close"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        `;

		rowProduct.append(containerProduct);

		total =
			total + parseInt(product.quantity * product.price.slice(1));
		totalOfProducts = totalOfProducts + product.quantity;
	});

	valorTotal.innerText = `$${total}`;
	countProducts.innerText = totalOfProducts;


	
};

const myButton = document.getElementById('btn-comp');

  // Agregar evento de clic al botón
  myButton.addEventListener('click', () => {
    Swal.fire({
      title: "¡Gracias por tu compra!",
      text: "¡Disfrute su compra!",
      icon: "success"
    });
	
  });

</script>
</body>
</html>