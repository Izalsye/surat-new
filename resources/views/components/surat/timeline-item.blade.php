@props([
    'color' => 'secondary',
    'icon' => null,
    'title',
    'titleLink' => null,
    'subtitle' => '',
    'date',
])

<div class="flex">
    <div
        class="shrink-0 ltr:mr-2 rtl:ml-2 relative z-10 before:w-[2px] before:h-[calc(100%-24px)] before:bg-white-dark/30 before:absolute before:top-10 before:left-4">
        <div class="bg-{{ $color }} shadow shadow-{{ $color }} w-8 h-8 rounded-full flex items-center justify-center text-white">
            @if($icon)
                @include($icon)
            @else
                @include('components.icons.plus')
            @endif
        </div>
    </div>
    <div>
        <h5 class="font-semibold dark:text-white-light">
            {!! $titleLink ? '<a href="' . $titleLink . '" class="text-success">' . $title . '</a>' : $title !!}
        </h5>
        @if($subtitle)
            <p class="text-white-dark text-xs">{!! $subtitle !!}</p>
        @endif
        <p class="text-white-dark text-xs">{{ $date }}</p>
    </div>
</div>