<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\PostForm;
use App\Models\Post;

class EditPost extends Component
{
    public PostForm $form;

    public function mount(Post $post): void {
        
        $this->form->setPost($post);

    }

    public function update(): void {
        $this->validate();

        $this->form->update();
    }

    public function render()
    {
        return view('livewire.edit-post')
            ->title('Edit Post');
    }
}
