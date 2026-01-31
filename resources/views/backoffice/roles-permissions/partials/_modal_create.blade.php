{{-- =========================
ADD ROLE
========================= --}}
<div class="modal fade" id="add_role">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <form method="POST" action="{{ route('backoffice.roles.store') }}" class="needs-validation" novalidate>
                @csrf

                <div class="modal-header">
                    <h5 class="mb-0">Ajouter un rôle</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>

                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Rôle <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                        <div class="invalid-feedback">Veuillez saisir le nom du rôle.</div>
                        @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Permissions</label>
                        <select name="permissions[]" class="form-control" multiple>
                            @foreach($allPermissions as $perm)
                                <option value="{{ $perm->id }}"
                                    @if(collect(old('permissions', []))->contains($perm->id)) selected @endif>
                                    {{ $perm->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('permissions')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                        @error('permissions.*')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
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


{{-- =========================
ADD PERMISSION
========================= --}}
<div class="modal fade" id="add_permission">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <form method="POST" action="{{ route('backoffice.permissions.store') }}" class="needs-validation" novalidate>
                @csrf

                <div class="modal-header">
                    <h5 class="mb-0">Ajouter une permission</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>

                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Permission <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                        <div class="invalid-feedback">Veuillez saisir le nom de la permission.</div>
                        @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
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
