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
        
        $lugares = Lugares::all()->where( 'status', '1')->where('turma', '4');
       
    return view('lugares',
['lugares' => $lugares]);

    }




    public function oitavo() {
        
        $lugares = Lugares::all()->where('turma', '3')->where('status', '1');
        $conteudo = Conteudo::all()->where('turma', '3')->where('status', '1');
    return view('oitavo', 
['lugares' => $lugares, 'conteudo' => $conteudo]);

    }

    public function setimo() {
        
        $lugares = Lugares::all()->where('turma', '2')->where('status', '1');
        $conteudo = Conteudo::all()->where('turma', '2')->where('status', '1');
    return view('setimo', 
['lugares' => $lugares, 'conteudo' => $conteudo]);

    }
    public function sexto() {
        
        $lugares = Lugares::all()->where('turma', '1')->where('status', '1');
        $conteudo = Conteudo::all()->where('turma', '1')->where('status', '1');
    return view('sexto', 
['lugares' => $lugares, 'conteudo' => $conteudo]);

    }
    public function lugar($id) {

            $lugares = Lugares::findOrFail($id);
        
            return view('lugar', ['lugares' => $lugares]);
        
        

    }
    public function conteudoind($id) {

        $lugares = Conteudo::findOrFail($id);
    
        return view('conteudo', ['lugares' => $lugares]);
    
    

}

