<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{
    public function index(){

        $comics = Comic :: all();

        return view("home", compact("comics"));
    }

    public function show($id){

        $comic = Comic :: FindOrFail($id);

        return view("comic.show", compact("comic"));
    }

    public function create(){

        return view("comic.create");
    }


    public function store(Request $request){

        $data =  $request -> validate(
           [
            "title" => "required|max: 100",
            "description" => "nullable|max: 10000",
            "thumb" => "required|min:3|max:255",
            "price" => "required|min:1|max:32",
            "series" => "required|min:1|max:64",
            "sale_date" => "required|date|max:64",
            "type" => "required|min:1|max:64"
           ],
           [
            "title.required" => "il titolo è necessario",
            "title.max" => "il titolo non può superare i 100 caratteri",
            ]
        );

        $comic = Comic :: create($data);
        return redirect() -> route("comic.show", $comic -> id);
    }


    public function edit($id){

        $comic = Comic :: FindOrFail($id);

        return view("comic.edit", compact("comic"));
    }

    public function update(Request $request, $id) {

        $data = $request -> validate(
            [
                "title" => "required|max: 100",
                "description" => "nullable|max: 10000",
                "thumb" => "required|min:3|max:255",
                "price" => "required|min:1|max:32",
                "series" => "required|min:1|max:64",
                "sale_date" => "required|date|max:64",
                "type" => "required|min:1|max:64"
            ],
            [
                "title.required" => "il titolo è necessario",
                "title.max" => "il titolo non può superare i 100 caratteri",
            ]
        );

        $comic = Comic :: findOrFail($id);

        $comic -> update($data);

        return redirect() -> route('comic.show', $comic -> id);
    }


    public function delete($id) {

        $comic = Comic :: findOrFail($id);

        $comic -> delete();

        return redirect() -> route("index");
    }

}
