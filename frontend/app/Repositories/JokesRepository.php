<?php

namespace App\Repositories;

use App\Http\Resources\JokesCollection;
use App\Models\Jokes;
use Illuminate\Support\Facades\Validator;

class JokesRepository
{
    public function getJokes()
    {
        $query = new JokesCollection(Jokes::getJokes()->get());

        return response()->json([
            'jokes' => $query,
        ], 200);
    }  
    public function updateJokes ($request, $id)
    {
        $input = $request->all();
        $validator = Validator::make ($input, [ 
            'content' => 'required',
            'funny' => 'required', 
            'nofunny' => 'required', 
        ]);
        if ($validator->fails()) {
            return response()->json ([
                'status' => 422,
                'errors' => $validator->messages(),
            ], 422);
        } else {
            $jokes = Jokes::find($id); 
        }
        if ($jokes) {
            $jokes->update ([ 
                'content' => $request->content,
                'funny' => $request->funny, 
                'nofunny' => $request->nofunny, 

            ]);
            return response()->json ([
                "status" => 200,
                "message" => "Jokes updated successfully.",
            ], 200);
        } else {
            return response()->json ([
                "status" => 404,
                "message" => "Somethings went wrong!",
            ], 404);

        }
    } 
    public function showJokes ($id)
    {
        $jokes = Jokes::find($id);
        if ($jokes) {
            return response()->json ([
                "status" => 200,
                "jokes" => $jokes,
            ], 200);
        } else {
            return response()->json ([
                "status" => 404,
                "message" => "No Jokes Founds!",
            ], 404);

        }
    }
}
