<?php

function articulo ($ventas_id,$venta){

$salida = "";


$salida = $salida . '<div class = "articulo">';
$salida = $salida . '<h2>'.$venta["marca"].'</h2>';
$salida = $salida . '<img src="'. $venta['imagen'].'"alt=" ' .$venta["marca"]. 'width="150" height="150">';
$salida = $salida . '<p>'.$venta['modelo'].'</p>';
$salida = $salida . '<p><input type="image" formaction="informacion.php?id='.$ventas_id.'" src="imagenes/bver.png" width="65" height="35"></p>';
$salida = $salida . '<p><input type="image" src="imagenes/carrito.png" name ="btn_carrito" width="30" height="30"></p></div>';


return $salida;
}






$ventas = array();
$ventas[001] = array(
	"id"=> 1,
	"tipo" => 2,
	"marca" => "Aston Martin",
	"imagen" => "imagenes/autos/AM_Ventage.jpg",
	"modelo" => "Ventage",
	"descripcion" => "La mejor manera de vivir su fantasía súper espía está detrás del volante de un Aston Martin, y el Vantage es la forma menos costosa de hacerlo. Se ofrece como un coupé o convertible, el rendimiento del motor del V8 Vantage es nada menos que brutal, a 420 o 430 CV; de seis velocidades manual y siete velocidades de transmisión automática se ofrecen. Para demonios de la velocidad, el V12 Vantage tiene una turbina-lisa 565 caballos de fuerza de 5.9 litros V-12 con una transmisión manual de siete velocidades o una manipulación automática de siete velocidades de desplazamiento de funciones."
	
	);  

$ventas[002] = array(
	"id"=>2,
	"tipo" => 1,
	"marca" => "Aston Martin",
	"imagen" => "imagenes/autos/AM_db11.jpg",
	"modelo" => "DB11",
	"descripcion" => "El regreso de su apariencia y rendimiento, literalmente a 11, el DB11 continúa la tradición del estilo de mezcla y el poder de Aston Martin. Un biturbo de 5.2 litros V-12 hace un brutal de 600 caballos de fuerza y 516 libras-pie, se asoció con una paleta de ocho velocidades con desplazamiento automático. Se estima un tiempo de 0-60 de 3,9 segundos. Una estructura ligera, sistema de vectorización del par, y el resultado de chasis rígido en el manejo impresionantemente ágil. Esperar que todos los símbolos de un Aston moderna cuando el DB11 golpea salas de exhibición a finales de 2016"
	);

$ventas[003] = array(
	"id"=> 3,
	"tipo" => 2,
	"marca" => "Jaguar",
	"imagen" => "imagenes/autos/J_XE.jpg",
	"modelo" => "XE",
	"descripcion" => "El Jaguar XE es nuevo compacto de cuatro puertas de la marca, concebido y diseñado para ser un contendiente serio en un segmento de mercado sedán deportivo que ha sido definido y gobernado durante décadas por el BMW 3 Series.En el lanzamiento, hay dos opciones de motor: un motor sobrealimentado V6 de 3.0 litros (340 caballos de fuerza, 332 libras-pie de torque) y un turbodiesel de cuatro cilindros de 2.0 litros (180 caballos de fuerza, 318 libras-pie), tanto el envío de potencia en la parte trasera diferencial a través de un transmission.Jaguar automática de 8 velocidades planea agregar un 2.0 litros turbo de gasolina de cuatro cilindros (240 CV, 251 libras-pie) más adelante en el modelo 2017 year.All tres motores contará con paradas y arranques de technology.Performance el V6 es muy rápida, con 0-60 mph posible en unos 4,5 segundos."
	
	);  

