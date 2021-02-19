<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Notificacao;
use App\Models\Vendedor;

class RequisicoesController extends Controller
{
    public function index()
    {
    	$vendedores=Vendedor::all();
    	Mail::to('7354422b7d-88cf11@inbox.mailtrap.io')->send(new Notificacao($vendedores));
    }
}
