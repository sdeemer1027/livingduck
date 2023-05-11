<?php

namespace App\Http\Controllers;


use App\VirtualPetDuck;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VirtualPetDuckController extends Controller
{
    public function index()
    {
        $duck = VirtualPetDuck::firstOrCreate(['name' => 'Quackers'], ['hunger' => 0, 'happiness' => 100])->get();
  //      $duck = VirtualPetDuck::select()->get();
  //      dd($duck);

        return view('virtual_pet_duck.index', ['duck' => $duck]);
    }

    public function feed(VirtualPetDuck $duck)
    {
        $duck->feed();
        return redirect()->route('virtual-pet-duck.index');
    }

    public function play(VirtualPetDuck $duck)
    {
        $duck->play();
        return redirect()->route('virtual-pet-duck.index');
    }

    public function timePasses(VirtualPetDuck $duck)
    {
        $duck->timePasses();
        return redirect()->route('virtual-pet-duck.index');
    }
}
