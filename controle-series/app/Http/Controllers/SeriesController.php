<?php
namespace App\Http\Controllers;


class SeriesController extends Controller
{
    public function listarSeries () {
        $series = [
            'Grey\'s anatomy', 'supernatural', 'nos somos a onda'
        ];
    
        $html = "<ul>";
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";
    
        return $html;
    }
}





?>