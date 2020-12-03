<div class="flex items-center justify-between gap-1">
    <input type="text" class="flex-1 border rounded shadow-inner">
    <button class="w-24 border rounded active:bg-gray-200" wire:click="addComment">Add</button>
</div>

@foreach ($comments as $comment)
    <div class="card m-0 mt-5">
        {{ $comment }}
    </div> 
@endforeach
