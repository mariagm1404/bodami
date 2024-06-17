<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boda Miguel e Irene</title>
    <link rel="icon" type="image/png" href="Imagenes/anillos.png">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
        .vista{
            display:none;
        }
        .vista.visible{
            display:block;
        }
    </style>
</head>
<body><!--
    <div id="contenedor">
        <nav id="nav">
            <p id="inicios">Inicio</p>
            <p id="asistir">Asistencia</p>
            <p id="iglesia">Iglesia</p>
            <p id="restaurante">Restaurante</p>
            <p id="hotel">Hotel</p>
        </nav>
    </div>
    
    <div class="vista" id="inicio">
        <h1 id="d" class="movable">19</h1>
        <h1 id="m" class="movable">10</h1>
        <h1 id="y" class="movable">24</h1>
        <div class="linea-vertical"></div>
        <h2 id="mi">Miguel</h2>
        <h2 id="ir">e Irene</h2>

        <div id="cuentatras" class="movable-time">
            <div id="countdown"></div>
        </div>
    </div>

    <div class="vista" id="asistencia">
    <form method="post" action="registrar.php" id="form">
            <div id="persona">
                <br>
                <h1>¿Nos acompañas o te lo pierdes?</h1><br>
                <div class="input-wrapper">
                    <label for="nombre"></label><input type="text" name="name[]" id="nombre" placeholder="Nombre" required><br>
                </div>
                <br>
                <div class="input-wrapper">
                    <label for="apellidos"></label><input type="text" id="apellidos" name="apellido[]" placeholder="Apellidos" required><br>
                </div>
                <br>
                <div class="input-wrapper" id="asistir">
                    <p id="asi">Asistencia</p>
                        <label for="si" class="custom-radio">Si</label><input type="checkbox" class="radio-input" id="si" value="si" name="ir[]">
                        <label for="no" class="custom-radio">No</label><input type="checkbox" class="radio-input" id="no" value="no" name="ir[]">
                </div>
                <br>
                <div class="input-wrapper">
                    <label></label><input type="text" name="alergia[]" placeholder="¿Alguna alergia/intolerancia?">
                </div>
            </div>            
            <br><br>
            <div id="añadirotro">
                <span class="material-symbols-outlined">add</span>
                <p>Añadir a otro asistente</p>
            </div>          
            <br>
            <button type="submit" onclick="registrar()" name="register" value="Enviar" id="enviar">Enviar</button>

        </form>
    </div>
    <div class="vista" id="sivan">
        <h2></h2>
        <button onclick="otrapersona()" name="register" value="Enviar" id="enviar">Añadir otra persona</button>
    </div>
    <div class="vista" id="novan">
        <h2></h2>
        <button onclick="otrapersona()" name="register" value="Enviar" id="enviar">Añadir otra persona</button>
    </div>
    <div class="vista" id="LIglesia">
        <img src="Imagenes/SEulalia.jpg" alt="">
        <iframe id="ubiiglesia" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d393.08092912032595!2d-1.1250661!3d37.9853565!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63821012b3f9f7%3A0x2451ae7aace83ef3!2sIglesia%20de%20Santa%20Eulalia!5e0!3m2!1ses!2ses!4v1714296387265!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <p>Como muchos sois de fuera os ponemos a continuación los parkings que hay por la zona por si no encontráis para aparcar :&#41;</p>
        <h2>Parkings</h2>
        <div id="parkings">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d786.1671907987372!2d-1.1245117!3d37.9848588!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6382103739cb95%3A0x9987cd918c3b5a71!2sAparcamiento%20Excelsior%20SL!5e0!3m2!1ses!2ses!4v1714297145046!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d786.1532362355315!2d-1.1226845!3d37.9861612!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd638211a7db4a11%3A0x8f62cc53f8a31ba3!2sAparcamurcia%20La%20Condomina!5e0!3m2!1ses!2ses!4v1714297175830!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1694.6124823447585!2d-1.124459821982509!3d37.984131100573926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63820e6db56067%3A0x57947c3206fded3e!2sAparcamiento%20Hospital%20Reina%20Sof%C3%ADa!5e0!3m2!1ses!2ses!4v1714297209629!5m2!1ses!2ses" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
    <div class="vista" id="LRest">
        <h1>Restaurante</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1577.6581490661556!2d-0.8960242!3d37.7357232!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63134589692d91%3A0xda8ff1800b4d7905!2sAquario!5e0!3m2!1ses!2ses!4v1714297475969!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="vista" id="LHotel">
        <h1>Hotel</h1>
    </div>

    <footer>
        <h3>Miguel e Irene</h3>
        <h4>19 Octubre 2021</h4>
    </footer>-->
    <body>
    <div id="contenedor">
        <nav id="nav">
            <p id="inicios">Inicio</p>
            <p id="asistir">Asistencia</p>
            <p id="iglesia">Iglesia</p>
            <p id="restaurante">Restaurante</p>
            <p id="hotel">Hotel</p>
        </nav>
    </div>
    
    <div class="vista" id="inicio">
        <h1 id="d" class="movable">19</h1>
        <h1 id="m" class="movable">10</h1>
        <h1 id="y" class="movable">24</h1>
        <div class="linea-vertical"></div>
        <h2 id="mi">Miguel</h2>
        <h2 id="ir">e Irene</h2>

        <div id="cuentatras" class="movable-time">
            <div id="countdown"></div>
        </div>
        <img src="Imagenes/anuncio.jpg" alt="">
    </div>

    <div class="vista" id="asistencia">
        <form method="post" action="" id="form" onsubmit="return registrar()">
            <div id="persona">
                <br>
                <h1>¿Nos acompañas o te lo pierdes?</h1><br>
                <div class="input-wrapper">
                    <label for="nombre"></label><input type="text" name="name[]" id="nombre" placeholder="Nombre" required><br>
                </div>
                <br>
                <div class="input-wrapper">
                    <label for="apellidos"></label><input type="text" id="apellidos" name="apellido[]" placeholder="Apellidos" required><br>
                </div>
                <br>
                <div class="input-wrapper asistira">
                    <p id="asi">Asistencia</p>
                       <!-- <label for="si" class="custom-radio">Si</label><input type="checkbox" class="radio-input" id="si" value="si" name="ir[]">
                        <label for="no" class="custom-radio">No</label><input type="checkbox" class="radio-input" id="no" value="no" name="ir[]">-->
                        <label for="si0" class="custom-radio">Si</label><input type="radio" class="radio-input" id="si0" value="si0" name="grupos[grupo0][]">
                        <label for="no0" class="custom-radio">No</label><input type="radio" class="radio-input" id="no0" value="no0" name="grupos[grupo0][]">
                
                </div>
                <br>
                <div class="input-wrapper">
                    <label></label><input type="text" name="alergia[]" placeholder="¿Alguna alergia/intolerancia?">
                </div>
            </div>            
            <br><br>
            <div id="añadirotro">
                <span class="material-symbols-outlined">add</span>
                <p>Añadir a otro acompañante</p>
            </div>          
            <br>
            <button type="submit" name="register" value="Enviar" id="enviar" onclick="if (!registrar()) { event.preventDefault(); }">Enviar</button>

        </form>
    </div>
    <div class="vista" id="sivan">
        <h2></h2>
        <button onclick="otrapersona()" name="register" value="Enviar" id="enviar">Añadir otra persona</button>
    </div>
    <div class="vista" id="novan">
        <h2></h2>
        <button onclick="otrapersona()" name="register" value="Enviar" id="enviar">Añadir otra persona</button>
    </div>
    <div class="vista" id="LIglesia">
        <div id="ceremonia">
            <h1>Ceremonia</h1><br>
            <div id="lugar">
                <span class="material-symbols-outlined">pin_drop</span>
                <h2>Parroquia Santa Eulalia</h2>
            </div>
            <div id="hora">
                <span class="material-symbols-outlined">schedule</span>
                <h2>12:00h</h2>
            </div>
        </div>
        <img src="Imagenes/SEulalia.jpg" alt="">
        <button type="submit" onclick="iglesia()" id="ubicacionIglesia">Abrir en Google Maps</button>
        <br><br><br><br><br><br><p>Como muchos sois de fuera os ponemos a continuación los parkings que hay por la zona por si no encontráis para aparcar :&#41;</p>
        <h2>Parkings</h2>
        <div id="parkings">
            <button type="submit" onclick="parking1()" id="parking1">Aparcamiento Excelsior</button>
            <button type="submit" onclick="parking2()" id="parking2">Aparcamiento La Condomina</button>
            <button type="submit" onclick="parking3()" id="parking3">Aparcamiento Hospital Reina Sofía</button>
        </div>

    </div>
    <div class="vista" id="LRest">
        <h1>Restaurante</h1>
        <img src="Imagenes/aquario.jpg" alt="" width="93%">
        <h2>Salón de celebraciones Aquario</h2>
        <button type="submit" onclick="ubirestaurante()" id="parking3">Ubicación</button>
    </div>
    <div class="vista" id="LHotel">
        <h1>Hotel</h1>
    </div>

    <footer>
        <h3>Miguel e Irene</h3>
        <h4>19 Octubre 2021</h4>
    </footer>
    
    <script src="main.js"></script>
    <?php
        include("registrar.php");
    ?>
</body>
</html>