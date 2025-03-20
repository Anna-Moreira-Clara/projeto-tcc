# Alteração database

 * cadastrou o admin e cliente
-------------------------------------------------------
Utilizamos esse código para cadastrar no banco de dados 

php artisan db:seed 
------------------------------------------------------------------------------------------------------------------

# Criei a pasta admin (video ep 6)
 dentro dela criei o arquivo dashboard.blade.php
-------------------------------------------------------------------------------------------------------------------
# Comando no terminal
Digitei o seguinte comando

php artisan make:controller Backend/AdminController

Foi criado a pasta Backend e o arquivo Admin Controller
---------------------------------------------------------------------------------------------------------------------
# Criei nova rota para o painel administrador
Routes
web.php (criei a rota com autenticação dentro desse arquivo)

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');
-----------------------------------------------------------------------------------------------------------------

# Admin Controller
 public function dashboard()
    {
        return view('admin/dashboard');
    }



