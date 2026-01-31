<?php $page = 'edit-car'; ?>
@extends('layout.mainlayout_admin')

@section('content')
    <div class="page-wrapper">
        <div class="content me-4 pb-0">

            <div class="mb-3">
                <a href="{{ route('backoffice.vehicles.index') }}" class="d-inline-flex align-items-center fw-medium">
                    <i class="ti ti-arrow-left me-1"></i>Retour à la liste
                </a>
            </div>

            <div class="card mb-0">
                <div class="card-body">
                    <div class="add-wizard car-steps">

                        {{-- Steps (UI only) --}}
                        <ul class="nav d-flex align-items-center flex-wrap gap-3">
                            <li class="nav-item active">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center">
                                    <i class="ti ti-info-circle me-1"></i>Informations
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
                                    <i class="ti ti-float-center me-1"></i>Services
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center">
                                    <i class="ti ti-file-invoice me-1"></i>Fichiers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center">
                                    <i class="ti ti-id me-1"></i>Dommages
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center">
                                    <i class="ti ti-question-mark me-1"></i>FAQ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link d-flex align-items-center">
                                    <i class="ti ti-seo me-1"></i>SEO
                                </a>
                            </li>
                        </ul>

                        {{-- ✅ IMPORTANT: 1 seul form global pour update --}}
                        <form action="{{ route('backoffice.vehicles.update', $vehicle) }}" method="POST"
                            enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            @method('PUT')

                            {{-- =========================
                                FIELDSET 1: BASIC
                            ========================= --}}
                            <fieldset id="first-field">
                                <div
                                    class="filterbox p-20 mb-4 d-flex align-items-center justify-content-between flex-wrap gap-3">
                                    <h4 class="d-flex align-items-center">
                                        <i class="ti ti-info-circle text-secondary me-2"></i>Infos de base
                                    </h4>

                                    {{-- (Optionnel) langue UI --}}
                                    <div class="dropdown flag-dropdown">
                                        <a class="dropdown-toggle btn btn-white d-flex align-items-center justify-content-between"
                                            data-bs-toggle="dropdown" href="javascript:void(0);">
                                            <img src="{{ URL::asset('admin_assets/img/flags/fr.svg') }}" alt="Langue"
                                                class="img-fluid me-1">Français
                                        </a>
                                        <ul class="dropdown-menu p-2">
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item d-flex align-items-center">
                                                    <img src="{{ URL::asset('admin_assets/img/flags/fr.svg') }}"
                                                        alt="" height="16" class="me-1">Français
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                {{-- Featured image --}}
                                <div class="border-bottom mb-4 pb-4">
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Image principale</h6>
                                            <p>Télécharger/Changer l’image</p>
                                        </div>
                                        <div class="col-xl-9">
                                            <div class="d-flex align-items-center flex-wrap row-gap-3 upload-pic">
                                                <div
                                                    class="d-flex align-items-center justify-content-center avatar avatar-xxl me-3 flex-shrink-0 border rounded-circle frames">
                                                    {{-- ✅ adapte selon ton système (Spatie ou simple colonne) --}}
                                                    <img src="{{ $vehicle->featured_image_url ?? URL::asset('admin_assets/img/car/car-02.jpg') }}"
                                                        class="img-fluid rounded-circle" alt="vehicle">
                                                </div>

                                                <div>
                                                    <div
                                                        class="drag-upload-btn btn btn-md btn-dark d-inline-flex align-items-center mb-2">
                                                        <i class="ti ti-photo me-1"></i>Changer
                                                        <input type="file" name="featured_image"
                                                            class="form-control image-sign" accept="image/*">
                                                    </div>
                                                    <p>Taille recommandée : 500px x 500px</p>

                                                    @error('featured_image')
                                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Car info --}}
                                <div class="border-bottom mb-2 pb-2">
                                    <div class="row row-gap-4">
                                        <div class="col-xl-3">
                                            <h6 class="mb-1">Informations véhicule</h6>
                                            <p>Modifier les informations</p>
                                        </div>

                                        <div class="col-xl-9">

                                            {{-- Name --}}
                                            <div class="mb-3">
                                                <label class="form-label">Nom <span class="text-danger">*</span></label>
                                                <input type="text" name="name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ old('name', $vehicle->name) }}" required>
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            {{-- Plate --}}
                                            <div class="mb-3">
                                                <label class="form-label">Matricule</label>
                                                <input type="text" name="plate_number"
                                                    class="form-control @error('plate_number') is-invalid @enderror"
                                                    value="{{ old('plate_number', $vehicle->plate_number) }}">
                                                @error('plate_number')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            {{-- VIN --}}
                                            <div class="mb-3">
                                                <label class="form-label">VIN</label>
                                                <input type="text" name="vin_number"
                                                    class="form-control @error('vin_number') is-invalid @enderror"
                                                    value="{{ old('vin_number', $vehicle->vin_number) }}">
                                                @error('vin_number')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                {{-- Brand --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Marque <span
                                                                class="text-danger">*</span></label>
                                                        <select name="vehicle_brand_id"
                                                            class="select @error('vehicle_brand_id') is-invalid @enderror"
                                                            required>
                                                            <option value="">Sélectionner</option>
                                                            @foreach ($brands ?? [] as $brand)
                                                                <option value="{{ $brand->id }}"
                                                                    @selected(old('vehicle_brand_id', $vehicle->vehicle_brand_id) == $brand->id)>
                                                                    {{ $brand->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('vehicle_brand_id')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- Model --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Modèle <span
                                                                class="text-danger">*</span></label>
                                                        <select name="vehicle_model_id"
                                                            class="select @error('vehicle_model_id') is-invalid @enderror"
                                                            required>
                                                            <option value="">Sélectionner</option>
                                                            @foreach ($models ?? [] as $model)
                                                                <option value="{{ $model->id }}"
                                                                    @selected(old('vehicle_model_id', $vehicle->vehicle_model_id) == $model->id)>
                                                                    {{ $model->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('vehicle_model_id')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- Year --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Année <span
                                                                class="text-danger">*</span></label>
                                                        <div class="input-icon-end position-relative">
                                                            <input type="text" name="year"
                                                                class="form-control yearpicker @error('year') is-invalid @enderror"
                                                                value="{{ old('year', $vehicle->year) }}" required>
                                                            <span class="input-icon-addon">
                                                                <i class="ti ti-calendar"></i>
                                                            </span>
                                                        </div>
                                                        @error('year')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- Fuel --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Carburant</label>
                                                        <select name="fuel"
                                                            class="select @error('fuel') is-invalid @enderror">
                                                            <option value="">Sélectionner</option>
                                                            <option value="petrol" @selected(old('fuel', $vehicle->fuel) === 'petrol')>Essence
                                                            </option>
                                                            <option value="diesel" @selected(old('fuel', $vehicle->fuel) === 'diesel')>Diesel
                                                            </option>
                                                            <option value="electric" @selected(old('fuel', $vehicle->fuel) === 'electric')>
                                                                Électrique</option>
                                                        </select>
                                                        @error('fuel')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- Transmission --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Transmission</label>
                                                        <select name="transmission"
                                                            class="select @error('transmission') is-invalid @enderror">
                                                            <option value="">Sélectionner</option>
                                                            <option value="manual" @selected(old('transmission', $vehicle->transmission) === 'manual')>Manuelle
                                                            </option>
                                                            <option value="automatic" @selected(old('transmission', $vehicle->transmission) === 'automatic')>
                                                                Automatique</option>
                                                            <option value="semi_automatic" @selected(old('transmission', $vehicle->transmission) === 'semi_automatic')>
                                                                Semi-automatique</option>
                                                        </select>
                                                        @error('transmission')
                                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                {{-- Mileage --}}
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Kilométrage</label>
                                                        <input type="text" name="mileage"
                                                            class="form-control @error('mileage') is-invalid @enderror"
                                                            value="{{ old('mileage', $vehicle->mileage) }}">
                                                        @error('mileage')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Actions --}}
                                <div class="d-flex align-items-center justify-content-end pt-3">
                                    <a href="{{ route('backoffice.vehicles.index') }}"
                                        class="btn btn-light d-flex align-items-center me-2">
                                        <i class="ti ti-chevron-left me-1"></i>Annuler
                                    </a>

                                    {{-- Ici ton wizard JS fera “next”, sinon on peut faire un simple submit --}}
                                    <button class="btn btn-primary d-flex align-items-center" type="submit">
                                        Enregistrer
                                        <i class="ti ti-device-floppy ms-1"></i>
                                    </button>
                                </div>
                            </fieldset>

                            {{-- Les autres fieldsets restent UI pour l’instant (on les rendra dynamiques après) --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer d-sm-flex align-items-center justify-content-between bg-white p-3">
            <p class="mb-0">
                <a href="javascript:void(0);">Politique de confidentialité</a>
                <a href="javascript:void(0);" class="ms-4">Conditions d’utilisation</a>
            </p>
            <p>&copy; {{ date('Y') }} RentalCar</p>
        </div>
    </div>
@endsection
