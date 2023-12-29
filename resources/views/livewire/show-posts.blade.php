<div>
  <table class="table-auto">
    <thead class="bg-slate-600 text-white">
      <tr>
        <th>Title</th>
        <th>Body</th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
      <tr wire:key="{{ $post->id }}" class=" bg-sky-100" >
        <td class="p-2 font-semibold">{{$post->title}}</td>
        <td class="p-2 ">{{str($post->body)->limit(45)}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
