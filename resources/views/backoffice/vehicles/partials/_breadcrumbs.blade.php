<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
    <div class="my-auto mb-2">
        <h4 class="mb-1">Tous les véhicules</h4>
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('backoffice.dashboard') }}">Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Véhicules</li>
            </ol>
        </nav>
    </div>

    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
        <div class="mb-2 me-2">
            <a href="javascript:window.print();" class="btn btn-white d-flex align-items-center">
                <i class="ti ti-printer me-2"></i>Imprimer
            </a>
        </div>

        <div class="mb-2 me-2">
            <div class="dropdown">
                <a href="javascript:void(0);" class="btn btn-dark d-inline-flex align-items-center">
                    <i class="ti ti-upload me-1"></i>Exporter
                </a>
            </div>
        </div>

        <div class="mb-2">
            {{-- ✅ Redirection vers la page create (pas de modal) --}}
            <a href="{{ route('backoffice.vehicles.create') }}" class="btn btn-primary d-flex align-items-center">
                <i class="ti ti-plus me-2"></i>Ajouter un véhicule
            </a>
        </div>
    </div>
</div>
