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

    public function removeProduct($index): void {
        unset($this->orderProducts[index]);

        $this->orderProducts = array_values($this->orderProducts);
    }

    public function render()
    {
        return view('livewire.parent-children');
    }
}
