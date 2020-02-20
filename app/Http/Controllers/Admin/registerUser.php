<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Auth\Events\Verified;
use App\Notifications\NewUserNotification;
use Illuminate\Auth\Access\AuthorizationException;
class registerUser extends Controller
{
    public function index(){
        return 'Ola';
    }

    public function showCreatForm(){
        return view('Admin/dashboard/user/create');
    }



    public function createUser(Request $request){
        User::all();


        $data = $request->all();

        $nome = $data['name'];

        $sobrenome = $data['last_name'];

        $senha = '12345678';

        $data['password'] = bcrypt($senha);

        /**Atualizar imagem do perfil */
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $nomeImagem = uniqid();

            $extensao = $request->image->extension();

            $nomeFinal = "{$nomeImagem}.{$extensao}";

            $data['image'] = $nomeFinal;

           /**Salva a imagem na aplicação */
           $upload = $request->image->storeAs('images/users', $nomeFinal);

        } /**Fim atualizar imagem do perfil */

        User::create($data)->sendEmailVerificationNotification();

        return  redirect()->route('users.create')
                                            ->with('success', 'Novo usuário do sistema adicionado com sucesso!');
    }
}
