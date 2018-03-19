<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class GeneralController extends Controller
{
    public function projects($name) {
        try {
            return view('projects/'$name);
        } catch (\Exception $e) {
            abort(404);
        }
    }
}
