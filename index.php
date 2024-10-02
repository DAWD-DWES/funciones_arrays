<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width'>
        <title>Uso de arrays</title>
        <style>
            p {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <p>Crea un array indexado $DAW1 con los nombres de los módulos del primer curso del ciclo de DAW</p>
        <pre>$DAW1 = array('Bases de Datos', 'Entornos de Desarrollo', 'Formación y Orientación Laboral', 'Lenguaje de Marcas y Sistemas de Gestión de Información',
        'Programación', 'Sistemas Informáticos');</pre>

        <p>Elimina el elemento correspondiente al índice 3 de $DAW1 y muestra el nuevo contenido</p>

        <p>Añade de nuevo el elemento correspondiente al índice 3 de $DAW1 y muestra el nuevo contenido</p>

        <p>Crea un nuevo array $primerosModulosDAW1 con los tres primeros módulos de $DAW1. Muestra ambos arrays</p>

        <p>Elimina los dos últimos módulos del array $DAW1 y al mismo tiempo crea un nuevo array $ultimosmodulosDAW1 con dichos módulos. Muestra ambos arrays</p>

        <p>Añade estos elementos de nuevo al array $DAW1. Muestra el nuevo contenido de $DAW1</p>

        <p>Crea un array indexado con los nombres de los módulos de segundo curso del ciclo DAW. Muestra el array de segundo de DAW</p>
        <pre>$DAW2 = ['Desarrollo Web en Entorno Cliente', 'Desarrollo Web en Entorno Servidor', 'Despliegue de Aplicaciones', 'Diseño de interfaces web',
        'Empresa e Iniciativa Emprendedora', 'Inglés Técnico', 'Proyecto de Desarrollo de Aplicaciones Web', 'Formación en Centros de Trabajo'];</pre>

        <p>Crea un array $DAW que contenga la unión de los módulos de primero $DAW1 y segundo $DAW2. Muestra el array de DAW. Muestra el array combinado</p>

        <p>Crea un array indexado $DAM con los módulos del ciclo de DAM. Muestra el array $DAM</p>
        <pre>$DAM = ['Bases de Datos', 'Entornos de Desarrollo', 'Formación y Orientación Laboral', 'Lenguaje de Marcas y Sistemas de Gestión de Información',
        'Programación', 'Sistemas Informáticos', 'Acceso a Datos', 'Desarrollo de Interfaces', 'Programación de Servicios y Procesos',
        'Sistemas de Gestión Empresarial', 'Empresa e Iniciativa Emprendedora', 'Inglés Técnico', 'Proyecto de Desarrollo de Aplicaciones Multiplataforma', 'Formación en Centros de Trabajo'];</pre>
        
        <p>Crea un array $DAWDAM con la unión de los módulos de DAW y DAM sin duplicados. Muestra el array completo $DAWDAM</p>
       
        <p>Comprueba que el módulo 'Desarrollo Web en Entorno Servidor' se encuentre en el array $DAWDAM</p>

        <p>Crea un array $DAM2 con los módulos diferencia entre los elementos de DAW1 y DAWDAM. Muestra el array diferencia</p>

        <p>Crea un array $DAMyDAW con los módulos comunes de $DAW y $DAM</p>

        <p>Muestra un módulo obtenido al azar del array $DAWDAM</p>

        <p>Crea una cadena con todos los nombres de los módulos de primero DAW separados por '-'</p>

        <p>Ordena los módulos del array $DAW por orden alfabético descendente. Muestra el array ordenado</p>

        <p>Ordena los módulos del array $DAM por orden alfabético ascendente sin cambiar los índices. Muestra el array ordenado</p>

        <p>Crea un array asociativo $DAWAsoc de los nombres de módulos de DAW cuyos índices son las abreviaturas de los mismos. Muestra el array DAWAsoc</p>
        <pre>$DAWAsoc = ['BD' => 'Bases de Datos', 'ED' => 'Entornos de Desarrollo', 'FOL' => 'Formación y Orientación Laboral',
        'LMSGI' => 'Lenguaje de Marcas y Sistemas de Gestión de Información', 'P' => 'Programación',
        'SI' => 'Sistemas Informáticos', 'DWEC' => 'Desarrollo Web en Entorno Cliente', 'DWES' => 'Desarrollo Web en Entorno Servidor',
        'DAW' => 'Despliegue de Aplicaciones', 'DIW' => 'Diseño de interfaces web',
        'EIE' => 'Empresa e Iniciativa Emprendedora', 'IT' => 'Inglés Técnico', 'PR' => 'Proyecto de Desarrollo de Aplicaciones Web', 'FCT' => 'Formación en Centros de Trabajo'];</pre>

        <p>Crea un array $DAWAbrev con las abreviaturas de los módulos de DAW a partir del array $DAWAsoc. Muestra el array $DAWAbrev</p>

        <p>Comprueba que alguna de las abreviaturas sea 'BD' en el array $DAWAsoc</p>

        <p>Ordena el array asociativo $DAWAsoc por orden alfabético ascendente de sus claves. Muestra el array $DAWAsoc ordenado</p>

        <p>Crea un array bidimensional indexado para cada curso y asociativo para cada módulo cuya clave sea la abreviatura del módulo y los datos sean el nombre y el número de horas del módulo. Muestra el array DAWBi</p>
        <pre>$DAWBi = ['BD' => ['Bases de Datos', 205], 'ED' => ['Entornos de Desarrollo', 90], 'FOL' => ['Formación y Orientación Laboral', 90],
        'LMSGI' => ['Lenguaje de Marcas y Sistemas de Gestión de Información', 140], 'P' => ['Programación', 270],
        'SI' => ['Sistemas Informáticos', 205], 'DWEC' => ['Desarrollo Web en Entorno Cliente', 115], 'DWES' => ['Desarrollo Web en Entorno Servidor', 180],
        'DAW' => ['Despliegue de Aplicaciones', 85], 'DIW' => ['Diseño de interfaces web', 115],
        'EIE' => ['Empresa e Iniciativa Emprendedora', 65], 'IT' => ['Inglés Técnico', 40], 'PR' => ['Proyecto de Desarrollo de Aplicaciones Web', 30], 'FCT' => ['Formación en Centros de Trabajo', 370]];</pre>

        <p>Realiza un programa que muestre las abreviaturas de los módulos del array $DAWBi junto con su duración</p>

        <p>Muestra la duración del módulo de Desarrollo Web en Entorno Servidor (DWES) contenido en el array $DAWBi</p>

        <p>Ordena el array bidimensional en orden ascendente de duración y en caso de empate descendente alfabéticamente con la función array_multisort</p>

        <p>Crea un array tridimensional indexado $DAWTri para cada curso y asociativo para cada módulo cuya clave sea la abreviatura del módulo y los datos sean el nombre y el número de horas del módulo. Muestra el array DAWTri</p>
        <pre>$DAWTri = [['BD' => ['Bases de Datos', 205], 'ED' => ['Entornos de Desarrollo', 90], 'FOL' => ['Formación y Orientación Laboral', 90],
    'LMSGI' => ['Lenguaje de Marcas y Sistemas de Gestión de Información', 140], 'P' => ['Programación', 270],
    'SI' => ['Sistemas Informáticos', 205]], ['DWEC' => ['Desarrollo Web en Entorno Cliente', 115], 'DWES' => ['Desarrollo Web en Entorno Servidor', 180],
            'DAW' => ['Despliegue de Aplicaciones', 85], 'DIW' => ['Diseño de interfaces web', 115],
            'EIE' => ['Empresa e Iniciativa Emprendedora', 65], 'IT' => ['Inglés Técnico', 40], 'PR' => ['Proyecto de Desarrollo de Aplicaciones Web', 30], 'FCT' => ['Formación en Centros de Trabajo', 370]]];</pre>

        <p>Realiza un programa que muestre las abreviaturas de los módulos junto con su duración a partir del array $DAWTri</p>

        <p>Muestra la duración del módulo de Desarrollo Web en Entorno Servidor (DWES) contenido en el array $DAWTri</p>

    </body>
</html>