$ventas[004] = array(
	"id"=> 4,
	"tipo" => 2,
	"marca" => "Jaguar",
	"imagen" => "imagenes/autos/j_XF.jpg",
	"modelo" => "XF",
	"descripcion" => " El Jaguar XF es un sedán deportivo de lujo de cuatro puertas con un exterior atractivo, interior de primera clase, y la tecnología de alta calidad. El XF es uno de los sedanes más elegantes en el automóvil mercado.El XF se ofrece en cuatro modelos; Premium, Prestige, R-Sport, y S. Está disponible en cualquiera de las ruedas traseras o en todas las ruedas. La potencia proviene de un motor de 2.0 litros diesel de 180 caballos de fuerza, motor V6 sobrealimentado de 3.0 litros de 340 caballos de fuerza, o 3.0 litros de 380 caballos de fuerza del motor V6 sobrealimentado. Todos los modelos están conectados a una transmisión automática de ocho velocidades, con el selector de palanca de cambio única JaguarDrive rotativo y Levas de cambio secuencial de Jaguar. El XF se carga con el lujo y equipos tales como; 11 altavoces sistema estándar de 380 vatios de sonido y la pantalla de la consola central de información y entretenimiento, y arranque sin llave. Las características de seguridad incluyen 6 airbags, control dinámico de estabilidad, reposacabezas activos, sistema de alarma, y cámara de visión trasera. Las actualizaciones de equipo incluyen asientos de cuero, paquete de navegación, y calienta y se enfría seats.The 2017 Jaguar XF recibe capacidad opcional Wi-Fi y de localización de vehículos robados. "
	
	);  

$ventas[005] = array(
	"marca" => "Mini",
	"imagen" => "imagenes/autos/Mi_countryman.jpg",
	"modelo" => "Countryman",
	"descripcion" => " Ofreciendo practicidad que no se encuentra en otros productos Mini, la Countryman es ágil, pero espacioso para su tamaño. La potencia proviene de un 1.6 litros de cuatro cilindros de 121 caballos de fuerza, que se acopla a las ruedas frontales por medio de una transmisión manual de seis velocidades o una paleta desplazado opcional de seis velocidades automáticas. El S y John Cooper Works versiones ofrecen más opciones de alimentación y todas las ruedas motrices. El Countryman conserva la quintaesencia Mini características y rareza de la marca de conducir, a pesar de sus dimensiones más grandes."
	
	);  

$ventas[006] = array(
	"marca" => "Mini",
	"imagen" => "imagenes/autos/Mi_hatch.jpg",
	"modelo" => "Hatch",
	"descripcion" => "Dado que el MINI fue resucitado en la década de 2000, se ha negociado en su diseño, opciones de personalización mucho carácter, retro y lo que se describe a menudo - tanto por sí misma MINI y por aquellos que conducen sus coches - como el manejo de go-kart.La última mini fue introducido en 2014 y tiene todas estas características y más, incluyendo un interior de alta calidad, más espacio interior que nunca y una gama de motores potentes y eficientes.La ventana trasera MINI ofrece una selección de motores para todos los gustos, con tres gasolinas y diesel tres. Para los compradores de gasolina hay un 1.2 litros de tres cilindros del MINI One , un 1,5 litros del MINI Cooper y un motor turbo de 2.0 litros disponible en tres niveles de potencia para el cáustico Cooper S, aún más deportivo Obras 210 y tope de gama John Cooper Works modelo que hemos analizado por separado."
	
	);  
$ventas[007] = array(
	"marca" => "Land Rover",
	"imagen" => "imagenes/autos/LR_RangeRover.jpg",
	"modelo" => "Range Rover",
	"descripcion" => "La versión más asequible de la cuarta generación del Range Rover —3.0 TDV6 HSE de 258 CV— está en venta desde 104 100 € (todos los precios). Es, por tanto, un coche más caro que muchas de sus alternativas: un Audi Q7 con motor Diesel de 218 CV cuesta 62 590 €. El Range Rover Sport Diesel de 258 CV está en venta desde 70 300 euros (ficha comparativa).Este modelo está en venta desde septiembre de 2012. Desde entonces Land Rover ha introducido diversas actualizaciones en la gama. La última novedad es que, en invierno de 2016, Land Rover comenzará a vender una nueva versión con motor V8 de 5,0 litros de cilindrada que da 550 caballos de potencia (hasta que llegue, el modelo más potente de la gama tiene 510 caballos). "
	
	);  

$ventas[008] = array(
	"marca" => "Land Rover",
	"imagen" => "imagenes/autos/LR_Discovery.png",
	"modelo" => "Discovery",
	"descripcion" => "El Land Rover Discovery Sport es el modelo que reemplaza al Freelander 2. Puede tener 5 o 7 plazas. Las cinco plazas de las dos primeras filas de asientos son amplias y las dos adicionales (que son opción) son de tamaño muy pequeño y difícil acceso o salida para personas adultas, incluso si son ágiles y delgadas.Este todoterreno mide 4,59 metros de longitud, 22 centímetros más que el Range Rover Evoque  —con el que comparte distintos elementos estructurales y mecánicos— y 26 cm menos que el Discovery, con el que, salvo el nombre, no guarda parecido estético ni se parece por cualidades dinámicas "
	
	);

