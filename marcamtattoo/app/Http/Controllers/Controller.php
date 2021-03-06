<?php
/**
* Aquesta fitxer conté els controladors per defecte.
*
* Aquests controladors són els que per defecte incorpora Laravel per a algunes funcions com validar Requests.
*
* @package app\Http\Controllers
* @author Raúl <raul@gmail.com>
* @license GPL
*/
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
* Classe principal Controller.
*
* Aquesta classe es la classe principal de Controller que carrega Laravel per defecte. Utilitza varis paquests per el correcte funcionament.
* Per més informació sobre els Controllers de Laravel visita @link http://laravel.com/
* @uses Illuminate\Routing\Controller::BaseController
*/
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
