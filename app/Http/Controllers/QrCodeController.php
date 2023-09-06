<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\QR;
use \SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class QrCodeController extends Controller
{
    private function generateCode(){
        $taille = 10;
        $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $chaineAleatoire ="";

        for ($i=0; $i < $taille; $i++) {
            $chaineAleatoire.=$caracteres[rand(0,strlen($caracteres)-1)];
        }
        return $chaineAleatoire;
    }

    public function generate() {
        $code = $this->generateCode() . now();
        $qr = new QR;
        $qr->code = $code;
        $qr->employe = 1;
        $qrcode = QrCode::size(200)->generate($code);
        $qr->save();
        return view("simple-qrcode", compact(['qrcode']));
    }

    public function scanner(){
        return view('scan');
    }
}
