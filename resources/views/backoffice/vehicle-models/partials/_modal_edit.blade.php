<!-- Edit Model -->
<div class="modal fade" id="edit_model">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">

            <form id="editModelForm"
                  method="POST"
                  class="needs-validation"
                  novalidate>
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="mb-0">Modifier le modèle</h5>
                    <button type="button" class="btn-close custom-btn-close"
                            data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>

                <div class="modal-body pb-1">

                    {{-- Model name --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Modèle <span class="text-danger">*</span>
                        </label>
                        <input type="text"
                               name="name"
                               id="editModelName"
                               class="form-control"
                               required>

                        <div class="invalid-feedback">
                            Le nom du modèle est obligatoire.
                        </div>
                    </div>

                    {{-- Brand --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Marque <span class="text-danger">*</span>
                        </label>
                        <select name="vehicle_brand_id"
                                id="editModelBrand"
                                class="select"
                                required>
                            <option value="" disabled>Choisir</option>
                            @foreach(($brands ?? []) as $brand)
                                <option value="{{ $brand->id }}">
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </select>

                        <div class="invalid-feedback">
                            Veuillez sélectionner une marque.
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);"
                           class="btn btn-light me-3"
                           data-bs-dismiss="modal">
                            Annuler
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Enregistrer
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
<!-- /Edit Model -->
