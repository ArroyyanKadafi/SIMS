<?php

// use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\JadpelController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\PDF;



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

// Route::get('/', [CobaController::class, 'index']);
   
// Route::get('/hello', function () {
//     return view('hello');
// });
    
// TAMPILAN
Route::get('/', 'IndexController@index');
Route::get('/register', [RegistController::class, 'register',]);
Route::post('/register', [RegistController::class, 'store']);
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LogoutController::class, 'logout']);
// Dashboard
Route::get('/dashboard', 'DashboardController@dashboard');
// Search All
Route::get('/all/cari', 'DashboardController@search');
// Verifikasi email user
// Route::get(['verify' => true]);          ``````````````````````````````````````````````````````````````````````````````````````````````  `                                                                                                                            

// CRUD GURU
Route::get('/guru', [GuruController::class, 'guru']);
Route::get('/guru/create', [GuruController::class, 'create']);
Route::post('/guru', [GuruController::class, 'store']);
Route::get('/guru/edit/{id}', [GuruController::class, 'edit']);
// Deatails
Route::get('/guru/details/{id}', [GuruController::class, 'details']);
// Route::get('/show/{id}', [GuruController::class, 'show']);
Route::put('/guru/update/{id}', [GuruController::class, 'update']);
Route::delete('/guru/delete/{id}', [GuruController::class, 'destroy']);
// PRINT PDF
Route::get('/guru/print', [GuruController::class, 'print']);
// Print Biodata
Route::get('/guru/print2/{id}', [GuruController::class, 'print2']);
// Search
Route::get('/guru/cari', [GuruController::class, 'search']);


// CRUD SISWA 
Route::get('/siswa', [SiswaController::class, 'siswa']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::put('/siswa/update/{id}', [SiswaController::class, 'update']);
Route::delete('/siswa/delete/{id}', [SiswaController::class, 'destroy']);
// Details
Route::get('/siswa/details/{id}', [SiswaController::class, 'details']);
// PRINT PDF
Route::get('/siswa/print', [SiswaController::class, 'print']);
// Print Biodata
Route::get('/siswa/print2/{id}', [SiswaController::class, 'print2']);
// Search
Route::get('/siswa/cari', [SiswaController::class, 'search']);


// CRUD JURUSAN
Route::get('/jurusan', [JurusanController::class, 'jurusan']);
Route::get('/jurusan/create', [JurusanController::class, 'create']);
Route::post('/jurusan', [JurusanController::class, 'store']);
Route::get('/jurusan/edit/{id}', [JurusanController::class, 'edit']);
Route::put('/jurusan/update/{id}', [jurusanController::class, 'update']);
Route::delete('/jurusan/delete/{id}', [JurusanController::class, 'destroy']);
// Search
Route::get('/jurusan/cari', [JurusanController::class, 'search']);


// CRUD KELAS
Route::get('/kelas', [KelasController::class, 'kelas']);
Route::get('/kelas/create', [KelasController::class, 'create']);
Route::post('/kelas', [KelasController::class, 'store']);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);
Route::put('/kelas/update/{id}', [KelasController::class, 'update']);
Route::delete('/kelas/delete/{id}', [KelasController::class, 'destroy']);
// Search
Route::get('/kelas/cari', [KelasController::class, 'search']);


// CRUD MAPEL
Route::get('/mapel', [MapelController::class, 'mapel']);
Route::get('/mapel/create', [MapelController::class, 'create']);
Route::post('/mapel', [MapelController::class, 'store']);
Route::get('/mapel/edit/{id}', [MapelController::class, 'edit']);
Route::put('/mapel/update/{id}', [MapelController::class, 'update']);
Route::delete('/mapel/delete/{id}', [MapelController::class, 'destroy']);
// Search
Route::get('/mapel/cari', [MapelController::class, 'search']);

