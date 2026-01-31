<!-- Add Model -->
<div class="modal fade" id="add_model">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">

            <form action="{{ route('backoffice.vehicle-models.store') }}" method="POST" class="needs-validation"
                novalidate>
                @csrf

                <div class="modal-header">
                    <h5 class="mb-0">Créer un modèle</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>

                <div class="modal-body pb-1">

                    {{-- Model name --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Modèle <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" required>

                        <div class="invalid-feedback">
                            Le nom du modèle est obligatoire.
                        </div>

                        @error('name')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Brand --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Marque <span class="text-danger">*</span>
                        </label>
                        <select name="vehicle_brand_id" class="select @error('vehicle_brand_id') is-invalid @enderror"
                            required>
                            <option value="" disabled selected>Choisir</option>
                            @foreach ($brands ?? [] as $brand)
                                <option value="{{ $brand->id }}" @selected(old('vehicle_brand_id') == $brand->id)>
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </select>

                        <div class="invalid-feedback">
                            Veuillez sélectionner une marque.
                        </div>

                        @error('vehicle_brand_id')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>

                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">
                            Annuler
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Créer
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
<!-- /Add Model -->
