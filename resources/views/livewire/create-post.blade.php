<div wire:mouseenter="$set('showHelps', 'true')">
     <!-- Success is as dangerous as failure. -->

    @if($success)
        <span class="block mb-4 text-green-500">Post saved successfully.</span>
    @endif

    <div>
        <form method="POST" wire:submit="save">
            <div>
                <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                <input wire:model="form.title" wire:keydown.enter="validateTitle" wire:confirm.prompt="Are you sure?\n\nType DELETE to confirm|DELETE" id="title" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="text" />
                @error('form.title')
                    <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
    
            <div class="mt-4">
                <label for="body" class="block font-medium text-sm text-gray-700">Body</label>
                <textarea wire:model.blur="form.body" id="body" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm"></textarea>
                @error('form.body')
                    <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
    
            <button class="mt-4 px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
                Save
            </button>

            <h1>{{$repos}}</h1>

            <input wire:model="mess" type="text">
        </form>
    </div>

    <div>
        <!-- <button wire:click="$set('showHelp', 'true')" class="px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">  -->
        <button wire:click="$toggle('showHelp')" class="px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">  
            {{ $showHelp ? 'Hide' : 'Show' }}
        </button>

        @if($showHelp)
            <div class="bg-green-100 text-green-800 px-4 py-2 mt-4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        @endif

        <button wire:click="$refresh">Refresh</button>
    </div>

</div>