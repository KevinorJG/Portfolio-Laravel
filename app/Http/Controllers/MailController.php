<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Artisan;

class MailController extends Controller
{

    public function SendMail(Request $request)
    {
        $data = $request->all();
        //Inyecta los datos que utiliza la vista para luego connvertir la vista a texto
        $html = View::make('MessageMail')->with('data', $data)->render(); 

        $result = Mail::html($html, function ($message) use ($data) {
            $message->to($data['email'])
                ->subject('Informe de contacto');
        });
        $result = ($result == true) 
        ? Session::flash('success', 'Correo enviado') 
        : Session::flash('failer', 'Correo no enviado');

        $request->flush(); //Limpia los inputs de la session
        return redirect()->route('Home');
    }

    private function ClearCache(){
        Artisan::call('cache:clear');
    }
}
