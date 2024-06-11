<?php
require_once("observable.php");
require_once("abstract_widget.php");

$dat = new Observable();
$widgetA = new BasicWidget();
$widgetB = new FancyWidget();

$dat->addObserver($widgetA);
$dat->addObserver($widgetB);

// Actualiza los registros con los nuevos valores
$dat->addRecord("January", -40, 2024);
$dat->addRecord("February", -20, 2024);
$dat->addRecord("March", 80, 2024);
$dat->addRecord("April", -60, 2024);
$dat->addRecord("May", 60, 2024);
$dat->addRecord("June", 30, 2024);
$dat->addRecord("July", -10, 2024);

// Comentar las líneas que dibujan las tablas para que no se muestren
// $widgetA->draw();
// $widgetB->draw();

$chartData = $dat->getData();
?>
