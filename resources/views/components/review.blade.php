<div class="flex gap-2 items-center">
    <div class="flex items-center gap-0.5">
        @for($i = 1; $i <= 5; $i++)
            @php
                $average = $getAverage();
                $diff = $average - ($i - 1);
            @endphp
            @if($diff >= 1)
                <x-heroicon-s-star class="size-6 text-purple-light" />
            @elseif($diff >= 0.5)
                <div class="relative">
                    <x-heroicon-o-star class="size-6 text-purple-light" />
                    <div class="absolute inset-0 overflow-hidden w-1/2">
                        <x-heroicon-s-star class="size-6 text-purple-light" />
                    </div>
                </div>
            @else
                <x-heroicon-o-star class="size-6 text-purple-light" />
            @endif
        @endfor
    </div>
    <span class="text-gray-600 font-nunito">({{ $getTotalRatings() }} avaliações)</span>
</div>