public function userdash() {

    $user = auth()->user();

    return view('user.dashboard', ['user'=> $user]);



}
    public function lugaradm(){
        $lugares = Lugares::all();



        return view('admin.lugar.lugar', ['lugares' => $lugares]);

    }
    public function lugaruser(){
        $lugares = Lugares::all();



        return view('user.lugar.lugar', ['lugares' => $lugares]);

    }
    public function lugarprof(){
        $user = auth()->user();
        $lugares = Lugares::all()->where('turma', $user->turma);



        return view('professor.lugar.lugar', ['lugares' => $lugares]);

    }
    public function admin(){
        $user = auth()->user();

        return view('admin.admin', ['user' => $user]);

    }
    public function admindash(){
        $user = auth()->user();

        return view('admin.dashboard', ['user' => $user]);

    }
    public function profdash(){
        $user = auth()->user();

        return view('professor.dashboard', ['user' => $user]);

    }
    public function editlugaradmin($id){
        $lugaredit = Lugares::findOrFail($id);




        return view('admin.lugar.edit.edit', ['lugar' => $lugaredit]);

    }
    public function createadm(){
        return view('admin.lugar.create.createlugar');

    }
    public function createlugaruser(){
        return view('user.lugar.create.createlugar');

    }
    public function createprof(){
        return view('professor.lugar.create.createlugar');

    }
    public function profileadm(){
        return view('admin.profile.profile');

    }

    public function profileuser(){
        return view('pr.profile.profile');

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
        $lugarcreate->turma = $request->private4;
        $lugarcreate->save();

        return redirect('/admin/lugar')->with('msg', 'Lugar Criado com sucesso!');

    }

    public function postlugaruser(Request $request){

        $lugarcreate = new Lugares;
        $lugarcreate->titulo = $request->titulo;
        $lugarcreate->descricao = $request->descricao;
        $lugarcreate->mapa = $request->mapa;
        $lugarcreate->status = '0';
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/lugares'), $imageName);

            $lugarcreate->foto = $imageName;

        }
        $user = auth()->user();
        $lugarcreate->user_id = $user->id;
        $lugarcreate->turma = $user->turma;
        $lugarcreate->save();

        return redirect('/user/lugar')->with('msg', 'Lugar Criado com sucesso!');

    }
    public function postlugarprof(Request $request){

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
        $lugarcreate->turma = $user->turma;
        $lugarcreate->save();

        return redirect('/professor/lugar')->with('msg', 'Lugar Criado com sucesso!');

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
    public function postuserprof(Request $request){

        $newuser1 = new User;
        $newuser1->name = $request->nome;
        $newuser1->email = $request->email;
        $newuser1->password = Hash::make($request->senha);
        $newuser1->turma = $request->private3;
        $newuser1->utype = $request->private2;
        
                $newuser1->save();

        return redirect('/professor/users')->with('msg', 'Usúario Criado com sucesso!');

    }
    public function editlugar(Request $request) {

        Lugares::findOrFail($request->id)->update($request->all());

        return redirect('/admin/lugar')->with('msg', 'Lugar Editado com sucesso!');
    }
    public function users(){
        $users = User::all();

        return view('admin.users.users', ['users' => $users]);

    }
    public function usersprof(){
        $user = auth()->user();
        
        $users = User::all()->where('turma', $user->turma);

        

        
        

        return view('professor.users.users', ['users' => $users]);

    }
    public function turmaforms(){
        

        return view('admin.turmas.create.createturma');

    }
    public function usersview($id){
        $user = User::findOrFail($id);

        return view('admin.users.view', ['user' => $user]);

    }
    public function usersviewprof($id){
        $user = User::findOrFail($id);

        return view('admin.users.view', ['user' => $user]);

    }

    public function createconteudo(){




        return view('admin.conteudo.create.createconteudo');
    }
    public function createconteudoprof(){




        return view('professor.conteudo.create.createconteudo');
    }


    public function createconteudouser(){




        return view('user.conteudo.create.createconteudo');
    }
    public function conteudo(){


        $conteudos = Conteudo::all();

        

        




        return view('admin.conteudo.conteudo', ['conteudos'=>$conteudos]);
    }
    public function conteudoprof(){

        $user = auth()->user();
        $conteudos = Conteudo::all()->where('turma', $user->turma);

        

        




        return view('professor.conteudo.conteudo', ['conteudos'=>$conteudos]);
    }
public function editlugarnova($id)
{
    $lugar = Lugares::findOrFail($id);
    return view('admin.lugar.edit.edit', ['lugar' => $lugar]);
}
public function editlugarnovaprofessor($id)
{
    $lugar = Lugares::findOrFail($id);
    return view('professor.lugar.edit.edit', ['lugar' => $lugar]);
}
public function editlugarnovauser($id)
{
    $lugar = Lugares::findOrFail($id);
    return view('user.lugar.edit.edit', ['lugar' => $lugar]);
}
public function editcontnova($id)
{
    $lugar = Conteudo::findOrFail($id);
    return view('admin.conteudo.edit.edit', ['lugar' => $lugar]);
}
public function editcontnovaprof($id)
{
    $lugar = Conteudo::findOrFail($id);
    return view('professor.conteudo.edit.edit', ['lugar' => $lugar]);
}
    public function conteudouser(){

        $user = auth()->user();
        $conteudos = Conteudo::all()->where('turma', $user->turma);

        

        




        return view('user.conteudo.conteudo', ['conteudos'=>$conteudos]);
    }
    public function profile(){

        $user = auth()->user();
        




        return view('admin.profile', ['user'=>$user]);
    }


    public function lugarupadmin(Request $request, $id)
    {
        echo $request->titulo;
        $lugar= Lugares::find($id);
        $lugar->titulo= $request->input('titulo');
        $lugar->descricao= $request->input('descricao');
        $lugar->status= $request->input('private');
        $lugar->mapa= $request->input('mapa');
        $lugar->turma= $request->input('private4');
        
        $lugar->update();
        return redirect('/admin/lugar')->with('msg', 'Conteudo Editado com sucesso!');

    }
    public function lugarupprof(Request $request, $id)
    {
        echo $request->titulo;
        $lugar= Lugares::find($id);
        $lugar->titulo= $request->input('titulo');
        $lugar->descricao= $request->input('descricao');
        $lugar->status= $request->input('private');
        $lugar->mapa= $request->input('mapa');
        
        
        $lugar->update();
        return redirect('/professor/lugar')->with('msg', 'Conteudo Editado com sucesso!');

    }
    public function edituserfun(Request $request, $id)
    {
        
        $user= User::find($id);
        $user->name= $request->input('nome');
        $user->email= $request->input('email');
        $user->utype= $request->input('private2');
        $user->turma= $request->input('private3');
        
        
        $user->update();
        return redirect('/admin/users')->with('msg', 'Conteudo Editado com sucesso!');

    }
    public function edituserfunprof(Request $request, $id)
    {
        
        $user= User::find($id);
        $user->name= $request->input('nome');
        $user->email= $request->input('email');
        $user->utype= $request->input('private2');
        $user->turma= $request->input('private3');
        
        
        $user->update();
        return redirect('/professor/users')->with('msg', 'Conteudo Editado com sucesso!');

    }
    public function lugarupuser(Request $request, $id)
    {
        
        $lugar= Lugares::find($id);
        $lugar->titulo= $request->input('titulo');
        $lugar->descricao= $request->input('descricao');
        $lugar->status= '0';
        $lugar->mapa= $request->input('mapa');
        
        
        $lugar->update();
        return redirect('/user/lugar')->with('msg', 'Conteudo Editado com sucesso!');

    }

    public function conteudoupadmin(Request $request, $id)
    {
        
        $lugar= Conteudo::find($id);
        $lugar->titulo= $request->input('titulo');
        $lugar->descricao= $request->input('descricao');
        $lugar->nomebtn= $request->input('titulobotao');
        $lugar->estilobtn= $request->input('private');
        $lugar->linkbtn= $request->input('linkbotao');
        $lugar->turma= $request->input('private4');
        $lugar->status=  $request->input('private2');
       
        
        
        $lugar->update();
        return redirect('/admin/conteudo')->with('msg', 'Conteudo Editado com sucesso!');

    }
    public function conteudoupprof(Request $request, $id)
    {
        
        $lugar= Conteudo::find($id);
        $lugar->titulo= $request->input('titulo');
        $lugar->descricao= $request->input('descricao');
        $lugar->nomebtn= $request->input('titulobotao');
        $lugar->estilobtn= $request->input('private');
        $lugar->linkbtn= $request->input('linkbotao');
        
        $lugar->status=  $request->input('private2');
       
        
        
        $lugar->update();
        return redirect('/professor/conteudo')->with('msg', 'Conteudo Editado com sucesso!');

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
    public function createconteudopostprof(Request $request){
        $conteudocreate = new Conteudo;
        $user = auth()->user();
        $conteudocreate->titulo = $request->titulo;
        $conteudocreate->descricao = $request->descricao;
        $conteudocreate->estilobtn = $request->private;
        $conteudocreate->nomebtn = $request->titulobotao;
        $conteudocreate->linkbtn = $request->linkbotao;
        //$user = auth()->user();
        $conteudocreate->turma = $user->turma;
        
        $conteudocreate->status = '0';
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/conteudo'), $imageName);

            $conteudocreate->foto = $imageName;

        }
        
        $conteudocreate->user_id = $user->id;
        $conteudocreate->save();

        return redirect('/professor/conteudo')->with('msg', 'Conteudo Criado com sucesso!');
    }
    public function createconteudopostusr(Request $request){
        $conteudocreate = new Conteudo;
        $user = auth()->user();
        $conteudocreate->titulo = $request->titulo;
        $conteudocreate->descricao = $request->descricao;
        $conteudocreate->estilobtn = $request->private;
        $conteudocreate->nomebtn = $request->titulobotao;
        $conteudocreate->linkbtn = $request->linkbotao;
        //$user = auth()->user();
        $conteudocreate->turma = $user->turma;
        
        $conteudocreate->status = '0';
        
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/conteudo'), $imageName);

            $conteudocreate->foto = $imageName;

        }
        
        $conteudocreate->user_id = $user->id;
        $conteudocreate->save();

        return redirect('/professor/conteudo')->with('msg', 'Conteudo Criado com sucesso!');
    }
     public function createuserview()


    {

        
        return view('professor.users.create.createuser');
    }
    public function createuserviewadm()


    {

        
        return view('admin.users.create.createuser');
    }
    public function vieweditprof($id)


    {

        $user = User::findOrFail($id);
        return view('professor.users.edit.edituser', ['user' => $user]);
    }
    public function viewlugardadm($id)
    {
        $lugar = Lugares::findOrFail($id);
        $lugarowner = User::where('id', $lugar->user_id)->first()->toArray();

        return view('admin.lugar.view.viewlugar', ['lugar' => $lugar, 'lugarowner' => $lugarowner ]);
    }
    public function viewlugardprof($id)
    {
        $lugar = Lugares::findOrFail($id);
        $lugarowner = User::where('id', $lugar->user_id)->first()->toArray();

        return view('professor.lugar.view.viewlugar', ['lugar' => $lugar, 'lugarowner' => $lugarowner ]);
    }
    public function viewlugardpuser($id)
    {
        $lugar = Lugares::findOrFail($id);
        $lugarowner = User::where('id', $lugar->user_id)->first()->toArray();

        return view('user.lugar.view.viewlugar', ['lugar' => $lugar, 'lugarowner' => $lugarowner ]);
    }
    public function viewconteudoadm($id)
    {
        $conteudo = Conteudo::findOrFail($id);
        $conteudoowner = User::where('id', $conteudo->user_id)->first()->toArray();

        return view('admin.conteudo.view.viewconteudo', ['conteudo' => $conteudo, 'conteudoowner' => $conteudoowner ]);
        
    }
    public function edituser($id)
    {
        $user = User::findOrFail($id);
        

        return view('admin.users.edit.edituser', ['user' => $user]);
        
    }
    public function viewconteudoprof($id)
    {
        $conteudo = Conteudo::findOrFail($id);
        $conteudoowner = User::where('id', $conteudo->user_id)->first()->toArray();

        return view('professor.conteudo.view.viewconteudo', ['conteudo' => $conteudo, 'conteudoowner' => $conteudoowner ]);
        
    }

    public function viewconteudouser($id)
    {
        $conteudo = Conteudo::findOrFail($id);
        $conteudoowner = User::where('id', $conteudo->user_id)->first()->toArray();

        return view('user.conteudo.view.viewconteudo', ['conteudo' => $conteudo, 'conteudoowner' => $conteudoowner ]);
        
    }
}
