@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between mt-1">
        <div class="flex-wrap flex-sm-fill d-sm-flex">
            <div>
                <ul class="pagination flex-wrap">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item mb-3 disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link text-dark" aria-hidden="true">&lsaquo;</span>
                        </li>
                    @else
                        <li class="page-item mb-3">
                            <a class="page-link text-dark" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item mb-3 disabled" aria-disabled="true"><span class="page-link text-dark">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item mb-3 active" aria-current="page"><span class="page-link text-dark">{{ $page }}</span></li>
                                @else
                                    <li class="page-item mb-3"><a class="page-link text-dark" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item mb-3">
                            <a class="page-link text-dark" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                        </li>
                    @else
                        <li class="page-item mb-3 disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link text-dark" aria-hidden="true">&rsaquo;</span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif
