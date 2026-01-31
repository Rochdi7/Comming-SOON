<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
    <div class="my-auto mb-2">
        <h4 class="mb-1">Rôles & Permissions</h4>
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('backoffice.dashboard') }}">Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Rôles & Permissions</li>
            </ol>
        </nav>
    </div>

    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
        <div class="mb-2 me-2">
            <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center"
               data-bs-toggle="modal" data-bs-target="#add_role">
                <i class="ti ti-plus me-2"></i>Ajouter un rôle
            </a>
        </div>
        <div class="mb-2">
            <a href="javascript:void(0);" class="btn btn-primary d-flex align-items-center"
               data-bs-toggle="modal" data-bs-target="#add_permission">
                <i class="ti ti-plus me-2"></i>Ajouter une permission
            </a>
        </div>
    </div>
</div>
