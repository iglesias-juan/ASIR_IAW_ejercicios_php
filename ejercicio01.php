<?php

/*
Ejercicio 1: Gestor de notas de estudiantes. 
  Crea un programa en PHP que: 
    1. Tenga un array con estudiantes y sus notas: 
      $estudiantes = [ 
        "Ana" => [8, 7, 9], 
        "Luis" => [5, 6, 4], 
        "María" => [10, 9, 10], 
        "Carlos" => [6, 6, 6] 
        ]; 
    2. Cree una función calcularPromedio($notas) que devuelva el promedio. 
    3. Recorra todos los estudiantes y: 
      • Muestre su nombre. 
      • Muestre su promedio. 
      • Indique: 
        • "Aprobado" si el promedio ≥ 6. 
        • "Suspenso" si el promedio < 6. 
    4. Al final, muestre: 
      • Cuántos aprobaron. 
      • Cuántos suspendieron. 
    5. Muestra el estudiante con el promedio más alto.
*/

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
  echo "Estudiante: " . $nombre . "<br>";
  echo "Nota Media: " . number_format($media, 1) . "<br>";
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

echo "Número de Aprobados: " . $aprobados . "<br>";
echo "Número de Suspensos: " . $suspensos . "<br>";

// 5. Mejor estudiante.

echo "El mejor estudiante: " . $mejorEstudiante . "con una nota media de " . number_format($mejorMedia, 1);

?>