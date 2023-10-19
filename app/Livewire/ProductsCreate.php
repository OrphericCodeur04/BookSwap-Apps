<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\Attributes\Rule;
use Illuminate\Support\Collection;
use App\Livewire\Forms\ProductsForm;
use Livewire\WithFileUploads;

class ProductsCreate extends Component
{
    use WithFileUploads;

    public ProductsForm $form;

    public Collection $categories;
 
    public function mount(): void
    {
        $this->categories = Category::pluck('name', 'id');
    }
 
    public function save(): void
    {
        $this->form->save();

        $this->redirect('/products', navigate: true);
    }

    public function render()
    {
        return view('livewire.products-create');
    }
}
