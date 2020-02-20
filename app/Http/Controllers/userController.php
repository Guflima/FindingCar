<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function profile(){
        return view('sistema.myprofile.index');
    }

    public function editProfile(){
        return view('sistema.myprofile.edit');
    }

    public function updateProfile(Request $request){

         /**Pega todos os dados enviados */
         $data = $request->all();

         /**Usuário logado */
         $userAuth = auth()->user();

         /**Se o usuario nao enviar uma imagem
          * A imagem continua a msm
          */
          $data['image'] = $userAuth->image;
          $imagem = $data['image'];

         /**Atualizar imagem do perfil */
         if($request->hasFile('image') && $request->file('image')->isValid()){
            if($imagem!=null){
                $nomeImagem = $userAuth->image;
                $imagemSemExtensaoDoBD = explode(".", $nomeImagem);
                $nomeImagem = $imagemSemExtensaoDoBD[0];
            }else{
                $nomeImagem = kebab_case("{$userAuth->id}"."{$userAuth->name}"."{$userAuth->last_name}");
            }
            $extensao = $request->image->extension();
            $nomeFinal = "{$nomeImagem}.{$extensao}";
            $data['image'] = $nomeFinal;


            /**Salva a imagem na aplicação */
            $upload = $request->image->storeAs('images/users', $nomeFinal);
         } /**Fim atualizar imagem do perfil */

         /**Atualiza o perfil */
         $userAuth->update($data);

         if($userAuth->update($data)){
            return redirect()->route('myprofile.index')->with('success', 'Dados alterados com sucesso.');
         }else{
             return redirect()->back()->with('error', 'Erro ao atualizar os dados, por favor, tente novamente.');
         }
    }

    public function completeRegister(Request $request){

         /**Pega todos os dados enviados */
         $data = $request->all();

         /**Usuário logado */
         $userAuth = auth()->user();

         /**Valida os dados recebidos */
         $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:30'],
            'last_name' => ['required', 'string', 'max:90'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cep' => ['required', 'string', 'max:9'],
            'numero_do_complemento' => ['required', 'string', 'max:20'],
            'cpf' => ['required', 'string', 'max:11'],
            'telefone_comercial' => ['required', 'string', 'max:18'],
            'telefone_celular' => ['string', 'max:18'],
        ]);

        /**criptografa a senha */
        $novaSenha = $data['password'];

        $data['password'] = bcrypt($novaSenha);

           /**Se o usuario nao enviar uma imagem
          * A imagem continua a msm
          */
          $data['image'] = $userAuth->image;
          $imagem = $data['image'];

         /**Atualizar imagem do perfil */
         if($request->hasFile('image') && $request->file('image')->isValid()){
            if($imagem!=null){
                $nomeImagem = $userAuth->image;
                $imagemSemExtensaoDoBD = explode(".", $nomeImagem);
                $nomeImagem = $imagemSemExtensaoDoBD[0];
            }else{
                $nomeImagem = kebab_case("{$userAuth->id}"."{$userAuth->name}"."{$userAuth->last_name}");
            }
            $extensao = $request->image->extension();
            $nomeFinal = "{$nomeImagem}.{$extensao}";
            $data['image'] = $nomeFinal;


            /**Salva a imagem na aplicação */
            $upload = $request->image->storeAs('images/users', $nomeFinal);
         } /**Fim atualizar imagem do perfil */

          /**Atualiza o perfil */
          $userAuth->update($data);

          if($userAuth->update($data)){
             return redirect()->route('home.index')->with('success');
          }else{
              return redirect()->back()->with('error');
          }


    }
}

