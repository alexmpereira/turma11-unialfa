//TODO Clonar o projeto, fazer a copia do .envexemplo mudar o nome para .env e rodar o composer install
//TODO Rodar o comando php artisan key:generate

//TODO https://github.com/alexmpereira/turma11-unialfa

//TODO composer create-project laravel/laravel primeiro-projeto

//TODO php artisan serve

//TODO https://whimsical.com/

//TODOphp artisan make:controller ClientController -r

//TODOphp artisan make:migration create_clients_table

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/clients', [ClientController::class, 'index']);

//FIXME Extensão de configuração do TODO
"todo-tree.general.tags": [
"BUG",
"HACK",
"FIXME",
"TODO",
"XXX",
"[ ]",
"[x]"
],
"todo-tree.regex.regex": "(//|#|<!--|;|/\\_|^|^\\s_(-|\\d+.))\\s\*($TAGS)"
