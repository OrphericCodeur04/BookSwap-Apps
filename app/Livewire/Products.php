<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;

class Products extends Component
{   
    use WithPagination;

    public string $searchQuery = '';

    public int $searchCategory = 0;

    public Collection $categories;

    public function mount(): void {
        $this->categories = Category::pluck('name', 'id');
    }

    // RESOUDRE LE PROBLEME DE RECHERCHE LORS DE LA VISITE D'UNE NOUVELLE PAGINATION
    public function updating($key): void
    {
    // Ici, on demande à reinitialiser la pagination avant la mise à jour
    // des proprietes 'searchQuery' et 'searchCategory'
        if ($key === 'searchQuery' || $key === 'searchCategory') {
            $this->resetPage();
        }
    }

    
    public function deleteProduct($productId) {
        Product::where('id', $productId)->delete();
    }


    public function render()
    {
        
        $products = Product::with('categories')
        ->when($this->searchQuery !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchQuery .'%')) 
        //->when($this->searchCategory > 0, fn(Builder $query) => $query->where('category_id', $this->searchCategory)) 
        ->when($this->searchCategory > 0, function (Builder $query) {
            $query->whereHas('categories', function (Builder $query2) {
                $query2->where('id', $this->searchCategory);
            });
        })
        ->paginate(10);

        return view('livewire.products', [
            'products' => $products,
        ]);
    }
}
