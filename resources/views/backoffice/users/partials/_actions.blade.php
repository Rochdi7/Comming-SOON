<div class="dropdown">
    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="ti ti-dots-vertical"></i>
    </button>

    <ul class="dropdown-menu dropdown-menu-end p-2">

        <li>
            <a class="dropdown-item rounded-1" href="{{ route('backoffice.users.show', $user) }}">
                <i class="ti ti-eye me-1"></i>View Details
            </a>
        </li>

        <li>
            <a class="dropdown-item rounded-1" href="javascript:void(0);"
               data-bs-toggle="modal"
               data-bs-target="#edit_user"
               data-edit-action="{{ route('backoffice.users.update', $user) }}"
               data-user-name="{{ $user->name }}"
               data-user-email="{{ $user->email }}"
               data-user-phone="{{ $user->phone }}"
               data-user-status="{{ $user->status }}"
               data-user-agency="{{ $user->agency_id }}"
               data-user-avatar="{{ $user->getFirstMediaUrl('avatar') }}">
                <i class="ti ti-edit me-1"></i>Modifier
            </a>
        </li>

        <li>
            <a class="dropdown-item rounded-1" href="javascript:void(0);"
               data-bs-toggle="modal"
               data-bs-target="#delete_user"
               data-delete-action="{{ route('backoffice.users.destroy', $user) }}"
               data-user-name="{{ $user->name }}">
                <i class="ti ti-trash me-1"></i>Supprimer
            </a>
        </li>

    </ul>
</div>
