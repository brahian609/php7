<?php
/**
 * Created by PhpStorm.
 * User: brahian
 * Date: 24/04/16
 * Time: 08:27 PM
 */

$curso = null;

// forma tradicional
$nombreCurso = (isset($curso)) ? $curso : "PHP7";

echo $nombreCurso;

echo "<br>";

//Operador de fusión de null
$nombreCursoFusion = $curso ?? "Javascript";

echo $nombreCursoFusion;

echo "<br>";

echo $curso ?? $nombreCursoFusion ?? "CSS";