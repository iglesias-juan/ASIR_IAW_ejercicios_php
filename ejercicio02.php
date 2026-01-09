<?php

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
  // Información
  echo "Nombre: " . $articulo["producto"] . "<br>";
  echo "Precio unitario: " . number_format($articulo["precio"], 2) . " €" . "<br>";
  echo "Cantidad: " . $articulo["cantidad"] . "<br>";
  echo "Subtotal: " . number_format($subtotal, 2) . " €" . "<br>";
}

// 3. Cálculo del total general.
// Se utilizará una función para calcular el total del carrito, esto es, la suma de los subtotales de cada producto.
// Función: calcularTotal($carrito).

function calcularTotal($carrito) {
  // Inicio
  $total = 0;
  // Bucle
  foreach ($carrito as $articulo) {
    $subtotal = $articulo["precio"] * $articulo["cantidad"];
    $total += $subtotal;
  }
  // Resultado
  return $total;
}

$total = calcularTotal($carrito);

// 4. Cálculo del total sin descuento, descuento aplicado y total final.

$descuento = 0; // Variable para el descuento
// Descuentos
if ($total > 1000) {
  $descuento = $total * 0.10; // Aplicando un descuento del 10%
} elseif ($total > 500) {
  $descuento = $total * 0.05; // Aplicando un descuento del 5%
}
// Total con descuento
$totalFinal = $total - $descuento;