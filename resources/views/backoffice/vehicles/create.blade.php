<?php $page = 'add-car'; ?>
@extends('layout.mainlayout_admin')

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content me-0">
            <div class="mb-3">
                <a href="{{ route('backoffice.vehicles.index') }}" class="d-inline-flex align-items-center fw-medium">
                    <i class="ti ti-arrow-left me-1"></i>Retour à la liste
                </a>
            </div>

            <div class="card mb-0">
                <div class="card-body">
                    <div class="add-wizard car-steps">

                        {{-- WIZARD NAV (garde ton theme) --}}
                        <ul class="nav d-flex align-items-center flex-wrap gap-3">
                            <li class="nav-item active">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center">
                                    <i class="ti ti-info-circle me-1"></i>Infos de base
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center">
                                    <i class="ti ti-flame me-1"></i>Options
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center">
                                    <i class="ti ti-files me-1"></i>Tarifs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center">
                                    <i class="ti ti-file-invoice me-1"></i>Photos
                                </a>
                            </li>
                        </ul>

                        {{-- =========================
                    STEP 1 : BASIC
                    ========================= --}}
                        <fieldset id="first-field">
                            <form method="POST" action="{{ route('backoffice.vehicles.store') }}"
                                enctype="multipart/form-data" class="needs-validation" novalidate>
                                @csrf

                                <div
                                    class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h4 class="d-flex align-items-center">
                                        <i class="ti ti-info-circle text-secondary me-2"></i>Informations de base
                                    </h4>
                                </div>

                                {{-- PHOTO --}}
                                <div class="border-bottom mb-4 pb-4">
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Photos</h6>
                                            <p>Ajouter des photos du véhicule</p>
                                        </div>

                                        <div class="col-xl-9">
                                            <div class="d-flex align-items-center flex-wrap row-gap-3 upload-pic">
                                                <div
                                                    class="d-flex align-items-center justify-content-center avatar avatar-xxl me-3 flex-shrink-0 border rounded-circle frames">
                                                    <img id="previewVehiclePhoto"
                                                        src="{{ asset('images/placeholder.jpg') }}"
                                                        class="img-fluid rounded-circle" alt="photo">
                                                    <a href="javascript:void(0);"
                                                        class="upload-img-trash trash-end btn btn-sm rounded-circle"
                                                        id="clearVehiclePhoto">
                                                        <i class="ti ti-trash fs-12"></i>
                                                    </a>
                                                </div>

                                                <div>
                                                    <div
                                                        class="drag-upload-btn btn btn-md btn-dark d-inline-flex align-items-center mb-2">
                                                        <i class="ti ti-photo me-1"></i>Choisir
                                                        <input type="file" class="form-control image-sign"
                                                            name="photos[]" id="vehiclePhotosInput" accept="image/*"
                                                            multiple>
                                                    </div>
                                                    <p class="mb-0">Taille recommandée : 500px x 500px</p>
                                                    <div class="invalid-feedback d-block">
                                                        @error('photos')
                                                            {{ $message }}
                                                        @enderror
                                                        @error('photos.*')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- CAR INFO --}}
                                <div class="border-bottom mb-2 pb-2">
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Véhicule</h6>
                                            <p>Renseigner les informations principales</p>
                                        </div>

                                        <div class="col-xl-9">
                                            <div class="row">
                                                {{-- MODELE (vehicle_model_id) --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Modèle <span
                                                                class="text-danger">*</span></label>
                                                        <select class="select" name="vehicle_model_id" required>
                                                            <option value="">Sélectionner</option>
                                                            @foreach ($vehicleModels ?? [] as $model)
                                                                <option value="{{ $model->id }}"
                                                                    @selected(old('vehicle_model_id') == $model->id)>
                                                                    {{ $model->name }} @if ($model->brand)
                                                                        - {{ $model->brand->name }}
                                                                    @endif
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">Veuillez choisir un modèle.</div>
                                                        @error('vehicle_model_id')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- PLATE (registration_number) --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Immatriculation <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"
                                                            name="registration_number"
                                                            value="{{ old('registration_number') }}" required>
                                                        <div class="invalid-feedback">Veuillez saisir l’immatriculation.
                                                        </div>
                                                        @error('registration_number')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- CITY (registration_city) --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Ville d’immatriculation</label>
                                                        <input type="text" class="form-control" name="registration_city"
                                                            value="{{ old('registration_city') }}"
                                                            placeholder="Ex: Casablanca">
                                                        @error('registration_city')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- VIN --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">VIN</label>
                                                        <input type="text" class="form-control" name="vin"
                                                            value="{{ old('vin') }}">
                                                        @error('vin')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- COLOR --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Couleur <span
                                                                class="text-danger">*</span></label>
                                                        <select class="select2-color" name="color" required>
                                                            <option value="">Sélectionner</option>
                                                            <option value="red" @selected(old('color') === 'red')
                                                                class="bg-danger">Rouge</option>
                                                            <option value="green" @selected(old('color') === 'green')
                                                                class="bg-success">Vert</option>
                                                            <option value="blue" @selected(old('color') === 'blue')
                                                                class="bg-info">Bleu</option>
                                                            <option value="black" @selected(old('color') === 'black')>Noir
                                                            </option>
                                                            <option value="white" @selected(old('color') === 'white')>Blanc
                                                            </option>
                                                            <option value="gray" @selected(old('color') === 'gray')>Gris
                                                            </option>
                                                        </select>
                                                        <div class="invalid-feedback">Veuillez choisir une couleur.</div>
                                                        @error('color')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- YEAR --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Année <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-icon-end position-relative">
                                                            <input type="text" class="form-control yearpicker"
                                                                name="year" value="{{ old('year') }}" required>
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-calendar"></i>
                                                            </span>
                                                        </div>
                                                        <div class="invalid-feedback">Veuillez saisir l’année.</div>
                                                        @error('year')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- CURRENT MILEAGE --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Kilométrage actuel</label>
                                                        <input type="number" class="form-control" name="current_mileage"
                                                            value="{{ old('current_mileage') }}" min="0">
                                                        @error('current_mileage')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- STATUS --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Statut <span
                                                                class="text-danger">*</span></label>
                                                        <select class="select" name="status" required>
                                                            <option value="">Sélectionner</option>
                                                            <option value="available" @selected(old('status') === 'available')>
                                                                Disponible</option>
                                                            <option value="unavailable" @selected(old('status') === 'unavailable')>
                                                                Indisponible</option>
                                                            <option value="maintenance" @selected(old('status') === 'maintenance')>
                                                                Maintenance</option>
                                                            <option value="sold" @selected(old('status') === 'sold')>Vendu
                                                            </option>
                                                        </select>
                                                        <div class="invalid-feedback">Veuillez choisir un statut.</div>
                                                        @error('status')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- NOTES --}}
                                                <div class="col-lg-8 col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Notes</label>
                                                        <textarea class="form-control" name="notes" rows="3" placeholder="Informations supplémentaires...">{{ old('notes') }}</textarea>
                                                        @error('notes')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-end pt-3">
                                    <a href="{{ route('backoffice.vehicles.index') }}"
                                        class="btn btn-light d-flex align-items-center me-2">
                                        <i class="ti ti-chevron-left me-1"></i>Annuler
                                    </a>

                                    <button class="btn btn-primary wizard-next d-flex align-items-center" type="button">
                                        Options <i class="ti ti-chevron-right ms-1"></i>
                                    </button>
                                </div>
                            </form>
                        </fieldset>

                        {{-- =========================
                    STEP 2 : FEATURES (has_gps, has_air_conditioning, fuel_policy, fuel levels)
                    ========================= --}}
                        <fieldset>
                            <form class="needs-validation" novalidate>
                                <div
                                    class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h4 class="d-flex align-items-center">
                                        <i class="ti ti-flame text-secondary me-2"></i>Options
                                    </h4>
                                </div>

                                <div class="border-bottom mb-2 pb-2">
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Équipements</h6>
                                            <p>Configurer les options disponibles</p>
                                        </div>

                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="has_gps" form="vehicleMainForm">
                                                            <label class="form-check-label" for="has_gps">GPS</label>
                                                        </div>
                                                        <input type="hidden" name="has_gps"
                                                            value="{{ old('has_gps', 0) }}" form="vehicleMainForm">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <div class="form-check form-checkbox mb-0">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="has_air_conditioning" form="vehicleMainForm">
                                                            <label class="form-check-label"
                                                                for="has_air_conditioning">Climatisation</label>
                                                        </div>
                                                        <input type="hidden" name="has_air_conditioning"
                                                            value="{{ old('has_air_conditioning', 0) }}"
                                                            form="vehicleMainForm">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Politique carburant</label>
                                                        <select class="select" name="fuel_policy" form="vehicleMainForm">
                                                            <option value="">Sélectionner</option>
                                                            <option value="full_to_full" @selected(old('fuel_policy') === 'full_to_full')>
                                                                Plein à plein</option>
                                                            <option value="same_to_same" @selected(old('fuel_policy') === 'same_to_same')>Même
                                                                niveau</option>
                                                        </select>
                                                        @error('fuel_policy')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Carburant (sortie)</label>
                                                        <input type="number" step="0.01" min="0"
                                                            max="1" class="form-control" name="fuel_level_out"
                                                            value="{{ old('fuel_level_out') }}" placeholder="0.00 - 1.00"
                                                            form="vehicleMainForm">
                                                        @error('fuel_level_out')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Carburant (retour)</label>
                                                        <input type="number" step="0.01" min="0"
                                                            max="1" class="form-control" name="fuel_level_in"
                                                            value="{{ old('fuel_level_in') }}" placeholder="0.00 - 1.00"
                                                            form="vehicleMainForm">
                                                        @error('fuel_level_in')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-end pt-3">
                                    <button type="button" class="btn btn-outline-light border wizard-prev me-2">
                                        <i class="ti ti-chevron-left me-1"></i>Retour
                                    </button>
                                    <button class="btn btn-primary wizard-next d-flex align-items-center" type="button">
                                        Tarifs <i class="ti ti-chevron-right ms-1"></i>
                                    </button>
                                </div>
                            </form>
                        </fieldset>

                        {{-- =========================
                    STEP 3 : PRICING (daily_rate, deposit_amount)
                    ========================= --}}
                        <fieldset>
                            <form class="needs-validation" novalidate>
                                <div
                                    class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h4 class="d-flex align-items-center">
                                        <i class="ti ti-files text-secondary me-2"></i>Tarifs
                                    </h4>
                                </div>

                                <div class="border-bottom mb-2 pb-2">
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Prix</h6>
                                            <p>Configurer les montants</p>
                                        </div>

                                        <div class="col-xl-9">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Prix / jour (MAD) <span
                                                                class="text-danger">*</span></label>
                                                        <input type="number" step="0.01" min="0"
                                                            class="form-control" name="daily_rate"
                                                            value="{{ old('daily_rate') }}" required
                                                            form="vehicleMainForm">
                                                        <div class="invalid-feedback">Veuillez saisir le prix/jour.</div>
                                                        @error('daily_rate')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Caution (MAD)</label>
                                                        <input type="number" step="0.01" min="0"
                                                            class="form-control" name="deposit_amount"
                                                            value="{{ old('deposit_amount') }}" form="vehicleMainForm">
                                                        @error('deposit_amount')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center justify-content-end pt-3">
                                    <button type="button" class="btn btn-outline-light border wizard-prev me-2">
                                        <i class="ti ti-chevron-left me-1"></i>Retour
                                    </button>

                                    {{-- SUBMIT FINAL --}}
                                    <button class="btn btn-primary d-flex align-items-center" type="submit"
                                        form="vehicleMainForm">
                                        Enregistrer <i class="ti ti-chevron-right ms-1"></i>
                                    </button>
                                </div>
                            </form>
                        </fieldset>

                        {{-- HIDDEN MAIN FORM (pour centraliser la soumission) --}}
                        <form id="vehicleMainForm" method="POST" action="{{ route('backoffice.vehicles.store') }}"
                            enctype="multipart/form-data" class="d-none">
                            @csrf
                            {{-- Ici on submit tout depuis les steps via form="" --}}
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- Footer-->
        <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
            <p class="mb-0">
                <a href="javascript:void(0);">Politique de confidentialité</a>
                <a href="javascript:void(0);" class="ms-4">Conditions d’utilisation</a>
            </p>
            <p>&copy; 2025 Dreamsrent, Made with <span class="text-danger">❤</span> by <a href="javascript:void(0);"
                    class="text-secondary">Dreams</a></p>
        </div>
        <!-- /Footer-->
    </div>
    <!-- /Page Wrapper -->

    {{-- JS: preview + bootstrap validation + checkbox hidden sync --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ===== Bootstrap validation
            document.querySelectorAll('.needs-validation').forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });

            // ===== Photos preview (preview 1st image)
            const input = document.getElementById('vehiclePhotosInput');
            const preview = document.getElementById('previewVehiclePhoto');
            const clearBtn = document.getElementById('clearVehiclePhoto');

            if (input && preview) {
                input.addEventListener('change', function() {
                    const file = input.files && input.files[0] ? input.files[0] : null;
                    if (!file) return;
                    const url = URL.createObjectURL(file);
                    preview.src = url;
                });
            }

            if (clearBtn && input && preview) {
                clearBtn.addEventListener('click', function() {
                    input.value = '';
                    preview.src = "{{ asset('images/placeholder.jpg') }}";
                });
            }

            // ===== Checkbox -> hidden fields (has_gps / has_air_conditioning)
            function syncCheckboxToHidden(checkboxId, hiddenName) {
                const cb = document.getElementById(checkboxId);
                const hidden = document.querySelector('input[type="hidden"][name="' + hiddenName +
                    '"][form="vehicleMainForm"]');
                if (!cb || !hidden) return;

                // init from old()
                const oldVal = hidden.value === '1';
                cb.checked = oldVal;

                cb.addEventListener('change', function() {
                    hidden.value = cb.checked ? '1' : '0';
                });
            }

            syncCheckboxToHidden('has_gps', 'has_gps');
            syncCheckboxToHidden('has_air_conditioning', 'has_air_conditioning');
        });
    </script>
@endsection
