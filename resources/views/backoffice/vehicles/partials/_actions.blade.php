<div class="dropdown">
    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="ti ti-dots-vertical"></i>
    </button>

    <ul class="dropdown-menu dropdown-menu-end p-2">

        <li>
            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal"
                data-bs-target="#edit_model" data-edit-action="{{ route('Backoffice.vehicle-models.update', $model) }}"
                data-model-name="{{ $model->name }}"
                data-model-brand-id="{{ $model->vehicle_brand_id ?? ($model->brand->id ?? '') }}">
                <i class="ti ti-edit me-1"></i>Modifier
            </a>
        </li>

        <li>
            <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal"
                data-bs-target="#delete_model"
                data-delete-action="{{ route('Backoffice.vehicle-models.destroy', $model) }}">
                <i class="ti ti-trash me-1"></i>Supprimer
            </a>
        </li>

    </ul>
</div>
