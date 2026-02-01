{{-- Add User --}}
<div class="modal fade" id="add_user">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="mb-0">Créer un utilisateur</h5>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </button>
            </div>

            <form id="addUserForm"
                  action="{{ route('backoffice.users.store') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  class="needs-validation"
                  novalidate>
                @csrf

                <div class="modal-body pb-1">
                    <div class="row">

                           <div class="mb-3">
        <label class="form-label">Image</label>

        <div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">
            <div id="addUserAvatarFrame"
                 class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames"
                 style="overflow:hidden;border-radius:8px;">
                <i id="addUserAvatarIcon" class="ti ti-photo-up text-gray-4 fs-24"></i>
                <img id="addUserAvatarImg"
                     src=""
                     alt="img"
                     style="display:none;width:100%;height:100%;object-fit:cover;">
            </div>

            <div class="profile-upload">
                <div class="profile-uploader d-flex align-items-center">
                    <div class="drag-upload-btn btn btn-md btn-dark">
                        <i class="ti ti-photo-up fs-14"></i>
                        Upload
                        <input type="file"
                               name="avatar"
                               id="addUserAvatarInput"
                               class="form-control image-sign"
                               accept="image/*">
                    </div>

                    <button type="button" class="btn btn-md btn-light ms-2" id="addUserAvatarClearBtn">
                        Retirer
                    </button>
                </div>

                <div class="mt-2">
                    <p class="fs-14 mb-0">Upload Image size 180*180, within 5MB</p>
                </div>

                @error('avatar')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>


                        {{-- NAME --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nom <span class="text-danger">*</span></label>
                                <input type="text"
                                       name="name"
                                       value="{{ old('name') }}"
                                       class="form-control @error('name') is-invalid @enderror"
                                       required
                                       maxlength="150">
                                <div class="invalid-feedback">Veuillez saisir le nom.</div>
                                @error('name')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- EMAIL --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       class="form-control @error('email') is-invalid @enderror"
                                       required
                                       maxlength="150">
                                <div class="invalid-feedback">Veuillez saisir un email valide.</div>
                                @error('email')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- PASSWORD --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Mot de passe <span class="text-danger">*</span></label>
                                <input type="password"
                                       name="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       required
                                       minlength="6">
                                <div class="invalid-feedback">Veuillez saisir un mot de passe (min 6).</div>
                                @error('password')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- PHONE --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="text"
                                       name="phone"
                                       value="{{ old('phone') }}"
                                       class="form-control @error('phone') is-invalid @enderror"
                                       maxlength="50">
                                @error('phone')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- STATUS (same "select" style as your example) --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Statut <span class="text-danger">*</span></label>
                                <select name="status"
                                        class="select @error('status') is-invalid @enderror"
                                        required>
                                    <option value="">Select</option>
                                    <option value="active"  {{ old('status','active') === 'active' ? 'selected' : '' }}>Actif</option>
                                    <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactif</option>
                                    <option value="blocked" {{ old('status') === 'blocked' ? 'selected' : '' }}>Bloqué</option>
                                </select>
                                <div class="invalid-feedback">Veuillez sélectionner un statut.</div>
                                @error('status')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- AGENCY (super-admin only) --}}
                        @auth('backoffice')
                            @if (auth('backoffice')->user()->hasRole('super-admin'))
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Agence <span class="text-danger">*</span></label>
                                        <select name="agency_id"
                                                class="select @error('agency_id') is-invalid @enderror"
                                                required>
                                            <option value="">Select</option>
                                            @forelse($agencies ?? [] as $agency)
                                                <option value="{{ $agency->id }}" {{ old('agency_id') == $agency->id ? 'selected' : '' }}>
                                                    {{ $agency->name }}
                                                </option>
                                            @empty
                                            @endforelse
                                        </select>
                                        <div class="invalid-feedback">Veuillez sélectionner une agence.</div>
                                        @error('agency_id')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                        @endauth

                    </div>
                </div>

                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create New</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
{{-- /Add User --}}