$ventas[009] = array(
	"marca" => "Bentley",
	"imagen" => "imagenes/autos/Ben_Mulsanne.jpg",
	"modelo" => "Mulsanne",
	"descripcion" => "El Mulsanne es una, sala de estar adornada de rodadura de madera forrada de cuero para el automovilista adinerado. A 505 caballos de fuerza de 6,75 litros con doble turbo V-8 impulsa las ruedas traseras a través de una automática de ocho velocidades. Aunque es perfecto para el servicio de chófer, el Mulsanne es también el coche de un conductor con dirección agudo, un chasis contrapesado, y los movimientos de un coche más pequeño. Pasajeros del asiento trasero estarán encantados de manera similar, especialmente cuando el Mulsanne es personalizado a través del programa de personalización Mulliner y su amplia gama de características a medida."
	
	);  

$ventas[010] = array(
	"marca" => "Bentley",
	"imagen" => "imagenes/autos/Ben_continentalGT3-R.jpg",
	"modelo" => "Continental GT3-r",
	"descripcion" => "Desde el exterior, es fácil que no les gusta el Bentley Continental GT3-R. Es casi $ 150.000 más caro que una base de Conti GT V-8. Es el modelo de alto rendimiento, pero hace 34 caballos de fuerza menos que la velocidad W-12-alimentado . Es la versión ligera, pero pesa 4937 libras.Pero trepar en el interior, y es fácil de como el GT3-R. Su 4.0 litros doble turbo V-8, que hace 500 caballos de fuerza básica en el Continental GT , da cuerda a un 92 caballos adicionales con una facilidad sorprendente. Salida nominal es de 572 caballos de fuerza y 516 libras-pie, pero en caso de tener que ir de un punto muerto a 135 mph en una prisa, que va a hacer 592 y 553 para un máximo de 15 segundos. Incluso si es sólo por un tiempo limitado, 148 caballos de fuerza por litro de salida es impresionante. No hay aumento notable de retraso, y el motor incluso lanza a por la línea roja con un pequeño empujón extra entre 6000 rpm y el punto de corte de combustible en 6800. Los turbos definitivamente no se están quedando sin aliento a altas velocidades."
	
	);  

$ventas[011] = array(
	"marca" => "Rolls Royce",
	"imagen" => "imagenes/autos/RR_Dawn.jpg",
	"modelo" => "Dawn",
	"descripcion" => "Lujoso, exclusivo, exquisito; una serie de opciones de adjetivos para el precioso amanecer y cualquiera de ellos será suficiente. Básicamente, un coupé Wraith debajo de la piel, las curvas y las redadas de chapa de la madrugada, por lo que es -de acuerdo con Rolls-los más atractivo Rolls-Royce jamás construido.En el interior hay espacio para cuatro pasajeros adultos; ocupantes puedan ser deslumbrados por el cuero precioso y acres de molduras de madera real. Bajo el capó es un 6.6 litros de doble turbo V-12 que hace 563 caballos de fuerza, por lo que el amanecer es como la flota, ya que es atractiva."
	
	);  

$ventas[012] = array(
	"marca" => "Rolls Royce",
	"imagen" => "imagenes/autos/RR_Ghost.jpg",
	"modelo" => "Ghost",
	"descripcion" => "Todo en la vida es relativo, y tal vez ningún coche ilustra este punto con tanta eficacia como el Rolls-Royce Ghost. Si bien es técnicamente el modelo de Rolls-Royce, $ 250,000 Precio de base del Fantasma pone en la estratosfera del mercado del automóvil en general. A pesar de que MSRP, el sedán de hecho podría considerarse una ganga, al menos en relación con el resto de la alineación Rolls - con más potencia, mejor manejo."

	
	); 

$ventas[013] = array(
	"marca" => "Lamborgini",
	"imagen" => "imagenes/autos/Lam_Spyder.jpg",
	"modelo" => "Huracán spyder",
	"descripcion" => "El Lamborghini Huracán Spyder es la versión con carrocería descapotable del Lamborghini Huracán. Hay dos versiones que se distinguen, principalmente, por la potencia del motor y por el sistema de tracción: LP 610-4 (610 caballos y tracción total; en venta desde finales de 2015), y RWD (579 CV y tracción en las ruedas traseras; disponible en enero de 2017).Mide 4,46 metros de longitud, 1,92 m de anchura y 1,18 m de altura, por lo que es 2 centímetros más alto que la versión de carrocería cerrada. La capota es de lona y tiene un sistema electrohidráulico de apertura que la abre y cierra en 17 segundos, una operación que se puede realizar a velocidades de hasta 50 km/h. La luneta posterior es eléctrica y se puede ajustar en altura desde los mandos del conductor; si se coloca en su posición más elevada, hace las veces de cortavientos."
	);

