<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function show($id){
        // return 'detail page for id:' . $id;
        $comics = config('comics');
        // dd($comics);
        
        /**
        * Get specific comic by ID
         */
        $comic = [];
        foreach($comics as $item){
            if($id == $item['id']){
                $comic = $item;
            }
        }
        // dd($comic);

        return view('comic-detail', compact('comic'));
    }  
}
