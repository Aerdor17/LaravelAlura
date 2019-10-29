<?php

//use Symfony\Component\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});             

// series: esse é o caminho que do navegador
// SeriesController: é a classe que ele deve chamar quando eu executar o /series no navegador
// @listarSeries é a função dentro da class SeriesController que ele deve executar
Route::get ('/series', 'SeriesController@listarSeries');

?>
