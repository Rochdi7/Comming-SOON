<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
    <div class="d-flex align-items-center flex-wrap row-gap-3">
        <div class="dropdown me-2">
            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                data-bs-toggle="dropdown">
                <i class="ti ti-filter me-1"></i>
                Sort By : {{ request('sort', 'latest') === 'latest' ? 'Latest' : ucfirst(request('sort')) }}
            </a>

            <ul class="dropdown-menu dropdown-menu-end p-2">
                <li>
                    <a href="{{ route('backoffice.vehicles.index', array_merge(request()->query(), ['sort' => 'latest'])) }}"
                        class="dropdown-item rounded-1">
                        Latest
                    </a>
                </li>
                <li>
                    <a href="{{ route('backoffice.vehicles.index', array_merge(request()->query(), ['sort' => 'asc'])) }}"
                        class="dropdown-item rounded-1">
                        Ascending
                    </a>
                </li>
                <li>
                    <a href="{{ route('backoffice.vehicles.index', array_merge(request()->query(), ['sort' => 'desc'])) }}"
                        class="dropdown-item rounded-1">
                        Desending
                    </a>
                </li>
                <li>
                    <a href="{{ route('backoffice.vehicles.index', array_merge(request()->query(), ['sort' => 'last_month'])) }}"
                        class="dropdown-item rounded-1">
                        Last Month
                    </a>
                </li>
                <li>
                    <a href="{{ route('backoffice.vehicles.index', array_merge(request()->query(), ['sort' => 'last_7_days'])) }}"
                        class="dropdown-item rounded-1">
                        Last 7 Days
                    </a>
                </li>
            </ul>
        </div>

        <div class="me-2">
            <div class="input-icon-start position-relative topdatepicker">
                <span class="input-icon-addon">
                    <i class="ti ti-calendar"></i>
                </span>

                {{-- On garde ton input date range, mais on lui met un name pour passer en GET --}}
                <input type="text" class="form-control date-range bookingrange" name="date"
                    value="{{ request('date') }}" placeholder="dd/mm/yyyy - dd/mm/yyyy">
            </div>
        </div>

        <div class="dropdown">
            <a href="#filtercollapse" class="filtercollapse coloumn d-inline-flex align-items-center"
                data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="filtercollapse">
                <i class="ti ti-filter me-1"></i> Filter
                <span
                    class="badge badge-xs rounded-pill bg-danger ms-2">{{ (int) request('filters_count', 0) }}</span>
            </a>
        </div>
    </div>

    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
        <div class="dropdown me-2">
            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                data-bs-toggle="dropdown">
                <i class="ti ti-edit-circle me-1"></i> Bulk Actions
            </a>
            <ul class="dropdown-menu dropdown-menu-end p-2">
                <li>
                    {{-- Si tu crées une route bulkDestroy: POST backoffice.vehicles.bulkDestroy --}}
                    <a href="javascript:void(0);" class="dropdown-item rounded-1"
                        onclick="document.getElementById('vehicles-bulk-delete-form')?.submit();">
                        Delete
                    </a>
                </li>
            </ul>
        </div>

        {{-- Search en GET vers index --}}
        <form action="{{ route('backoffice.vehicles.index') }}" method="GET" class="top-search me-2">
            {{-- on garde les autres params (sort/date/...) --}}
            @foreach (request()->except('q', 'page') as $k => $v)
                @if (is_array($v))
                    @foreach ($v as $vv)
                        <input type="hidden" name="{{ $k }}[]" value="{{ $vv }}">
                    @endforeach
                @else
                    <input type="hidden" name="{{ $k }}" value="{{ $v }}">
                @endif
            @endforeach

            <div class="top-search-group">
                <span class="input-icon"><i class="ti ti-search"></i></span>
                <input type="text" class="form-control" name="q" value="{{ request('q') }}"
                    placeholder="Search">
            </div>
        </form>

        <div class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle coloumn btn btn-white d-inline-flex align-items-center"
                data-bs-toggle="dropdown">
                <i class="ti ti-layout-board me-1"></i> Columns
            </a>
            <div class="dropdown-menu dropdown-menu-lg p-2">
                <ul>
                    <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                            <span class="d-inline-flex align-items-center"><i class="ti ti-grip-vertical me-1"></i>
                                CAR</span>
                            <div class="form-check form-check-sm form-switch mb-0">
                                <input class="form-check-input form-label" type="checkbox" role="switch"
                                    checked="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                            <span><i class="ti ti-grip-vertical me-1"></i>BASE LOCATION</span>
                            <div class="form-check form-check-sm form-switch mb-0">
                                <input class="form-check-input form-label" type="checkbox" role="switch"
                                    checked="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                            <span><i class="ti ti-grip-vertical me-1"></i>PRICE (PER DAY)</span>
                            <div class="form-check form-check-sm form-switch mb-0">
                                <input class="form-check-input form-label" type="checkbox" role="switch"
                                    checked="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                            <span><i class="ti ti-grip-vertical me-1"></i>DAMAGES</span>
                            <div class="form-check form-check-sm form-switch mb-0">
                                <input class="form-check-input form-label" type="checkbox" role="switch"
                                    checked="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                            <span><i class="ti ti-grip-vertical me-1"></i>IS FEATURED</span>
                            <div class="form-check form-check-sm form-switch mb-0">
                                <input class="form-check-input form-label" type="checkbox" role="switch"
                                    checked="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                            <span><i class="ti ti-grip-vertical me-1"></i>CREATED DATE</span>
                            <div class="form-check form-check-sm form-switch mb-0">
                                <input class="form-check-input form-label" type="checkbox" role="switch"
                                    checked="">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-item d-flex align-items-center justify-content-between rounded-1">
                            <span><i class="ti ti-grip-vertical me-1"></i>STATUS</span>
                            <div class="form-check form-check-sm form-switch mb-0">
                                <input class="form-check-input form-label" type="checkbox" role="switch"
                                    checked="">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

{{-- Bulk delete form (sélection via checkbox name="ids[]") --}}
<form id="vehicles-bulk-delete-form" action="{{ route('backoffice.vehicles.bulkDestroy') }}" method="POST"
    class="d-none" onsubmit="return confirm('Confirmer la suppression des véhicules sélectionnés ?');">
    @csrf
    @method('DELETE')
    {{-- Les ids[] seront clonés en JS depuis le tableau (si tu veux je te donne le JS après) --}}
</form>
