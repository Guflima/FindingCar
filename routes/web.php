<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('principal');


Route::get('/url', function () {
    return view('home');
});

Auth::routes();

Route::resource('/home', '');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pesquisar-veiculo', function(){
    return view('pesquisar_veiculos');
})->name('pesquisar.veiculo');

Route::get('/grafico', function(){
    return view('graficozinho/grafico');
})->name('grafico');
<?php

/**
 * Veja mais sobre a function
 * parseLocale em
 * app/Helpers/functions.php
 */
Route::prefix(parseLocale())->group(function (){

    /**Rota inicial */
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    /**Rotas do manual do usuário */
    Route::group(['prefix' => 'manual'], function () {
        Route::get('/', function (){
            return view('manual-do-usuario.index');
        })->name('manual.do.usuario');

        Route::get('/como-editar-meu-perfil', function (){
            return view('manual-do-usuario.meuperfil.como-editar-meu-perfil');
        })->name('como-editar-meu-perfil');
    });

    /**Completar registro */
    Route::put('completar-registro/update', 'userController@completeRegister')->name('user.completar-registro');

    /**Rotas de autenticação */
    Auth::routes(['verify' => true]);

    /***Todas as rotas que estão neste grupo,
     * o usuário precisa estar autenticado, com o perfil completo
     * e verificado para acessar.
     */
    Route::group(['middleware' => ['web', 'auth', 'verified', 'auth.complete_register']], function () {
        /**Rota padrão após ser autenticado */
        Route::resource('home', 'homeController');

        /**Rota de conclusão de cadastro */
        Route::get('/concluirCadastro', function (){
            return view('auth/complete_register');
        })->name('complete_register');

        /**Rota eventos */
        Route::resource('eventos', 'eventController');

        Route::get('profile', 'userController@profile')->name('myprofile.index');
            Route::get('profile/edit', 'userController@editProfile')->name('myprofile.edit');
                Route::put('profile/update', 'userController@updateProfile')->name('myprofile.update');


            Route::resource('clientes', 'Admin\ClientesController');




        /**Rotas somente para administradores */
        Route::group(['middleware' => ['auth.admin']], function () {

            Route::resource('dashboard', 'Admin\dashboardController');

            Route::get('dashboard/users/create', 'Admin\registerUser@showCreatForm')
                                                                            ->name('users.create');

            Route::post('dashboard/users/create/function', 'Admin\registerUser@createUser')
                                                                            ->name('users.store');
        });/**Fim rotas de administradores */

    });/**Fim do grupo de rotas autenticadas */
});/**Fim da função parse locale */

