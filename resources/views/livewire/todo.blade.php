<div>
    <form wire:submit = "add"> 
        <input class="drop-shadow-md placeholder:text-gray-400 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300  focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="to do"type="text" wire:model="todo">
 
        <button class="text-3xl text-red-500 bg-sky-400 hover:bg-sky-300 p-4 rounded-lg" type="submit">Add Todo</button>
    </form>
<ul>
    @foreach($todos as $todo)
    <li>{{$todo}}</li>
    @endforeach
</ul>
</div>
