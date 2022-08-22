<?php 
session_start();
if ($_SESSION['usuarioo']){ 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/48fc494f11.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b81162faad.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container">
            <nav>

                <ul>
                    <li><a id="icono" class="icono">Menú</a></li>
                    <li><a id="icono" class="icono2"  href="index.html">Inicio</a></li>
                    <li><a id="icono2" class="icono2" href="#">Servicios</a></li>
                    <li><a id="icono2"  href="Vista/catalogo.php" class="icono2">Explorar</a></li>
                    <!--<li class="submenu">
                        <a id="icono2" class="icono2">Administradores</a>
                        <ul class="children">
                            <li><a href="vista/vistaAdmin.php">Lista usuarios</a></li>
                            <li><a href="#">Listado de propiedades</a></li>      
                        </ul>
                    </li>-->
                    
                    <li><a id="icono2" href="Vista/form.php" class="icono2">Cuenta</a></li>
                    <?php
                    require('Controlador/controlArrendador.php');
                    require('Modelo/conexionLogin.php');
                    require('Vista/logAr.php');
                    if($_SESSION['usuarioo']){
                        echo "<li><a id='icono2' class='icono2' href='cerrarsesion.php'><span>Cerrar Sesión</span></a></li>";
                    }
                    
                    $rol=$_POST['rol'];
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
                    $query2= $pdo->prepare("SELECT rol FROM arrendador WHERE rol=:rol");
                    $query2->bindParam(":rol",$rol);
                    $query2->execute();
                    $usuario=$query2->fetch(PDO::FETCH_ASSOC);
                    
                    if($_SESSION['usuarioo'] && $rol){
                        echo "<li><a id='icono2' class='icono2' href='cerrarsesion.php'><span>Subir casa</span></a></li>";
                    }
                    
                    ?>
                </ul>
                <div class="enlaces uno" id="enlaces">
                    <a href="index.html">Inicio</a>
                    <a href="#">Servicios</a>
                    <a href="Vista/catalogo.php">Explorar</a>
                    <a href="Vista/form.php">Cuenta</a>
                    <?php
                    require('Controlador/controlArrendador.php');

                    
                    
                    ?>
                </div>
            </nav>
            <div class="textos">
            
                <h2>La confianza ni se compra ni se vende. Sencillamente se gana</h2>
                <a href="#">Explora</a>
            </div>
            <img src="img/full-logo.png" alt="">
        </div>
    </header>
    <div class="wave">
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </div>
   <!--CARDS-->
   <a class="card education">
    <div class="overlay"></div>
 <div class="circle">
<svg width="71px" height="76px" viewBox="29 14 71 76" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
   <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
   <desc>Created with Sketch.</desc>
   <defs></defs>
   <g id="Group" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(30.000000, 14.000000)">
       <g id="Group-8" fill="#D98A19">
           <g id="Group-7">
               <g id="Group-6">
                   <path d="M0,0 L0,75.9204805 L69.1511499,75.9204805 L0,0 Z M14.0563973,32.2825679 L42.9457663,63.9991501 L14.2315268,63.9991501 L14.0563973,32.2825679 Z" id="Fill-1"></path>
               </g>
           </g>
       </g>
       <g id="Group-20" transform="translate(0.000000, 14.114286)" stroke="#FFFFFF" stroke-linecap="square">
           <path d="M0.419998734,54.9642857 L4.70316223,54.9642857" id="Line"></path>
           <path d="M0.419998734,50.4404762 L4.70316223,50.4404762" id="Line"></path>
           <path d="M0.419998734,45.9166667 L4.70316223,45.9166667" id="Line"></path>
           <path d="M0.419998734,41.3928571 L2.93999114,41.3928571" id="Line"></path>
           <path d="M0.419998734,36.8690476 L4.70316223,36.8690476" id="Line"></path>
           <path d="M0.419998734,32.3452381 L4.70316223,32.3452381" id="Line"></path>
           <path d="M0.419998734,27.8214286 L4.70316223,27.8214286" id="Line"></path>
           <path d="M0.419998734,23.297619 L2.93999114,23.297619" id="Line"></path>
           <path d="M0.419998734,18.7738095 L4.70316223,18.7738095" id="Line"></path>
           <path d="M0.419998734,14.25 L4.70316223,14.25" id="Line"></path>
           <path d="M0.419998734,9.72619048 L4.70316223,9.72619048" id="Line"></path>
           <path d="M0.419998734,5.20238095 L2.93999114,5.20238095" id="Line"></path>
           <path d="M0.419998734,0.678571429 L4.70316223,0.678571429" id="Line"></path>
       </g>
   </g>
</svg>
 </div>
 <p>Calidad a tu medida</p>
</a>

<a class="card credentialing">
    <div class="overlay"></div>
 <div class="circle">
   
<svg width="64px" height="72px" viewBox="27 21 64 72" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
   <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
   <desc>Created with Sketch.</desc>
   <defs>
       <polygon id="path-1" points="60.9784821 18.4748913 60.9784821 0.0299638385 0.538377293 0.0299638385 0.538377293 18.4748913"></polygon>
   </defs>
   <g id="Group-12" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(27.000000, 21.000000)">
       <g id="Group-5">
           <g id="Group-3" transform="translate(2.262327, 21.615176)">
               <mask id="mask-2" fill="white">
                   <use xlink:href="#path-1"></use>
               </mask>
               <g id="Clip-2"></g>
               <path d="M7.17774177,18.4748913 L54.3387782,18.4748913 C57.9910226,18.4748913 60.9789911,15.7266455 60.9789911,12.3681986 L60.9789911,6.13665655 C60.9789911,2.77820965 57.9910226,0.0299638385 54.3387782,0.0299638385 L7.17774177,0.0299638385 C3.52634582,0.0299638385 0.538377293,2.77820965 0.538377293,6.13665655 L0.538377293,12.3681986 C0.538377293,15.7266455 3.52634582,18.4748913 7.17774177,18.4748913" id="Fill-1" fill="#59A785" mask="url(#mask-2)"></path>
           </g>
           <polygon id="Fill-4" fill="#FFFFFF" transform="translate(31.785111, 30.877531) rotate(-2.000000) translate(-31.785111, -30.877531) " points="62.0618351 55.9613216 7.2111488 60.3692832 1.50838775 5.79374073 56.3582257 1.38577917"></polygon>
           <ellipse id="Oval-3" fill="#25D48A" opacity="0.216243004" cx="30.0584472" cy="21.7657707" rx="9.95169733" ry="9.17325562"></ellipse>
           <g id="Group-4" transform="translate(16.959615, 6.479082)" fill="#54C796">
               <polygon id="Fill-6" points="10.7955395 21.7823628 0.11873799 11.3001058 4.25482787 7.73131106 11.0226557 14.3753897 27.414824 1.77635684e-15 31.3261391 3.77891399"></polygon>
           </g>
           <path d="M4.82347935,67.4368303 L61.2182039,67.4368303 C62.3304205,67.4368303 63.2407243,66.5995595 63.2407243,65.5765753 L63.2407243,31.3865871 C63.2407243,30.3636029 62.3304205,29.5263321 61.2182039,29.5263321 L4.82347935,29.5263321 C3.71126278,29.5263321 2.80095891,30.3636029 2.80095891,31.3865871 L2.80095891,65.5765753 C2.80095891,66.5995595 3.71126278,67.4368303 4.82347935,67.4368303" id="Fill-8" fill="#59B08B"></path>
           <path d="M33.3338063,67.4368303 L61.2181191,67.4368303 C62.3303356,67.4368303 63.2406395,66.5995595 63.2406395,65.5765753 L63.2406395,31.3865871 C63.2406395,30.3636029 62.3303356,29.5263321 61.2181191,29.5263321 L33.3338063,29.5263321 C32.2215897,29.5263321 31.3112859,30.3636029 31.3112859,31.3865871 L31.3112859,65.5765753 C31.3112859,66.5995595 32.2215897,67.4368303 33.3338063,67.4368303" id="Fill-10" fill="#4FC391"></path>
           <path d="M29.4284029,33.2640869 C29.4284029,34.2202068 30.2712569,34.9954393 31.3107768,34.9954393 C32.3502968,34.9954393 33.1931508,34.2202068 33.1931508,33.2640869 C33.1931508,32.3079669 32.3502968,31.5327345 31.3107768,31.5327345 C30.2712569,31.5327345 29.4284029,32.3079669 29.4284029,33.2640869" id="Fill-15" fill="#FEFEFE"></path>
           <path d="M8.45417501,71.5549073 L57.5876779,71.5549073 C60.6969637,71.5549073 63.2412334,69.2147627 63.2412334,66.3549328 L63.2412334,66.3549328 C63.2412334,63.4951029 60.6969637,61.1549584 57.5876779,61.1549584 L8.45417501,61.1549584 C5.34488919,61.1549584 2.80061956,63.4951029 2.80061956,66.3549328 L2.80061956,66.3549328 C2.80061956,69.2147627 5.34488919,71.5549073 8.45417501,71.5549073" id="Fill-12" fill="#5BD6A2"></path>
       </g>
   </g>
</svg>

 </div>
 <br>
 <p>Seguridad total</p>
</a>
<a class="card wallet">
    <div class="overlay"></div>
 <div class="circle">
   
   
<svg width="78px" height="60px" viewBox="23 29 78 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
   <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
   <desc>Created with Sketch.</desc>
   <defs></defs>
   <g id="icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(23.000000, 29.500000)">
       <rect id="Rectangle-3" fill="#AC8BE9" x="67.8357511" y="26.0333433" width="9.40495664" height="21.8788565" rx="4.70247832"></rect>
       <rect id="Rectangle-3" fill="#6A5297" x="67.8357511" y="38.776399" width="9.40495664" height="10.962961" rx="4.70247832"></rect>
       <polygon id="Rectangle-2" fill="#6A5297" points="57.3086772 0 67.1649301 26.3776902 14.4413177 45.0699507 4.58506484 18.6922605"></polygon>
       <path d="M0,19.6104296 C0,16.2921718 2.68622235,13.6021923 5.99495032,13.6021923 L67.6438591,13.6021923 C70.9547788,13.6021923 73.6388095,16.2865506 73.6388095,19.6104296 L73.6388095,52.6639057 C73.6388095,55.9821635 70.9525871,58.672143 67.6438591,58.672143 L5.99495032,58.672143 C2.68403068,58.672143 0,55.9877847 0,52.6639057 L0,19.6104296 Z" id="Rectangle" fill="#8B6FC0"></path>
       <path d="M47.5173769,27.0835169 C45.0052827,24.5377699 40.9347162,24.5377699 38.422622,27.0835169 L36.9065677,28.6198808 L35.3905134,27.0835169 C32.8799903,24.5377699 28.8078527,24.5377699 26.2957585,27.0835169 C23.7852354,29.6292639 23.7852354,33.7559532 26.2957585,36.3001081 L36.9065677,47.0530632 L47.5173769,36.3001081 C50.029471,33.7559532 50.029471,29.6292639 47.5173769,27.0835169" id="Fill-12" fill="#F6F1FF"></path>
       <rect id="Rectangle-4" fill="#AC8BE9" x="58.0305835" y="26.1162588" width="15.6082259" height="12.863158"></rect>
       <ellipse id="Oval" fill="#FFFFFF" cx="65.8346965" cy="33.0919007" rx="2.20116007" ry="2.23319575"></ellipse>
   </g>
</svg>

 </div>
 <br>
 <p>Paga en linea</p>
</a>
<a class="card human-resources">
    <div class="overlay"></div>
 <div class="circle">
    
   
<svg width="66px" height="77px" viewBox="1855 26 66 77" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
   <!-- Generator: Sketch 42 (36781) - http://www.bohemiancoding.com/sketch -->
   <desc>Created with Sketch.</desc>
   <defs></defs>
   <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1855.000000, 26.000000)">
       <path d="M4.28872448,42.7464904 C4.28872448,39.3309774 5.4159227,33.7621426 6.40576697,30.4912557 C10.5920767,32.1098991 14.3021264,35.1207513 18.69596,35.1207513 C30.993618,35.1207513 42.5761396,28.7162991 49.9992251,17.9014817 C56.8027248,23.8881252 60.8188351,33.0463165 60.8188351,42.7464904 C60.8188351,60.817447 47.6104607,76.6693426 32.5537798,76.6693426 C17.4970989,76.6693426 4.28872448,60.817447 4.28872448,42.7464904" id="Fill-8" fill="#AFCEFF"></path>
       <path d="M64.3368879,31.1832696 L62.8424171,46.6027478 L60.6432609,46.7824348 L59.8340669,34.6791304 L47.6573402,25.3339478 C44.2906753,34.068487 34.3459503,40.2903304 24.4684093,40.2903304 C17.7559812,40.2903304 10.046244,37.4168 5.80469412,32.8004522 L5.80469412,34.6791304 L5.80469412,46.6027478 L4.28932167,46.6027478 L1.30187314,27.8802435 C1.30187314,20.9790957 3.52342407,15.5432 7.27229127,11.3578087 C13.132229,4.79558261 21.8124018,0.0492173913 30.5672235,0.342852174 C37.4603019,0.569286957 42.6678084,2.72991304 50.8299179,0.342852174 C51.4629405,1.44434783 51.8615656,3.00455652 51.5868577,5.22507826 C51.4629405,6.88316522 51.2106273,7.52302609 50.8299179,8.45067826 C58.685967,14.1977391 64.3368879,20.7073739 64.3368879,31.1832696" id="Fill-10" fill="#3B6CB7"></path>
       <path d="M58.9405197,54.5582052 C62.0742801,54.8270052 65.3603242,52.60064 65.6350321,49.5386574 C65.772386,48.009127 65.2617876,46.5570226 64.3182257,45.4584487 C63.3761567,44.3613357 62.0205329,43.6162922 60.4529062,43.4818922 L58.9405197,54.5582052 Z" id="Fill-13" fill="#568ADC"></path>
       <path d="M6.32350389,54.675367 C3.18227865,54.8492104 0.484467804,52.4957496 0.306803449,49.4264626 C0.217224782,47.8925496 0.775598471,46.4579757 1.75200594,45.3886191 C2.7284134,44.3192626 4.10792487,43.6165843 5.67853749,43.530393 L6.32350389,54.675367 Z" id="Fill-15" fill="#568ADC"></path>
   </g>
</svg>
 </div>
 <p>Cuida tu integridad</p>
</a>

<section class="about container">

    <div class="cont1-info">

        <h2 class="title-cont1">Property Deluxe</h2>
        <hr>
        <p class="text-cont1"><b>Nosotros en Property Deluxe nos enfocamos en brindarte una comoda y segura a la hora de alquilar una propiedad 
            con el motivo que esta cumpla tus expectativas y a la vez una experiencia segura y satisfactoria.</b>
        </p>
    
        <a href="#" class="button" style="--clr:#000"><span>Comenzar ahora</span><i></i></a>
    
    </div>
    
    <figure class="picture-cont1">
        <img src="img/propiedad-inversion-vs-pye.png" class="about__img">
    </figure>
</section>

    <script src="js/script.js"></script>

    <div class="container-footer" id="footer">	
        <footer class="redes-footer">
          
            <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-twitter icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
            </div>    
            <hr>
            <h4>© 2022 Property Deluxe - Todos los Derechos Reservados</h4>

        </footer>
    </div>
</body>
</html>
<?php   
}else{
    header("location:index.html");
}
?>