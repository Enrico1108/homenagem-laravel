<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugares;
use App\Models\User;
use App\Models\Turma;
use App\Models\Conteudo;
use Illuminate\Support\Facades\Hash;
class LugarController extends Controller
{
    public function index() {
        return view('home');
    }

    public function sobre(){
        return view('sobre');

    }
    public function lugares() {
        $busca = request('busca');
        $lugares = Lugares::all();
    return view('lugares', ['busca' => $busca],
['lugares' => $lugares]);
    }
    public function lugar($id) {

            $lugares = Lugares::findOrFail($id);
        
            return view('lugar', ['lugares' => $lugares]);
        
        

    }
    public function lugaradm(){
        $lugares = Lugares::all();



        return view('admin.lugar.lugar', ['lugares' => $lugares]);

    }
    public function admin(){
        return view('admin.admin');

    }
    public function editlugaradmin($id){
        $lugaredit = Lugares::findOrFail($id);




        return view('admin.lugar.edit.edit', ['lugar' => $lugaredit]);

    }
    public function createadm(){
        return view('admin.lugar.create.createlugar');

    }
    public function profileadm(){
        return view('admin.profile.profile');

    }
    public function postlugar(Request $request){

        $lugarcreate = new Lugares;
        $lugarcreate->titulo = $request->titulo;
        $lugarcreate->descricao = $request->descricao;
        $lugarcreate->mapa = $request->mapa;
        $lugarcreate->status = $request->private;
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/lugares'), $imageName);

            $lugarcreate->foto = $imageName;

        }
        $user = auth()->user();
        $lugarcreate->user_id = $user->id;
        $lugarcreate->save();

        return redirect('/admin/lugar')->with('msg', 'Lugar Criado com sucesso!');

    }
    
    public function postuser(Request $request){

        $newuser = new User;
        $newuser->name = $request->nome;
        $newuser->email = $request->email;
        $newuser->password = Hash::make($request->senha);
        $newuser->turma = $request->private3;
        $newuser->utype = $request->private2;
        
                $newuser->save();

        return redirect('/admin/users')->with('msg', 'Usúario Criado com sucesso!');

    }
    public function editlugar(Request $request) {

        Lugares::findOrFail($request->id)->update($request->all());

        return redirect('/admin/lugar')->with('msg', 'Lugar Editado com sucesso!');
    }
    public function users(){
        $users = User::all();

        return view('admin.users.users', ['users' => $users]);

    }
    public function turmaforms(){
        

        return view('admin.turmas.create.createturma');

    }
    public function usersview($id){
        $user = User::findOrFail($id);

        return view('admin.users.view', ['user' => $user]);

    }

    public function createconteudo(){




        return view('admin.conteudo.create.createconteudo');
    }
    public function conteudo(){


        $conteudos = Conteudo::all();

        

        




        return view('admin.conteudo.conteudo', ['conteudos'=>$conteudos]);
    }
    public function profile(){

        $user = auth()->user();
        




        return view('admin.profile', ['user'=>$user]);
    }

    public function createconteudopost(Request $request){
        $conteudocreate = new Conteudo;
        $conteudocreate->titulo = $request->titulo;
        $conteudocreate->descricao = $request->descricao;
        $conteudocreate->estilobtn = $request->private;
        $conteudocreate->nomebtn = $request->titulobotao;
        $conteudocreate->linkbtn = $request->linkbotao;
        //$user = auth()->user();
        //$conteudocreate->turma = $user->turma;
        $conteudocreate->turma = $request->private4;
        $conteudocreate->status = $request->private2;
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/conteudo'), $imageName);

            $conteudocreate->foto = $imageName;

        }
        $user = auth()->user();
        $conteudocreate->user_id = $user->id;
        $conteudocreate->save();

        return redirect('/admin/conteudo')->with('msg', 'Conteudo Criado com sucesso!');
    }

     public function createuserview()


    {

        
        return view('admin.users.create.createuser');
    }

    public function viewlugardadm($id)
    {
        $lugar = Lugares::findOrFail($id);
        $lugarowner = User::where('id', $lugar->user_id)->first()->toArray();

        return view('admin.lugar.view.viewlugar', ['lugar' => $lugar, 'lugarowner' => $lugarowner ]);
    }

    public function viewconteudoadm($id)
    {
        $conteudo = Conteudo::findOrFail($id);
        $conteudoowner = User::where('id', $conteudo->user_id)->first()->toArray();

        return view('admin.conteudo.view.viewconteudo', ['conteudo' => $conteudo, 'conteudoowner' => $conteudoowner ]);
        
    }
}
