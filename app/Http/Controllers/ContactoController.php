<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class ContactoController extends Controller
{
    public function mostrarFormulario()
    {
        return view('contacto.formulario');
    }

    public function enviarMensaje(Request $request)
    {
        $data = [
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'mensaje' => $request->input('mensaje')
        ];

        Mail::to('destinatario@example.com')->send(new ContactoMail($data));

        return view('contacto.confirmacion');
    }
}
