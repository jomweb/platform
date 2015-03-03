<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Orchestra\Routing\Controller as BaseController;
use Orchestra\Routing\Traits\ControllerResponseTrait;

abstract class Controller extends BaseController
{
    use ControllerResponseTrait, DispatchesCommands, ValidatesRequests;
}
