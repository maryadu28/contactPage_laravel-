<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    //fonction qui affiche le formulaire
    public function create(){
        return view('email');
    }

    public function sendMail(Request $request)
    {   
        $request->validate([
          'email' => 'required|email',
          'sujet' => 'required',
          'nom' => 'required',
          'message' => 'required',
        ]);
       
        $data = [
          'sujet' => $request->sujet,
          'nom' => $request->nom,
          'email' => $request->email,
          'message' => $request->message
        ];
         
        Mail::send('sendmail', $data, function($message) use ($data) {
            $message->to($data['email'])
                    ->from($data['email'])
                    ->subject($data['sujet']);
                  
        });
        //on crée l'user contact 
        $contact = new Contact;
        // on récupère son email et son message posté
        $contact->email = $request->email;
        $contact->message = $request->message;
        //on enregistre dans la table de la base de données 
        $contact->save();

        return back()->with(['message' => 'Votre email a été bien envoyé!']);
        
    }
    
}
 

