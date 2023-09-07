<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request){
        
        //Ricevo i dati del form
        $data = $request->all();

        //Li memorizzo nel DB
        $new_lead = new Lead();
        $new_lead->fill($data);
        $new_lead->save();

        //Li invio alla mia email
        Mail::to('info@silo.com')->send(new NewContact($new_lead));
    }
}
