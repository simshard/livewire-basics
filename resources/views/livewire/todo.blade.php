<div>
    <form wire:submit = "add"> 
        <input class="drop-shadow-md placeholder:text-gray-400 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300  focus:ring-1 focus:ring-inset focus:ring-sky-400 sm:text-sm sm:leading-6" placeholder="to do"type="text" 
        
        {{-- wire:model="todo" --}}
        wire:model.live="todo"

        {{-- wire:model.changed="todo" --}}
        >
 
        <button class="drop-shadow-md text-2xl text-red-500 bg-sky-400 hover:bg-sky-300 p-1 mx-2 rounded-lg" type="submit">Add Todo</button>
    </form>
    <div class="mt-8" >
        <ul class="text-green-500 bg-slate-100">
            @foreach($todos as $todo)
            <li class="px-2 mb-2">{{$todo}}</li>
            @endforeach
        </ul>
    </div>
</div>
