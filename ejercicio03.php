<?php

/*
Ejercicio 3: Analizador de texto. 
  Crea un programa que analice una frase: 
    $texto = "PHP no está muerto… solo sigue trabajando silenciosamente en el 80% de Internet"; 
  El programa debe: 
    1. Convertir el texto a minúsculas. 
    2. Contar cuántas palabras tiene. 
    3. Contar cuántas veces aparece cada palabra. 
    4. Mostrar solo las palabras que aparecen más de una vez. 
    5. Mostrar la palabra más repetida. 
    6. Ignora palabras de menos de 3 letras. 
*/

// Texto para analizar.
$texto = "Era un día frío y luminoso de abril y los relojes estaban dando las trece. Winston Smith, con la barbilla clavada en el pecho en un esfuerzo por escapar al desagradable viento, pasó a toda prisa entre las puertas de cristal de las Casas de la Victoria, aunque no lo bastante rápido para impedir que se colara tras él un remolino de polvo y suciedad";
// 1. Convertir el texto a minúsculas.
$texto = strtolower($texto);

// 2. Contar cuántas palabras tiene el texto.
// Separar en palabras.
$palabras = explode(" ", $texto);
// Ignorar palabras de menos de 3 letras.
$palabrasSeleccionadas = [];

foreach ($palabras as $palabra) {
  if (strlen($palabra) >= 3) {
    $palabrasSeleccionadas[] = $palabra;
  }
}

$totalPalabras = count($palabrasSeleccionadas);

// 3. Contar cuántas veces aparece cada palabra.
$contadorPalabras = array_count_values($palabrasSeleccionadas);

// 4. Palabras que aparecen más de una vez (repetidas).
foreach ($contadorPalabras as $palabra => $numero) {
  if ($numero > 1) {
    echo $palabra . " " . "aparece" .  $numero . " veces en total" . "<br>";
  }
}

// 5. Palabra que más veces se repite.
$maxRep = max($contadorPalabras);
$palabraMasRepetida = array_search($maxRep, $contadorPalabras);

echo "Número total de palabras: " . $totalPalabras . "<br>";
echo "Palabra más repetida: " . $palabraMasRepetida;

?>