$ventas[014] = array(
	"marca" => "Lamborgini",
	"imagen" => "imagenes/autos/LAm_VenenoRoadster.jpg",
	"modelo" => "Veneno Roadster",
	"descripcion" => "El monocasco de fibra de carbono es visible en el interior del coche por el túnel central y los alféizares. Los dos asientos de arquitectura ligera están hechos de material compuesto Lamborghinis forjado patentado. El carbonSkin-fibra de carbono se utiliza para revestir toda la cabina, parte de los asientos y el techo.Con un peso en seco de sólo 1.490 kilogramos (3.278 libras), los beneficios Veneno Roadster de una relación potencia-peso de solo 1,99 kg / CV (4,38 lb / hp) que garantiza un rendimiento que es nada menos que alucinante.El Veneno Roadster acelera de 0 a 100 km / h en sólo 2,9 segundos y la velocidad máxima se encuentra a 355 Km / h. El coche es accionado por un motor de doce cilindros con desplazamiento de 6.5 litros y está equipado con la transmisión ISR extremadamente rápido-shiffting con cinco modos. Un coleccionista de la obra maestra de ingeniería y diseño de un prototipo de carreras abierta con un diseño extremo y un rendimiento impresionante. Y es uno de los automóviles más exclusivos mundos: no más de nueve unidades serán construidas en el transcurso del año 2014."
	);  

$ventas[015] = array(
	"marca" => "Porche",
	"imagen" => "imagenes/autos/Por_911Carrera.jpg",
	"modelo" => "911 Carrera",
	"descripcion" => "Introducido para el año modelo 2012, el Porsche 911 (conocido internamente como el 991) de séptima generación solo representa tercera plataforma del vehículo desde que se introdujo en el mundo en 1963 en toda su motor trasero y originalmente majestuosidad refrigerado por aire. A diferencia de muchos de los vehículos que han existido siempre y cuando el 911, la obra maestra de Porsche ha evolucionado con suavidad en los últimos años, no alejarse demasiado de la fórmula original que tomó al mundo por sorpresa. Gracias al uso extensivo de Porsche de aluminio, el 911 es un coche ligero entusiasta de los deportes agradable a la vista que es ampliamente conocido como un punto de referencia para el rendimiento, el estilo y la ergonomía. Refrescadas para el año modelo 2017, el nuevo 911 (o 991,2) que se ofrece en una miríada de niveles de equipamiento. En los términos más simples, el 911 Carrera es la rueda trasera de la unidad de modelo de base, que es accionado por un motor horizontalmente opuesto, de doble turbo de 3.0 litros de seis cilindros que genera 370 caballos de fuerza. Una transmisión manual de siete velocidades llega estándar y una PDK transmisión automática de siete velocidades está disponible como una opción. "
	);  

$ventas[016] = array(
	"marca" => "Porche",
	"imagen" => "imagenes/autos/Por_718Cayman.jpg",
	"modelo" => "718 Cayman",
	"descripcion" => "La cuarta, la generación de remodelado del coupé deportivo de motor central tiene una apariencia más llamativa, deportivo y eficiente. Sólo unas semanas después del debut del nuevo Boxster 718, el nuevo Porsche 718 Cayman está extendiendo la nueva serie de modelos.Los mismos planos nuevos motores de cuatro cilindros con turbocompresor como en el 718 Boxster están siendo desplegados en el Porsche 718 Cayman. Como resultado, coupé y roadster tener una potencia de motor idéntico para la primera vez. La versión de entrada está poniendo en marcha en China con una potencia de 184 kW (250 CV). En los otros mercados, el Cayman 718 produce 220 kW (300 CV) a partir de dos litros de cilindrada. No hay cambios en el modelo S. A nivel mundial, el Cayman S 718 entrega 257 kW (350 CV) con una cilindrada de 2,5 litros."
	
	);  

