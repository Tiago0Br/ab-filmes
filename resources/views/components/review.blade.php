<div class="flex gap-12 bg-gray-200 h-[168px] p-8 rounded-xl">
    <div class="flex items-center gap-12">
        <div class="flex gap-4">
            @if($getUserAvatar() !== null)
                <x-avatar :image="$getUserAvatar()" class="size-12" />
            @else
                <x-ik-user class="text-gray-600 size-12" title="Perfil" />
            @endif

            <div class="flex flex-col w-[216px] gap-2 font-nunito">
                <div class="flex gap-2 items-center">
                    <strong class="font-rajdhani">{{ $getUserName() }}</strong>
                    @if($isFromLoggedUser())
                        <span class="text-xs p-1 bg-purple-base rounded-lg">Você</span>
                    @endif
                </div>
                <span class="text-gray-500">
                {{ $getReviewsMessage() }}
            </span>
            </div>
        </div>

        <div class="h-[104px] w-0.5 bg-gray-300"></div>

        <p class="text-gray-500 w-[578px]">
            {{ $review->comment }}
        </p>

        <div class="flex items-center gap-2 bg-gray-300 p-2 rounded-lg">
            <strong>{{ $review->rating }}</strong> / <small>5</small>
            <x-heroicon-s-star class="size-6 text-purple-light" />
        </div>
    </div>
</div>
