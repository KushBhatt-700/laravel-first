
@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
        <div>
            <p class="small text-muted">
                {!! __('Showing') !!}
                <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                {!! __('To') !!}
                <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                {!! __('From') !!}
                <span class="fw-semibold">{{ $paginator->total() }}</span>
            </p>
        </div>
        <div>
            <ul class="pagination">
                
                @php($pre_disable = '')
                @php($next_disable = '')

                @if($paginator->onFirstPage())
                    @php($pre_disable = 'disabled')
                @elseif($paginator->onLastPage())
                    @php($next_disable = 'disabled')
                @endif
                
                <li class="page-item {{ $pre_disable }}">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">Previous</a>
                </li>

                @foreach($elements as $element)
                    @if(is_string($element))
                        <li class="page-item disabled"><a class="page-link">{{ $element }}</a></li>
                    @endif
                    @if(is_array($element))
                        @foreach($element as $page => $value)
                            @php($para = request()->query())
                            @php($search = Request::get('search'))
                            @php($url = $value)
                            
                            @if($search)
                                @php($url = $url . (parse_url(url()->full(), PHP_URL_QUERY) ? '&' : '?') . 'search='.$search)
                            @endif

                            @if($page == $paginator->currentPage())
                                <li class="page-item active"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                <li class="page-item {{ $next_disable }}">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endif