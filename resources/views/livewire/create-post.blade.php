<div>
    <h2 class="text-2xl mb-2">New Post</h2>
    <form wire:submit="save()">
        <div class="flex flex-col bg-gray-100 mb-2">
            <label for="title">Title</label>
            <input type="text" 
             name="title"
             id="title"
             class="bg-gray-50 mx-2 shadow-md border border-sky-300 " wire:model="title">
            @error('title') <span class="text-red-500">{{ $message }}</span>@enderror
        </div>
        <div class="flex flex-col  bg-gray-100 ">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="20" rows="4" class=" bg-gray-50 mx-2 border border-sky-300 shadow-md" wire:model="body"></textarea>
            @error('body') 
            <span class="text-red-500">{{ $message }}</span>
            @enderror
            <span class="text-xs text-gray-400">Characters<span class="text-sm text-blue-500 mx-2" x-text="$wire.body.length"></span></span>
        </div>
        <button  wire:click.prevent="save" class="mt-4 bg-sky-500 rounded-lg hover:bg-sky-200 p-2 text-black">Save</button>
    </form>
    <section class="mt-4">
        <span class="text-xs text-gray-400"> Current Title
        <span class="text-sm text-blue-500" x-text="$wire.title"></span> </span>
    </section>
</div>
