<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/* rotta di home  */
Route::get('/', function () {
    return view('home');
});


/* richiamo il maincontroller tramite index */

Route :: get("/", [MainController :: class, "index"]) -> name("index");

Route :: get("/show/{id}", [MainController :: class, "show"]) -> name("comic.show");

Route :: get("/create", [MainController :: class, "create"]) -> name("comic.create");

Route :: post("/create_comic", [MainController :: class, "store"]) -> name("comic.store");

Route :: get("/edit/{id}", [MainController :: class, "edit"]) -> name("comic.edit");

Route :: put("/update/{id}", [MainController :: class, "update"]) -> name("comic.update");

Route :: delete('/delete/{id}', [MainController :: class, 'delete'])
    -> name('delete');
