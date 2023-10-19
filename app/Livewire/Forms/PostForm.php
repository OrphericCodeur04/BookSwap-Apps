<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;
use App\Models\Post;

class PostForm extends Form
{
    // propriété publique post du model Post de type "nullable" (?)
    public ?Post $post;

    #[Rule('required|min:10')]
    public $title = '';

    #[Rule('required|max:255')]
    public $body = '';

    public function setPost(Post $post): void {
        $this->post = $post;

        $this->title = $post->title;

        $this->body = $post->body;
    }

    public function update(): void {
        $this->post->update($this->all());
    }

    public function save(): void {
        Post::create($this->all());

        $this->reset('title', 'form');
    }
}
