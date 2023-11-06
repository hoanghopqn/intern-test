<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\JokesRepository;
use Illuminate\Http\Request;

class JokesController extends Controller
{
    protected $jokesRepository;
    public function __construct(JokesRepository $jokesRepository)
    {
        return $this->jokesRepository = $jokesRepository;
    }

    public function index()
    {
        return $this->jokesRepository->getJokes();
    }
    public function create()
    {
        //
    }
    public function show($id)
    {

        return $this->jokesRepository->showJokes($id);
    }
    public function update(Request $request, int $id)
    {
        return $this->jokesRepository->updateJokes($request, $id);
    } 
}