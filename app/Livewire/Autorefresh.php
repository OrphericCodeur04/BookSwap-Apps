<?php

namespace App\Livewire;

use Livewire\Component;

class Autorefresh extends Component
{

    public function render()
    {
        $cat = file_get_contents('https://random.dog/woof.json');

        $image = json_decode($cat, true)['url'];

        return view('livewire.autorefresh', compact('image'));
    }
}