// CRUD JADPEL
// Route::get('/card', [JadpelController::class, 'jadpel']);
// CRUD KLS 10
// Route::get('/kelas_10', [JadpelController::class, 'kelas_10']);
// Route::get('/kelas_10/create', [JadpelController::class, 'create_10']);
// Route::post('/kelas_10', [JadpelController::class, 'store_10']);
// Route::get('/kelas_10/edit/{id}', [JadpelController::class, 'edit_10']);
// Route::put('/kelas_10/update/{id}', [JadpelController::class, 'update_10']);
// Route::delete('/kelas_10/delete/{id}', [JadpelController::class, 'destroy_10']);
// CRUD KLS 11
// Route::get('/kelas_11', [JadpelController::class, 'kelas_11']);
// Route::get('/kelas_11/create', [JadpelController::class, 'create_11']);
// Route::post('/kelas_11', [JadpelController::class, 'store_11']);
// Route::get('/kelas_11/edit/{id}', [JadpelController::class, 'edit_11']);
// Route::put('/kelas_11/update/{id}', [JadpelController::class, 'update_11']);
// Route::delete('/kelas_11/delete/{id}', [JadpelController::class, 'destroy_11']);
// CRUD KLS 12
// Route::get('/kelas_12', [JadpelController::class, 'kelas_12']);
// Route::get('/kelas_12/create', [JadpelController::class, 'create_12']);
// Route::post('/kelas_12', [JadpelController::class, 'store_12']);
// Route::get('/kelas_12/edit/{id}', [JadpelController::class, 'edit_12']);
// Route::put('/kelas_12/update/{id}', [JadpelController::class, 'update_12']);
// Route::delete('/kelas_12/delete/{id}', [JadpelController::class, 'destroy_12']);

// CRUD SPP
Route::get('/spp', [SppController::class, 'spp']);
Route::get('/spp/create', [SppController::class, 'create']);
Route::post('/spp', [SppController::class, 'store']);
Route::get('/spp/edit/{id}', [SppController::class, 'edit']);
Route::put('/spp/update/{id}', [SppController::class, 'update']);
Route::delete('/spp/delete/{id}', [SppController::class, 'destroy']);
// PRINT PDF
Route::get('/spp/print/{id}', [SppController::class, 'print']);
// Search
Route::get('/spp/cari', [SppController::class, 'search']);

// CRUD GAJI 
Route::get('/penggajian', [GajiController::class, 'penggajian']);
Route::get('/penggajian/create', [GajiController::class, 'create']);
Route::post('/penggajian', [GajiController::class, 'store']);
Route::get('/penggajian/edit/{id}', [GajiController::class, 'edit']);
Route::put('/penggajian/update/{id}', [GajiController::class, 'update']);
Route::delete('/penggajian/delete/{id}', [GajiController::class, 'destroy']);
// PRINT PDF
Route::get('/penggajian/print/{id}', [GajiController::class, 'print']);
// Search
Route::get('/penggajian/cari', [GajiController::class, 'search']);


// Route::get('/ppdb', 'PpdbController@ppdb');
// Auth::routes();

// Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');



// Usage:
//   command [options] [arguments]

// Options:
//   -h, --help            Display help for the given command. When no command is given display help for the list command
//   -q, --quiet           Do not output any message
//   -V, --version         Display this application version
//       --ansi|--no-ansi  Force (or disable --no-ansi) ANSI output
//   -n, --no-interaction  Do not ask any interactive question
//       --env[=ENV]       The environment the command should run under
//   -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

