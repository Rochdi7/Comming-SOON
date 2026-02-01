<div class="dropdown">
    <button class="btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="ti ti-dots-vertical"></i>
    </button>

    <ul class="dropdown-menu dropdown-menu-end p-2">

        <li>
            <a class="dropdown-item rounded-1"
               href="javascript:void(0);"
               data-bs-toggle="modal"
               data-bs-target="#edit_agency"
               data-edit-action="{{ route('Backoffice.agencies.update', $agency) }}"

               data-agency-name="{{ $agency->name }}"
               data-agency-legal-name="{{ $agency->legal_name }}"
               data-agency-email="{{ $agency->email }}"
               data-agency-phone="{{ $agency->phone }}"
               data-agency-website="{{ $agency->website }}"
               data-agency-currency="{{ $agency->default_currency }}"
               data-agency-address="{{ $agency->address }}"
               data-agency-city="{{ $agency->city }}"
               data-agency-country="{{ $agency->country }}"
               data-agency-tp="{{ $agency->tp_number }}"
               data-agency-rc="{{ $agency->rc_number }}"
               data-agency-if="{{ $agency->if_number }}"
               data-agency-ice="{{ $agency->ice_number }}"
               data-agency-vat="{{ $agency->vat_number }}"
               data-agency-creation-date="{{ $agency->creation_date }}"
               data-agency-description="{{ $agency->description }}">
                <i class="ti ti-edit me-1"></i>Modifier
            </a>
        </li>

        <li>
            <a class="dropdown-item rounded-1"
               href="javascript:void(0);"
               data-bs-toggle="modal"
               data-bs-target="#delete_agency"
               data-delete-action="{{ route('Backoffice.agencies.destroy', $agency) }}"
               data-agency-name="{{ $agency->name }}">
                <i class="ti ti-trash me-1"></i>Supprimer
            </a>
        </li>

    </ul>
</div>
