<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Locked;
use Livewire\Form;
use App\Models\Product;

class ProductsForm extends Form
{
    public ?Product $product;

    #[Rule('required|min:3')]
    public string $name = '';

    #[Rule('required|min:3')]
    public string $description = '';

    //#[Rule('required|exists:categories,id', as: 'category')]
    //public int $category_id = 0;

    #[Rule('required|string')]
    public string $color = '';

    #[Rule('required|boolean')]
    public bool $in_stock = true;

    #[Rule('required|array', as: 'category')]
    public array $productCategories = [];

    #[Rule('image')]
    public $image;


    public function save(): void {
        $this->validate();

        $filename = $this->image->store('products', 'public');

        $product = Product::create($this->all() + ['photo' => $filename]);

        $product->categories()->sync($this->productCategories);
    }

    public function setProduct(Product $product): void {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->color = $product->color;
        $this->in_stock = $product->in_stock;
        $this->productCategories = $product->categories()->pluck('id')->toArray();

    }

    public function update(): void{
        $this->validate();
 
       // Product::where('id', $this->productId)->update($this->only(['name', 'description', 'category_id'])); 

       $filename = $this->image->store('products', 'public');

       $this->product->update($this->all() + ['photo' => $filename]);

       $this->product->categories()->sync($this->productCategories);

    }
}
