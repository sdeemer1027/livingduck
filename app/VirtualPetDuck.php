<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VirtualPetDuck extends Model
{
    protected $fillable = ['name', 'hunger', 'happiness'];



    public function feed()
    {
        $this->hunger -= 10;
        if ($this->hunger < 0) {
            $this->hunger = 0;
        }
        $this->save();
    }

    public function play()
    {
        $this->happiness += 10;
        if ($this->happiness > 100) {
            $this->happiness = 100;
        }
        $this->save();
    }

    public function timePasses()
    {
        $this->hunger += 10;
        $this->happiness -= 10;
        if ($this->hunger > 100) {
            $this->hunger = 100;
        }
        if ($this->happiness < 0) {
            $this->happiness = 0;
        }
        $this->save();
    }
}
