<div>
  
<div class="text-black p-2 mb-4">
    <a wire:navigate href="new-post" class="underline hover:bg-green-200">New Post</a>
</div>
  <table class="table-auto ">
    <thead class="mt-2 bg-slate-600 text-white">
      <tr>
        <th>Title</th>
        <th>Body</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
      <livewire:post-row :key="$post->id" :post="$post">
      @endforeach
    </tbody>
  </table>
</div>
