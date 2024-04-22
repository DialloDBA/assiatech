<?php

namespace App\Http\Controllers;

use App\Rules\ValidDomain;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\NewContactMessageMail;
use App\Mail\NewUserContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactDomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view("assia.pages.contact.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $r->validate([
            "nom_complet" => "required",
            "email" => ["required",new ValidDomain],
            "telephone" => "required",
            "site_web" => "required",
            "sujet" => "required",
            "domaine" => "required",
            "message" => "required",
            "termes_et_conditions" => "required"
        ]);
       $c = ContactMessage::create([
            'nom'=>$r->nom_complet,
            'email'=>$r->email,
            'telephone'=>$r->telephone,
            'site_web'=>$r->site_web,
            'sujet'=>$r->sujet,
            'message'=>$r->message,
            'groupe_service_id'=>$r->domaine,
        ]);
        if($c){
            session()->flash("notification.type","success");
            session()->flash("notification.message","Votre Message a été enregister avec succès.");
            Mail::to("rahamanediallo108@gmail.com")->send(new NewUserContactMessage($c));
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
