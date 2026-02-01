{{-- Edit User --}}
<div class="modal fade" id="edit_user">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="mb-0">Modifier un utilisateur</h5>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </button>
            </div>

            <form id="editUserForm"
                  action="#"
                  method="POST"
                  enctype="multipart/form-data"
                  class="needs-validation"
                  novalidate>
                @csrf
                @method('PUT')

                <input type="hidden" name="remove_avatar" id="editUserRemoveAvatar" value="0">

                <div class="modal-body pb-1">
                    <div class="row">

                        {{-- IMAGE (exact like template) --}}
                        <div class="mb-3">
                            <label class="form-label">Image</label>

                            <div class="d-flex align-items-center flex-wrap row-gap-3">
                                <div id="editUserAvatarFrame"
                                     class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames p-2 position-relative"
                                     style="overflow:hidden;border-radius:8px;">
                                    {{-- image --}}
                                    <img id="editUserAvatarImg"
                                         src=""
                                         class="img-fluid"
                                         alt="img"
                                         style="display:none;width:100%;height:100%;object-fit:cover;border-radius:6px;">

                                    {{-- icon (when no image) --}}
                                    <i id="editUserAvatarIcon" class="ti ti-photo-up text-gray-4 fs-24"></i>

                                    {{-- trash badge --}}
                                    <a href="javascript:void(0);"
                                       id="editUserAvatarTrash"
                                       class="avatar-badge bg-light text-danger m-1"
                                       style="display:none;">
                                        <i class="ti ti-trash"></i>
                                    </a>
                                </div>

                                <div class="profile-upload">
                                    <div class="profile-uploader d-flex align-items-center">
                                        <div class="drag-upload-btn btn btn-md btn-dark">
                                            <i class="ti ti-photo-up fs-14"></i>
                                            Upload
                                            <input type="file"
                                                   name="avatar"
                                                   id="editUserAvatarInput"
                                                   class="form-control image-sign"
                                                   accept="image/*">
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <p class="fs-14">Upload Image size 180*180, within 5MB</p>
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
                                       id="editUserName"
                                       name="name"
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
                                       id="editUserEmail"
                                       name="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       required
                                       maxlength="150">
                                <div class="invalid-feedback">Veuillez saisir un email valide.</div>
                                @error('email')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- PHONE --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="text"
                                       id="editUserPhone"
                                       name="phone"
                                       class="form-control @error('phone') is-invalid @enderror"
                                       maxlength="50">
                                @error('phone')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- STATUS --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Statut <span class="text-danger">*</span></label>
                                <select id="editUserStatus"
                                        name="status"
                                        class="select @error('status') is-invalid @enderror"
                                        required>
                                    <option value="">Select</option>
                                    <option value="active">Actif</option>
                                    <option value="inactive">Inactif</option>
                                    <option value="blocked">Bloqué</option>
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
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Agence <span class="text-danger">*</span></label>
                                        <select id="editUserAgency"
                                                name="agency_id"
                                                class="select @error('agency_id') is-invalid @enderror"
                                                required>
                                            <option value="">Select</option>
                                            @forelse($agencies ?? [] as $agency)
                                                <option value="{{ $agency->id }}">{{ $agency->name }}</option>
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
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
{{-- /Edit User --}}
