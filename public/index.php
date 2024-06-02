<?php

session_start();

use APP\Models\Model;
use APP\Models\User;
use Dotenv\Dotenv;
use SecTheater\Database\Grammars\MySQLGrammar;
use SecTheater\Http\Request;
use SecTheater\Http\Response;
use SecTheater\Http\Route;
use SecTheater\Support\Arr;
use SecTheater\Support\Config;
use SecTheater\Validation\Validator;

require_once __DIR__.'/../src/Support/helpers.php';
require_once base_path().'vendor/autoload.php';
require_once base_path().'routes/web.php';

$dotenv = Dotenv::createImmutable(base_path());
$dotenv->load();
// echo '<pre>';
// var_dump(app()->session->exists('user'));
// // var_dump($_SESSION);
// UserGet(1);
// exit;

// print_r(app()->session->get('user')[0]);
app()->run();

// str_contains strtolower

// var_dump (Route::$routes['get']['/']());

// Request
// $route = new Route(new Request(), new Response());
// dump($route->request->path());

// Response
// $route = new Route(new Request(), new Response());
// $route->resolve();

// HAS
// تتحقق بي كي محدده داخل الاراي
// var_dump(Arr::has(['db' => ['coon' => ['def' => 'my sql']]], 'db.coon.def'));

// LAST
// var_dump(Arr::last(['one', 'tow', 'three'], function ($item) { var_dump($item); }));
// var_dump(Arr::last(['one', 'tow', 'three'], function ($item, $key) { var_dump($item, $key); }));
// var_dump(Arr::last(['one', 'tow', 'three'], function ($item) {
//     return strlen($item) >= 3;
// }));

// Forget
// $arr = ['db' => ['coon' => ['def' => 'my_sql']]];
// Arr::forget($arr, 'db.coon.def');
// var_dump($arr);

// flatten
// destroy all [[[[[[]]]]]]
// echo '<pre>';
// print_r(Arr::flatten([[1], [2], [[3], [[[[[4]]]]]]]));

// get
// $arr = ['db' => ['coon' => ['def' => 'my_sql', 'secondary' => 'sqlite']]];
// $arr = Arr::get($arr, 'db.coon.secondary');
// echo '<pre>';
// var_dump($arr);

// set
// $arr = ['db' => ['coon' => ['def' => 'my_sql', 'secondary' => 'sqlite']]];
// $arr = Arr::set($arr, 'db.coon.secondary', 'ahmed');
// echo '<pre>';
// var_dump($arr);
// ------------------------------------------------------------------------------------------------  config    ----------------
// $config = new Config(['db' => ['conn' => ['host' => 'local']]]);
// echo '<pre>';
// var_dump($config->get('db.conn'));

// echo '<pre>';
// var_dump(app()->config);

// echo '<pre>';
// var_dump(config());

// echo '<pre>';
// var_dump(config('database.default'));

// config(['database.default' => 'mysql']);
// echo '<pre>';
// var_dump(config('database.default'));
// ----------------------------------------------------------------------------------- Valiation ----------------------------------------
// $Valiation = new Validator();

// $Valiation->setRules(['username' => ['required', 'alnum' ,'between:5,10','max:10']]);
// $Valiation->setRules(['username' => 'required|alnum|between:5,10|max:10']);
// $Valiation->setRules(['username' => 'required']);
// $Valiation->make(['username' => 'xsxxs']);
// echo '<pre>';
// var_dump($Valiation->errors());
// ----------------------------------------------------------------------------------- Database ----------------------------------------
// echo '<pre>';
// var_dump(MySQLGrammar::buildDeleteQuery());
// echo '<pre>';
// var_dump(MySQLGrammar::buildSelectQuery(['username', 'email'], ['username', '=', 'ahmed']));
// echo '<pre>';
// var_dump(MySQLGrammar::buildInsertQuery(['username', 'email', 'password']));
// echo '<pre>';
// var_dump(MySQLGrammar::buildUpdateQuery(['username', 'email', 'password']));

// ---------
// var_dump(User::all());
// User::create(['username' => 'ahmed', 'name' => 'ali', 'email' => 'ahmed@gmail.com', 'password' => bcrypt('pass')]);
// User::delete(1);
// User::update(2, ['username' => 'ahmed']);
// var_dump(User::where(['id', '=', '2']));
// var_dump(User::where(['id', '=', '2'], ['username', 'email']));
// var_dump(Model::getTableName());
// ---------------------------------------------ID-----------------------
// Route::get('/contacts', [ContactController::class, 'store']);
// <a href="contacts?id=<?php echo $a['id'];
// echo $_REQUEST['id'];
// echo request()->get('id');
