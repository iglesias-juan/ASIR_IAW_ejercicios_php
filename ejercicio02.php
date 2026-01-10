<?php

/*
Ejercicio 2: Simulador de carrito de compras. 
  Crea un carrito de compras con este formato: 
    $carrito = [ 
      ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1], 
      ["producto" => "Ratón", "precio" => 25, "cantidad" => 2], 
      ["producto" => "Teclado", "precio" => 45, "cantidad" => 1], 
      ]; 
  El programa debe: 
    1. Mostrar cada producto con: 
      • Nombre. 
      • Precio unitario. 
      • Cantidad. 
      • Subtotal (precio * cantidad). 
    2. Calcular el total general. 
    3. Aplicar descuentos: 
      • Si el total > 1000 → 10% de descuento. 
      • Si el total > 500 → 5% de descuento. 
      • Si no → sin descuento. 
    4. Mostrar: 
      • Total sin descuento. 
      • Descuento aplicado. 
      • Total final. 
    5. Usa una función calcularTotal($carrito).
*/

// 1. Array del carrito.

$carrito = [
  ["producto" => "Teléfono", "precio" => 1499.99, "cantidad" => 1],
  ["producto" => "Auriculares", "precio" => 605.99, "cantidad" => 1],
  ["producto" => "Ratón", "precio" => 29.99, "cantidad" => 3],
  ["producto" => "Teclado", "precio" => 94.99, "cantidad" => 4],
  ["producto" => "Pantalla", "precio" => 652.95, "cantidad" => 1],
  ["producto" => "Portátil", "precio" => 2250.90, "cantidad" => 7],
];

// 2. Productos del carrito (nombre, precio unitario, cantidad y subtotal).

foreach ($carrito as $articulo) {
  // Calcula el subtotal de cada articulo
  $subtotal = $articulo["precio"] * $articulo["cantidad"];
  // Información de cada producto con nombre, precio unitario, cantidad y subtotal
  echo "Nombre: " . $articulo["producto"] . "<br>";
  echo "Precio unitario: " . number_format($articulo["precio"], 2) . " €" . "<br>";
  echo "Cantidad: " . $articulo["cantidad"] . "<br>";
  echo "Subtotal: " . number_format($subtotal, 2) . " €" . "<br>";
}

// 3. Cálculo del total general.
// Se utilizará una función para calcular el total del carrito, esto es, la suma de los subtotales de cada producto.
// Función: calcularTotal($carrito).

function calcularTotal($carrito) {
  // Inicio (empieza en 0)
  $total = 0;
  // Bucle
  foreach ($carrito as $articulo) {
    $subtotal = $articulo["precio"] * $articulo["cantidad"];
    $total += $subtotal;
  }
  // Resultado
  return $total;
}
// Llamada a la función
$total = calcularTotal($carrito);

// 4. Cálculo del total sin descuento, descuento aplicado y total final.
// Cálculo del descuento
$descuento = 0; // Variable para el descuento
// Condiciones de descuento
if ($total > 1000) {
  $descuento = $total * 0.10; // Aplicando un descuento del 10%
} elseif ($total > 500) {
  $descuento = $total * 0.05; // Aplicando un descuento del 5%
}
// Variable total con descuento
$totalFinal = $total - $descuento;

// 5. Total sin descuento.

echo "Total sin descuento: " . number_format($total, 2) . " €" . "<br>";
// 6. Descuento aplicado.
echo "Descuento aplicado: " . number_format($descuento, 2) . " €" . "<br>";
// 7. Total final.
echo "Total final: " . number_format($totalFinal, 2) . " €";

?>