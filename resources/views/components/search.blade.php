@props(['placeholder' => 'Search Product...', 'color' => 'white'])

<div>
    <input type="text" class="bg-{{ $color }} border border-primary rounded-full py-1.5 px-3 placeholder-primary text-sm" placeholder="{{ $placeholder }}">
</div>