<div class="flex items-center gap-1">
    @isset($prefix)
        <div class="w-fit">
            {!! $prefix !!}
        </div>
    @endisset

    <div class="w-full whitespace-nowrap">{!! $label !!}</div>

    @isset($suffix)
        <div class="w-fit">{!! $suffix !!}</div>
    @endisset
</div>
