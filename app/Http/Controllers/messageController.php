<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\MessageReceived;

class messageController extends Controller
{
    public function store()
    {

        //Validamos los datos ingresados
        $message = request()->validate([
            'nombre_contacto' => 'required',
            'asunto_contacto' => 'required',
            'correo_contacto' => 'required|email',
            'mensaje_contacto' => 'required'
        ]);

        //Enviamos el email 
        Mail::to('contacto@mysterlink.com')->queue(new MessageReceived($message));

        Session::flash('mensaje','Recibimos tu mensaje');

        return redirect(route('index'));
    }
}
