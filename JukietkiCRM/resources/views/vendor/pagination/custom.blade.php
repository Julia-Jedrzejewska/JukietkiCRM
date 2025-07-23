@php
    use Illuminate\Pagination\UrlWindow;

    $window = UrlWindow::make($paginator, 2, 2); // 2 przed, 2 po, reszta zamieniona w "..."
    $elements = array_filter([
        $window['first'],
        is_array($window['slider']) ? '...' : null,
        $window['slider'],
        is_array($window['last']) ? '...' : null,
        $window['last'],
    ]);
@endphp
@if ($paginator->hasPages())
    <div class="flex justify-center items-center space-x-2 mt-2 mb-2">
        {{-- Poprzednia strona --}}
        @if ($paginator->onFirstPage())
            <span class="bg-purple1 text-white text-[16px] px-3 py-1  rounded-lg border-none border-purple4 opacity-50">
                &laquo;
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
               class="bg-purple4 text-white text-[16px] px-3 py-1  rounded-lg border-none border-purple1 hover:bg-purple1 hover:text-purple4 transition">
                &laquo;
            </a>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="text-purple4 text-[16px] px-1 py-1">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="bg-purple4 text-white text-[16px] px-3 py-1 rounded-lg border-none border-purple1">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}"
                           class="bg-purple1 text-purple4 text-[16px] px-3 py-1  rounded-lg border-none border-purple4 hover:bg-purple4 hover:text-white transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
               class="bg-purple4 text-white text-[16px] px-3 py-1  rounded-lg border-none border-purple1 hover:bg-purple1 hover:text-purple4 transition">
                &raquo;
            </a>
        @else
            <span class="bg-purple1 text-white text-[16px] px-3 py-1  rounded-lg border border-purple4 opacity-50 cursor-not-allowed">
                &raquo;
            </span>
        @endif
    </div>
@endif
