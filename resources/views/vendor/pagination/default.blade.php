@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li><a ng-click="eventPagination($event)" data-href="{{ $paginator->previousPageUrl() }}" rel="prev"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <li><a ng-click="eventPagination($event)" data-href="{{ $url }}">{{ $page }}</a></li>
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a ng-click="eventPagination($event)" data-href="{{ $paginator->nextPageUrl() }}" rel="next"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
        @endif
    </ul>
@endif
