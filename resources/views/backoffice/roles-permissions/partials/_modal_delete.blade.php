{{-- =========================
DELETE ROLE
========================= --}}
<div class="modal fade" id="delete_role">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <form method="POST" action="#" id="deleteRoleForm">
                @csrf
                @method('DELETE')

                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Supprimer le rôle</h4>
                    <p class="mb-3" id="deleteRoleText">Êtes-vous sûr de vouloir supprimer ce rôle ?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Annuler</a>
                        <button type="submit" class="btn btn-primary">Oui, supprimer</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


{{-- =========================
DELETE PERMISSION
========================= --}}
<div class="modal fade" id="delete_permission">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <form method="POST" action="#" id="deletePermissionForm">
                @csrf
                @method('DELETE')

                <div class="modal-body text-center">
                    <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                        <i class="ti ti-trash-x fs-26"></i>
                    </span>
                    <h4 class="mb-1">Supprimer la permission</h4>
                    <p class="mb-3" id="deletePermissionText">Êtes-vous sûr de vouloir supprimer cette permission ?</p>
                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Annuler</a>
                        <button type="submit" class="btn btn-primary">Oui, supprimer</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
