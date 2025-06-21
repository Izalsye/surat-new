@props([
    'title',
    'link' => '#',
    'count' => 0,
    'percentage' => '0%',
    'percentageColor' => 'bg-white/30',
    'lastWeek' => '',
    'bgFrom' => 'cyan-500',
    'bgTo' => 'cyan-400',
    'icon' => 'components.icons.mata',
])
<div class="panel bg-gradient-to-r from-{{ $bgFrom }} to-{{ $bgTo }}">
    <div class="flex justify-between">
        <div class="ltr:mr-1 rtl:ml-1 text-md font-semibold">
            <a href="{{ $link }}">{{ $title }}</a>
        </div>
    </div>
    <div class="flex items-center mt-5">
        <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">{{ $count }}</div>
        <div class="badge {{ $percentageColor }}">{{ $percentage }}</div>
    </div>
    <div class="flex items-center font-semibold mt-5">
        @include($icon)
        Last Week {{ $lastWeek }}
    </div>
</div>