$ventas[017] = array(
	"marca" => "Audi",
	"imagen" => "imagenes/autos/Au_A8.jpg",
	"modelo" => "A8",
	"descripcion" => "El Audi A8 es un verdadero competidor para el campeonato mundial de peso pesado, la categoría de sedán de lujo de tamaño completo, ahora coronado por el Mercedes-Benz S-Class.But con una larga distancia entre ejes del A8 de espacio interior, su estructura espacial de aluminio para la ligereza, y su motor de 12 cilindros disponibles para espectacularidad, se siente real.No es sólo que el único motor W12 insignia que hace que el coche se salida.El línea incluye otros tres motores, incluyendo un nuevo V6 sobrealimentado, un V6 turbodiesel y un V8s.And biturbo eso sin contar el S8 con una versión más potente de que V8.El sobrealimentado V6 de 3.0 litros es el motor de base, lo que hace 333 caballos de fuerza y ​​325 libras-pie de par motor al obtener 29 de la carretera mpg.The 3.0 litros turbodiesel TDI hace 240 caballos de fuerza y ​​406 libras-pie de torque, mientras que consigue 36 mpg combinado con una gama de más de 800 millas de un tanque de gas, cifras que alcanza a 80 kilómetros por hora en un viaje por carretera de fin de semana."
	
	);

$ventas[018] = array(
	"marca" => "Audi",
	"imagen" => "imagenes/autos/AU_Q3.jpg",
	"modelo" => "Q3",
	"descripcion" => ""
	
	);

$ventas[019] = array(
	"marca" => "Mercedes Benz",
	"imagen" => "imagenes/autos/MB_ClaseCCoupe.jpg",
	"modelo" => "Clase C Coupe",
	"descripcion" => ""
	
	);

$ventas[020] = array(
	"marca" => "Mercedes Benz",
	"imagen" => "imagenes/autos/MB_SLRoadster.jpg",
	"modelo" => "SL Roadster",
	"descripcion" => ""
	
	);    

$ventas[021] = array(
	"marca" => "Cadillac",
	"imagen" => "imagenes/autos/cadillac_cts.jpg",
	"modelo" => "CTS"
	
	);

$ventas[022] = array(
	"marca" => "Cadillac",
	"imagen" => "imagenes/autos/cadillac_xt5.jpg",
	"modelo" => "XT5"
	
	);  

$ventas[023] = array(
	"marca" => "Alfa Romeo",
	"imagen" => "imagenes/autos/alfa_4c.jpg",
	"modelo" => "4C"
	
	);  

$ventas[024] = array(
	"marca" => "Alfa Romeo",
	"imagen" => "imagenes/autos/alfa_mito.jpg",
	"modelo" => "Mito"
	
	);  

$ventas[025] = array(
	"marca" => "BMW",
	"imagen" => "imagenes/autos/BMW_X6.jpg",
	"modelo" => "X6"
	
	);  
$ventas[026] = array(
	"marca" => "BMW",
	"imagen" => "imagenes/autos/bmw_granturismo.jpg",
	"modelo" => "Gran Turismo serie 5"
	
	);  

$ventas[027] = array(
	"marca" => "Ferrari",
	"imagen" => "imagenes/autos/FERRARI_LaFerrari.jpeg",
	"modelo" => "LaFerrari"
	
	);

$ventas[028] = array(
	"marca" => "Ferrari",
	"imagen" => "imagenes/autos/ferrary_F12Berlinetta.jpg",
	"modelo" => "F12 Berlinetta"
	
	);  

$ventas[029] = array(
	"marca" => "Maserati",
	"imagen" => "imagenes/autos/maserati_ghibli.jpg",
	"modelo" => "Ghibli"
	
	);  

$ventas[030] = array(
	"marca" => "Maserati",
	"imagen" => "imagenes/autos/maserati_grancabrio.jpg",
	"modelo" => "Gran Cabrio"
	
	);  

$ventas[031] = array(
	"marca" => "Lotus",
	"imagen" => "imagenes/autos/lotus_evora.png",
	"modelo" => "Lotus Evora"
	
	); 

$ventas[032] = array(
	"marca" => "Volkswagen",
	"imagen" => "imagenes/autos/volkswagen_jetta.jpg",
	"modelo" => "Jetta"
	
	);

$ventas[033] = array(
	"marca" => "Volkswagen",
	"imagen" => "imagenes/autos/volkswagen_Beetle.jpg",
	"modelo" => "Beetle"
	
	);  

	  	  
?>