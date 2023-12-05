<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="lenguaje">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/blog.css">
    <link rel="stylesheet" href="./css/style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="./js/script.js"></script>
    <script src="https://account.snatchbot.me/script.js"></script><script>window.sntchChat.Init(364822)</script>
    <title>Blog</title>
   
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
                <a href="carrito.html"><i class="bi bi-cart-fill"></i></a>
                <button class="boton-circular" onclick="cambiarFondo()"></button>
                <button class="boton-circular2" onclick="cambiarFondo2()"></button> 
            </div>
        </nav>
        <hr> 
        <nav class="menu">
            <ul>
                <a href="index.html" class="link-menu" id="inicio"><li>Inicio</li></a>
                <a href="categoria.php" class="link-menu"><li>Categoría</li></a>
                <a href="blog.php" class="link-menu"><li>Blog</li></a>
                <a href="contacto.html" class="link-menu"><li>Contáctanos</li></a>
            </ul>
        </nav>
    </header>
    <br>
    <br>
    <main>
        <section class="nombre-pagina">
            <h4>Blog</h4>

        </section>
        <br><br>
        <section class="conteiner-blog">
            <div class="blog-izquierda">
                <div class="recent-post">
                    
                    <div class="imgs">
                        <h2>Publicaiones Recientes</h2><br>
                        <img src="./img/baner/Blog_Vans1.webp" alt="">
                            
                    </div>
                    <div class="info">
                        <h4>Vans x ELIJAH BERLE - 30 Years of the Half Cab</h4><br>
                        <p><i class="bi bi-calendar-week"></i> 06 de octubre, 2023</p>
                    </div>
                </div>
                    <div class="blog-tags">
                        
                        
                    </div>
                </div>
                
            <div class="blog-derecha">
                <div class="infos">
                    <img src="./img/baner/Blog_Vans1.webp" alt="imagen-blog"><br><br>
                    <h2>Vans x ELIJAH BERLE - 30 Years of the Half Cab</h2><br>
                    <i class="bi bi-person"></i> Admin <i class="bi bi-calendar-week"></i>  06 de octubre, 2023
                    <i class="bi bi-folder-fill"></i> folder <br><br>
                    <p >Vans Skateboarding se enorgullece de asociarse con el skater Elijah Berle para presentar 
                        unas Skate Half Cab™ de diseño propio en conmemoración del 30.º aniversario de este modelo,
                        acompañadas de una colección integral de ropa y zapatillas. La colección, inspirada en la
                        pasión de Elijah por los tatuajes clásicos, la cultura motera, el surf retro y la moda de 
                        mediados de siglo, luce bordados y diseños exclusivos y rinde homenaje al emblemático estilo 
                        de Elijah y la perdurabilidad de las zapatillas de skate más influyentes de la historia.
                    </p> <br><br>
                    <div class="bl-in">
                        <i></i>
                        <p>La habilidad natural de Elijah sobre la tabla, famoso en la comunidad skater por su control y 
                            su talento en cualquier terreno, en combinación con su inquebrantable ética de trabajo, le ha merecido 
                            un lugar en la élite del skate mientras se mantiene fiel a sus raíces y rinde tributo a sus predecesores. 
                            Era inevitable que Vans cediera a Elijah las riendas de esta temporada para reinterpretar las Skate Half Cab™ 
                            con una exclusiva paleta de colores caqui y negra como guiño a la futura generación de skaters.
                        </p>
                    </div><br><br>
                    <p>
                        Las Half Cab™ originales fueron creadas, en 1992 y por pura necesidad, por los propios skaters,
                        quienes decidieron cortar las zapatillas de caña alta para convertirlas en zapatillas de skate personalizadas. 
                        Y así fue cómo, con tan solo unas tijeras y cinta de embalar, y sin ni siquiera saberlo, crearon la mejor zapatilla
                        de skate del mundo. Tres décadas después, las Half Cab™ siguen siendo unas de las zapatillas más fiables y 
                        reconocibles del mundo del skate.
                    </p>
                    <div class="img-abajo">
                        <img  src="./img/baner/blog_zapatillas.webp" alt="blog-zapatillas">
                    </div> <br>
                    <p>La paleta cromática de las Skate Half Cab™, diseñada por Elijah Berle, incluye un diseño de alambre de espina a lo
                        largo del contrafuerte de gamuza, parches con el logotipo Half Cab original en la capellada y la lengüeta y el
                        nombre de Elijah estampado en la plantilla. Los materiales reforzados DURACAP™ y la suela con un diseño dentado
                        aún más profundo prolongan la vida útil de las zapatillas, mientras la plantilla con retorno de energía mantiene
                        las piernas frescas. Además, la colección también incluye las Elijah Berle Skate Old Skool en negro con bordado
                        de alambre de espino blanco en la Sidestripe y llamas en el empeine.
                    </p> <br><br>
                    <div class="img-abajo">
                        <img  src="./img/baner/blog_zapatilla2.webp" alt="blog-zapatillas2">
                    </div> <br>   

                </div>
                    <div class="comentarios">
                        <h2>Comentarios</h2><br>

                        <?php
                        require("conexion.php");

                        // Realiza una consulta para obtener los comentarios
                        $sql = "SELECT nombre, DATE_FORMAT(fecha, '%d-%m-%Y') AS fecha_formateada, comentario 
                        FROM guardarcomentario";
                        $result = mysqli_query($conexion, $sql);

                        // Comprueba si hay comentarios
                        if (mysqli_num_rows($result) > 0) {
                            // Itera a través de cada comentario
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="comentario">';
                                echo '<img src="./img/baner/user.jpg" alt="">';
                                echo '<div class="info-comentario">';
                                echo '<h4>' . $row['nombre'] . '</h4>';
                                echo '<p>' . $row['fecha_formateada'] . '</p>';
                                echo '<p>' . $row['comentario'] . '</p>';
                                echo '</div>';
                                echo '</div><br>';
                            }
                        } else {
                            echo '<p>No hay comentarios.</p>';
                        }

                        // Cierra la conexión a la base de datos
                        mysqli_close($conexion);
                        ?>

                        <div id="comentarios-container"></div>
                    </div> <br><br>
                    <div class="form-comentario">
                    <h2>Dejar un comentario</h2>
                    <p>Su dirección de correo electrónico no será publicada. Los campos obligatorios están marcados *</p><br><br>
                    <div class="form">
                        <form action="guardar_comentario.php" method="POST">
                            <label for="">Nombre: &emsp; </label>
                            <input type="text" id="name" style="width: 250px;" name="nombre"  required minlength="4" maxlength="12" >&emsp;
                            <label for="">E-mail: &emsp; </label> 
                            <input type="email" id="email"  size="30" name="correo" style="width: 260px;" placeholder="e-mail@gmail.com"> <br> <br>
                            <label for="">Comentario:</textarea></label><br>
                            <textarea name="comentario" id="comen" cols="30" rows="10"></textarea><br><br>
                            <button type="submit"> Enviar Mensaje</button>
                        </form>
                    </div>

                    
                </div>

            </div>

            
        </section>       
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

    
</body>

</html>