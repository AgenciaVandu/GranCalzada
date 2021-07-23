<div class="bg-blue-main">
    <div class="relative w-full h-96">
        @foreach ($users as $user)
        <img src="{{ asset('img/banners/banner-'.$user->id.'.png') }}" class="object-contain w-full h-full" alt="">
        @endforeach
    </div>
    <div class="absolute y-1">
        {{ $users->links() }}
    </div>
</div>
