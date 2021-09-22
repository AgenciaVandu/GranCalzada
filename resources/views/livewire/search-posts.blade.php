<div class="position-relative">
    <input type="search" id="site-search" aria-label="BUSCAR" class="btn-block" wire:model="search">
    @if ($search)
        <div class="list-group">
            @foreach ($this->results as $result)
                <a href="{{ route('blog.show', $result) }}"
                    class="list-group-item list-group-item-action">{{ $result->title }}</a>
            @endforeach
        </div>
    @endif
</div>
