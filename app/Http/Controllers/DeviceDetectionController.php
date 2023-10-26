<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceDetectionController extends Controller
{
    public function deviceDetect(Request $request)
    {
        try {
            dd($request);
            $data = json_decode(file_get_contents('php://input'), true);
            
            dd($data); // Vérifiez si $isMobile a la valeur attendue
        } catch (\Exception $e) {
            // Gérez l'exception ici (log, retournez une réponse d'erreur, etc.)
            dd($e->getMessage()); // Affichez l'erreur pour le débogage
        }
    }
}
