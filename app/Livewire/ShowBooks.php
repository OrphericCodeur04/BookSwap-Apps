<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;
use App\Models\Author;
use App\Models\Book;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

#[Title('Show Books with correspondant Author')]
class ShowBooks extends Component
{
    use WithPagination;

    public string $searchBook = "";

    public int $searchAuthor = 0;

    public Collection $authors;

    public function mount(): void {
        $this->authors = Author::pluck('name', 'id');
    }

    // RESOUDRE LE PROBLEME DE RECHERCHE LORS DE LA VISITE D'UNE NOUVELLE PAGINATION
    public function updating($key): void
    {
    // Ici, on demande à reinitialiser la pagination avant la mise à jour
    // des proprietes 'searchBook' et 'searchAuthor'
        if ($key === 'searchBook' || $key === 'searchAuthor') {
            $this->resetPage();
        }
    }

    public function delete($bookId) {
        Book::where('id', $bookId)->delete();
    }

    public function render()
    {
        sleep(1);

        $books = Book::with('author')
        ->when($this->searchBook !== '', fn(Builder $query) => $query->where('name', 'like', '%'. $this->searchBook .'%')) 
        ->when($this->searchAuthor > 0, fn(Builder $query) => $query->where('author_id', $this->searchAuthor)) 
        ->paginate(10);

        return view('livewire.show-books', [
            'books' => $books
        ]);
    }
}
