<button class="rounded-md bg-pink-600 px-4 py-3 text-sm font-semibold text-white shadow-md hover:bg-pink-500"
    type="submit" wire:click='{{ $click }}' wire:confirm='Are You Sure You Want To Add Task?'>
    {{ $button }}
</button>


<div wire:loading>
    <x-spinner />

</div>