// Available commands:
//   clear-compiled        Remove the compiled class file
//   completion            Dump the shell completion script
//   db                    Start a new database CLI session
//   down                  Put the application into maintenance / demo mode
//   env                   Display the current framework environment
//   help                  Display help for a command
//   inspire               Display an inspiring quote
//   list                  List commands
//   migrate               Run the database migrations
//   optimize              Cache the framework bootstrap files
//   serve                 Serve the application on the PHP development server
//   test                  Run the application tests
//   tinker                Interact with your application
//   ui                    Swap the front-end scaffolding for the application
//   up                    Bring the application out of maintenance mode
//  auth
//   auth:clear-resets     Flush expired password reset tokens
//  cache
//   cache:clear           Flush the application cache
//   cache:forget          Remove an item from the cache
//   cache:table           Create a migration for the cache database table
//  config
//   config:cache          Create a cache file for faster configuration loading
//   config:clear          Remove the configuration cache file
//  db
//   db:seed               Seed the database with records
//   db:wipe               Drop all tables, views, and types
//  event
//   event:cache           Discover and cache the application's events and listeners
//   event:clear           Clear all cached events and listeners
//   event:generate        Generate the missing events and listeners based on registration
//   event:list            List the application's events and listeners
//  key
//   key:generate          Set the application key
//  make
//   make:cast             Create a new custom Eloquent cast class
//   make:channel          Create a new channel class
//   make:command          Create a new Artisan command
//   make:component        Create a new view component class
//   make:controller       Create a new controller class
//   make:event            Create a new event class
//   make:exception        Create a new custom exception class
//   make:factory          Create a new model factory
//   make:job              Create a new job class
//   make:listener         Create a new event listener class
//   make:mail             Create a new email class
//   make:middleware       Create a new middleware class
//   make:migration        Create a new migration file
//   make:model            Create a new Eloquent model class
//   make:notification     Create a new notification class
//   make:observer         Create a new observer class
//   make:policy           Create a new policy class
//   make:provider         Create a new service provider class
//   make:request          Create a new form request class
//   make:resource         Create a new resource
//   make:rule             Create a new validation rule
//   make:seeder           Create a new seeder class
//   make:test             Create a new test class
//  migrate
//   migrate:fresh         Drop all tables and re-run all migrations
//   migrate:install       Create the migration repository
//   migrate:refresh       Reset and re-run all migrations
//   migrate:reset         Rollback all database migrations
//   migrate:rollback      Rollback the last database migration
//   migrate:status        Show the status of each migration
//  model
//   model:prune           Prune models that are no longer needed
//  notifications
//   notifications:table   Create a migration for the notifications table
//  optimize
//   optimize:clear        Remove the cached bootstrap files
//  package
//   package:discover      Rebuild the cached package manifest
//  queue
//   queue:batches-table   Create a migration for the batches database table
//   queue:clear           Delete all of the jobs from the specified queue
//   queue:failed          List all of the failed queue jobs
//   queue:failed-table    Create a migration for the failed queue jobs database table
//   queue:flush           Flush all of the failed queue jobs
//   queue:forget          Delete a failed queue job
//   queue:listen          Listen to a given queue
//   queue:monitor         Monitor the size of the specified queues
//   queue:prune-batches   Prune stale entries from the batches database
//   queue:prune-failed    Prune stale entries from the failed jobs table
//   queue:restart         Restart queue worker daemons after their current job
//   queue:retry           Retry a failed queue job
//   queue:retry-batch     Retry the failed jobs for a batch
//   queue:table           Create a migration for the queue jobs database table
//   queue:work            Start processing jobs on the queue as a daemon
//  route
//   route:cache           Create a route cache file for faster route registration
//   route:clear           Remove the route cache file
//   route:list            List all registered routes
//  sail
//   sail:install          Install Laravel Sail's default Docker Compose file
//   sail:publish          Publish the Laravel Sail Docker files
//  schedule
//   schedule:clear-cache  Delete the cached mutex files created by scheduler
//   schedule:list         List the scheduled commands
//   schedule:run          Run the scheduled commands
//   schedule:test         Run a scheduled command
//   schedule:work         Start the schedule worker
//  schema
//   schema:dump           Dump the given database schema
//  session
//   session:table         Create a migration for the session database table
//  storage
//   storage:link          Create the symbolic links configured for the application
//  stub
//   stub:publish          Publish all stubs that are available for customization
//  sweetalert
//   sweetalert:publish    Publish all of the SweetAlert resources
//  ui
//   ui:auth               Scaffold basic login and registration views and routes
//   ui:controllers        Scaffold the authentication controllers
//  vendor
//   vendor:publish        Publish any publishable assets from vendor packages
//  view
//   view:cache            Compile all of the application's Blade templates
//   view:clear            Clear all compiled view files