<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use App\Models\Information;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\NewContactMessageMail;
use Illuminate\Support\Facades\Mail;

class AssiaController extends Controller
{
    public function __contruct(){
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view("assia.index",[
            'blog'=> Post::whereActived('1')->latest()->limit(3)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contact()
    {
        return view("assia.pages.contact.index");
    }

    public function new_contact_message(Request $r){
        $this->validate($r,[
            "nom_complet" => "required",
            "email" => "required",
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
            Mail::to("rahamanediallo108@gmail.com")->send(new NewContactMessageMail($c));
            return redirect()->back();
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function posts()
    {
        
        return view("assia.pages.blog.index",[
            "posts"=> Post::whereActived('1')->orderBy('created_at','DESC')->paginate(12),
        ]);
    }
    public function single(Post $post)
    {
        return view("assia.pages.blog.index_view",[
            "post"=>$post,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
