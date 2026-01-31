{{-- =========================
EDIT ROLE
========================= --}}
<div class="modal fade" id="edit_role">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <form method="POST" action="#" id="editRoleForm" class="needs-validation" novalidate>
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="mb-0">Modifier un rôle</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>

                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Rôle <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="editRoleName" class="form-control" required>
                        <div class="invalid-feedback">Veuillez saisir le nom du rôle.</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Permissions</label>
                        <select name="permissions[]" id="editRolePermissions" class="form-control" multiple>
                            @foreach($allPermissions as $perm)
                                <option value="{{ $perm->id }}">{{ $perm->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <div class="form-check form-check-md form-switch me-2">
                            <label class="form-check-label form-label mt-0 mb-0">
                                <input class="form-check-input form-label me-2" type="checkbox" role="switch" checked="">
                                Statut
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Annuler</a>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


{{-- =========================
EDIT PERMISSION
========================= --}}
<div class="modal fade" id="edit_permission">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <form method="POST" action="#" id="editPermissionForm" class="needs-validation" novalidate>
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="mb-0">Modifier une permission</h5>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>

                <div class="modal-body pb-1">
                    <div class="mb-3">
                        <label class="form-label">Permission <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="editPermissionName" class="form-control" required>
                        <div class="invalid-feedback">Veuillez saisir le nom de la permission.</div>
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Annuler</a>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
