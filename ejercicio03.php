<?php

// Texto para analizar.
$texto = "Era un día frío y luminoso de abril y los relojes estaban dando las trece. Winston Smith, con la barbilla clavada en el pecho en un esfuerzo por escapar al desagradable viento, pasó a toda prisa entre las puertas de cristal de las Casas de la Victoria, aunque no lo bastante rápido para impedir que se colara tras él un remolino de polvo y suciedad";
// 1. Convertir el texto a minúsculas.
$texto = strtolower($texto);

// 2. Contar cuántas palabras tiene el texto.
// Separar en palabras.
$palabras = explode(" ", $texto);
// Ignorar palabras de menos de 3 letras.
$palabrasIgnoradas = [];

foreach ($palabras as $palabra) {
  if (strlen($palabra) >= 3) {
    $palabrasIgnoradas[] = $palabra;
  }
}

$totalPalabras = count($palabrasIgnoradas)

// 3. Contar cuántas veces aparece cada palabra.
$contadorPalabras = array_count_values($palabrasIgnoradas);

// 4. Palabras que aparecen más de una vez (repetidas).
foreach ($contadorPalabras as $palabra => $numero) {
  if ($numero > 1) {
    echo $palabra . " " . $numero . " veces" . "<br>";
  }
}

// 5. Palabra que más veces se repite.
