<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\Rule;
use App\Livewire\Forms\PostForm;
use Illuminate\Support\Str;

class CreatePost extends Component
{   
    public PostForm $form;

    public string $repos = '';

    public string $mess = '';

    public bool $success = false;

    public bool $showHelp;

    public bool $showHelps;

    public function mount(string $repo, string $sms) {
        $this->repos = $repo;

        $this->mess = $sms;
    }

    //public function toggleHelp(): void{
        //$this->showHelp =! $this->showHelp;
    //}

    public function save(): void {
        $this->validate();

        $this->form->save();

        $this->success = true;
    }

    public function updated($property): void {
        if($property == 'form.title') {
            $this->form->title = Str::headline($this->form->title);
        }
    }

    // public function updatedFormTitle(): void {
        // $this->form->title = Str::headline($this->form->title);
    // }

    public function validateTitle(): void {
        $this->validateOnly('form.title');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
