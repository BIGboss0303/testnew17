@if ($products->hasPages())
                        <ul class="pagination">
                            @if ($products->onFirstPage())
                                <li class="page-item disabled" aria-disabled="true">
                                    <span class="page-link">Previous</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $products->previousPageUrl('taf=fsaf') }}" rel="prev">Previous</a>
                                </li>
                            @endif

                            @foreach ($elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page<=$products->currentPage()+2 && $page>=$products->currentPage()-2)
                                            
                                        
                                            @if ($page == $products->currentPage())
                                                <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            @if ($products->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $products->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>
                                </li>
                            @else
                                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                    <span class="page-link" aria-hidden="true">Next</span>
                                </li>
                            @endif
                        </ul>
                    @endif