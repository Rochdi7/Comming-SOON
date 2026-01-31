<div class="dropdown">
    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="ti ti-dots-vertical"></i>
    </button>
    <ul class="dropdown-menu dropdown-menu-end p-2">

        <li>
            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal"
                data-bs-target="#edit_brand" data-edit-action="{{ route('backoffice.vehicle-brands.update', $brand) }}"
                data-brand-name="{{ $brand->name }}" data-brand-logo="{{ $logo ?? '' }}">
                <i class="ti ti-edit me-1"></i>Edit
            </a>
        </li>

        <li>
            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal"
                data-bs-target="#delete_brand"
                data-delete-action="{{ route('backoffice.vehicle-brands.destroy', $brand) }}">
                <i class="ti ti-trash me-1"></i>Delete
            </a>
        </li>

    </ul>
</div>
