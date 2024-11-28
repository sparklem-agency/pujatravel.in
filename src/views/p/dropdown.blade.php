<div class="relative" x-data="{ show: false }" @click.away="show = false">
    <button class="flex items-center gap-2" type="button" @click="show=!show">{{ $label }}

        <svg class="size-5" :class="show ? 'rotate-180' : 'rotate-0'" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 16L6 10H18L12 16Z"></path>
        </svg>
    </button>

    <div class="absolute top-full mt-2 w-fit divide-y rounded-md bg-white shadow-sm" style="display: none"
        x-show="show" x-transition>
        @isset($items)
            @foreach ($items as $item)
                <a class="block p-3 whitespace-nowrap capitalize" href="{{ $item['link'] }}">{{ $item['label'] }}</a>
            @endforeach
        @endisset
    </div>
</div>
