<?php
namespace Anitesh\First\Controllers;

use Illuminate\Http\Request;
use Anitesh\First\First;

class FirstController
{
    public function __invoke(First $first,$name) {
        $data = $first->first($name);

        return view('first::index', compact('data'));

        //return $data;
    }
}