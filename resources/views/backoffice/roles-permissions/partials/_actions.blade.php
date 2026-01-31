<div class="dropdown">
    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="ti ti-dots-vertical"></i>
    </button>

    <ul class="dropdown-menu dropdown-menu-end p-2">
        @if(($type ?? '') === 'role')
            <li>
                <a class="dropdown-item rounded-1" href="javascript:void(0);"
                   data-bs-toggle="modal" data-bs-target="#edit_role"
                   data-edit-action="{{ route('backoffice.roles.update', $item->id) }}"
                   data-role-name="{{ $item->name }}"
                   data-role-permissions='@json(($perm_ids ?? collect())->values())'>
                    <i class="ti ti-edit me-1"></i>Modifier
                </a>
            </li>

            <li>
                <a class="dropdown-item rounded-1" href="javascript:void(0);"
                   data-bs-toggle="modal" data-bs-target="#delete_role"
                   data-delete-action="{{ route('backoffice.roles.destroy', $item->id) }}"
                   data-delete-name="{{ $item->name }}">
                    <i class="ti ti-trash me-1"></i>Supprimer
                </a>
            </li>
        @else
            <li>
                <a class="dropdown-item rounded-1" href="javascript:void(0);"
                   data-bs-toggle="modal" data-bs-target="#edit_permission"
                   data-edit-action="{{ route('backoffice.permissions.update', $item->id) }}"
                   data-permission-name="{{ $item->name }}">
                    <i class="ti ti-edit me-1"></i>Modifier
                </a>
            </li>

            <li>
                <a class="dropdown-item rounded-1" href="javascript:void(0);"
                   data-bs-toggle="modal" data-bs-target="#delete_permission"
                   data-delete-action="{{ route('backoffice.permissions.destroy', $item->id) }}"
                   data-delete-name="{{ $item->name }}">
                    <i class="ti ti-trash me-1"></i>Supprimer
                </a>
            </li>
        @endif
    </ul>
</div>
