<?php

namespace App\Http\Controllers;

/* use Illuminate\Http\Request; no lo uso porque tengo el request abajo*/
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store()
    {
    	/*Request()*/
/*
    	Mail::to('fiallosc@gmail.com')->send(new ContactanosMailable);
    	*/

    	
    	$message = Request();
    	Mail::to('fiallosc@gmail.com')->send(new ContactanosMailable($message));
    	return 'Mensaje enviado';
    	

 		/* return new ContactanosMailable($message); */ 

    	
    }
}
