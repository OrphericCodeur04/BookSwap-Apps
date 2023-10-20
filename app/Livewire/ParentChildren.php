<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AppleProduct;
use Illuminate\Support\Collection;

class ParentChildren extends Component
{
    public string $customer_name = '';

    public string $customer_email = '';

    public Collection $allProducts;

    public array $orderProducts = [];

    public function mount(): void {
        $this->allProducts = AppleProduct::all();

        $this->orderProducts[] = ['product_id' => '', 'quantity' => 1];
    }

    public function addProduct(): void {
        $this->orderProducts[] = ['product_id' => '', 'quantity' => 1];
    }

    public function removeProduct($index): void {
        unset($this->orderProducts[$index]); // supprimer le produit du tableau 

        $this->orderProducts = array_values($this->orderProducts); // reindexer les valeurs du tableau
    }

    public function render()
    {
        return view('livewire.parent-children');
    }
}
