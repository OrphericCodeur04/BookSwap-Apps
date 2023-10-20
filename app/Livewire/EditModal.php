<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AppleProduct;
use Livewire\Attributes\Locked;

class EditModal extends Component
{
    #[Locked]
    public int $id;

    public string $name = '';

    public string $price = '';

    public bool $showModal = false;

    public function edit($productId): void {
        $product = AppleProduct::find($productId);

        $this->id = $product->id;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->showModal = true;
    }

    public function render()
    {
        return view('livewire.edit-modal', [
            'products' => AppleProduct::all()
        ]);
    }
}
