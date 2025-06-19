{{-- resources/views/components/breadcrumb.blade.php --}}
<ul class="flex space-x-2 rtl:space-x-reverse">
    @foreach ($items as $index => $item)
        <li>
            @if ($index === 0 && isset($item['url']))
                <a href="{{ $item['url'] }}" class="text-primary hover:underline">{{ $item['label'] }}</a>
            @elseif (isset($item['url']))
                <span class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                    <a href="{{ $item['url'] }}" class="text-primary hover:underline">{{ $item['label'] }}</a>
                </span>
            @else
                <span class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">{{ $item['label'] }}</span>
            @endif
        </li>
    @endforeach
</ul>
