@if ($paginator->hasPages())
    <div class="nk-pagination nk-pagination-center">
        {{-- Previous Page Link --}}
        @unless ($paginator->onFirstPage())
            <a rel="prev" href="{{ $paginator->previousPageUrl() }}" class="nk-pagination-prev">
                <span class="nk-icon-arrow-left"></span>
            </a>
        @endunless
        <nav>
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span>{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="nk-pagination-current-white">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </nav>
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="nk-pagination-next">
                <span class="nk-icon-arrow-right"></span>
            </a>
        @endif
    </div>
@endif
