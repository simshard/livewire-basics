<tr  class=" bg-sky-100"   >
    <td class="p-2 font-semibold">{{$post->title}}</td>
    <td class="p-2 font-light text-gray-400">{{str($post->body)->words(12)}}</td>
    <td>
  
        <button class="text-xs text-black bg-green-400 hover:bg-green-300 p-2 rounded-lg"
        title="delete post"
        type="button"
        wire:click="$parent.delete({{$post->id}})"
        wire:confirm  =" really delete this post?" 
        >Delete</button>
    </td>
  </tr>
