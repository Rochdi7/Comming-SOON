<div class="modal fade" id="add_agency">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="mb-0">Créer une agence</h5>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </button>
            </div>

            <form action="{{ route('Backoffice.agencies.store') }}"
                  method="POST"
                  class="needs-validation"
                  novalidate>
                @csrf

                <div class="modal-body pb-1">
                    <div class="row">

                        {{-- Nom --}}
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Nom <span class="text-danger">*</span></label>
                                <input type="text"
                                       name="name"
                                       value="{{ old('name') }}"
                                       class="form-control @error('name') is-invalid @enderror"
                                       required>
                                <div class="invalid-feedback">Veuillez saisir le nom.</div>
                                @error('name') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Raison sociale --}}
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Raison sociale</label>
                                <input type="text"
                                       name="legal_name"
                                       value="{{ old('legal_name') }}"
                                       class="form-control @error('legal_name') is-invalid @enderror">
                                @error('legal_name') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Email / Téléphone --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       class="form-control @error('email') is-invalid @enderror">
                                @error('email') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="text"
                                       name="phone"
                                       value="{{ old('phone') }}"
                                       class="form-control @error('phone') is-invalid @enderror">
                                @error('phone') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Site web / Devise --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Site web</label>
                                <input type="text"
                                       name="website"
                                       value="{{ old('website') }}"
                                       class="form-control @error('website') is-invalid @enderror"
                                       placeholder="ex: https://exemple.com">
                                @error('website') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Devise par défaut</label>
                                <input type="text"
                                       name="default_currency"
                                       value="{{ old('default_currency', 'MAD') }}"
                                       class="form-control @error('default_currency') is-invalid @enderror"
                                       maxlength="3">
                                @error('default_currency') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Adresse --}}
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Adresse</label>
                                <textarea name="address"
                                          class="form-control @error('address') is-invalid @enderror"
                                          rows="2">{{ old('address') }}</textarea>
                                @error('address') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Ville / Pays --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Ville</label>
                                <input type="text"
                                       name="city"
                                       value="{{ old('city') }}"
                                       class="form-control @error('city') is-invalid @enderror">
                                @error('city') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Pays</label>
                                <input type="text"
                                       name="country"
                                       value="{{ old('country') }}"
                                       class="form-control @error('country') is-invalid @enderror">
                                @error('country') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Infos fiscales --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">TP</label>
                                <input type="text"
                                       name="tp_number"
                                       value="{{ old('tp_number') }}"
                                       class="form-control @error('tp_number') is-invalid @enderror">
                                @error('tp_number') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">RC</label>
                                <input type="text"
                                       name="rc_number"
                                       value="{{ old('rc_number') }}"
                                       class="form-control @error('rc_number') is-invalid @enderror">
                                @error('rc_number') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">IF</label>
                                <input type="text"
                                       name="if_number"
                                       value="{{ old('if_number') }}"
                                       class="form-control @error('if_number') is-invalid @enderror">
                                @error('if_number') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">ICE</label>
                                <input type="text"
                                       name="ice_number"
                                       value="{{ old('ice_number') }}"
                                       class="form-control @error('ice_number') is-invalid @enderror">
                                @error('ice_number') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- TVA / Date création --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">N° TVA</label>
                                <input type="text"
                                       name="vat_number"
                                       value="{{ old('vat_number') }}"
                                       class="form-control @error('vat_number') is-invalid @enderror">
                                @error('vat_number') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Date de création</label>
                                <input type="date"
                                       name="creation_date"
                                       value="{{ old('creation_date') }}"
                                       class="form-control @error('creation_date') is-invalid @enderror">
                                @error('creation_date') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description"
                                          class="form-control @error('description') is-invalid @enderror"
                                          rows="3">{{ old('description') }}</textarea>
                                @error('description') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Annuler</a>
                        <button type="submit" class="btn btn-primary">Créer</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
