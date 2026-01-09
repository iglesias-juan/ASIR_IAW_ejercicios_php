<?php

// 1. Array con estudiantes y sus notas.

$estudiantes = [
  "Ana" => [8, 7, 9],
  "Luis" => [5, 6, 4],
  "María" => [10, 9, 10],
  "Carlos" => [6, 6, 6]
];

// 2. Función para calcular la media de las notas.

function calcularPromedio($notas) {
    $suma = array_sum($notas); // Suma todas las notas
    $total = count($notas); // Cuenta cuántas notas hay
    $media = $suma / $total; // Calcula la media
    return $media; // Devuelve la media
}

// Variables para aprobados y suspensos.

$aprobados = 0;
$suspensos = 0;

// Variables para la mejor media y el mejor estudiante.

$mejorMedia = 0;
$mejorEstudiante = "";

// 3. Recorrer todos los estudiantes y mostrar resultados.

foreach ($estudiantes as $nombre => $notas) {
  // Calcula la media
  $media = calcularPromedio($notas);
  // Muestra el nombre del estudiante y la media
  echo "Estudiante: " . $nombre<br>;
  echo "Nota Media: " . number_format($media, 1) . <br>;
  // Comprueba si está aprobado o suspenso
  if ($media >= 6) {
    echo "Calificación: Aprobado<br>";
    $aprobados++;
  } else {
    echo "Calificación: Suspenso<br>";
    $suspensos++;
  }
  // Comprueba si es la mejor nota media
  if($media > $mejorMedia) {
    $mejorMedia = $media;
    $mejorEstudiante = $nombre;
  }
}

// 4. Total de aprobados y suspensos.