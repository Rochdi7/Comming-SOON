<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ======================
     | BOOTSTRAP VALIDATION
     ====================== */
    const forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    /* ======================
     | EDIT ROLE MODAL
     ====================== */
    const editRoleModal = document.getElementById('edit_role');
    if (editRoleModal) {
        editRoleModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const action = button ? button.getAttribute('data-edit-action') : null;
            const name   = button ? button.getAttribute('data-role-name') : null;

            let permissions = [];
            try {
                permissions = button ? JSON.parse(button.getAttribute('data-role-permissions') || '[]') : [];
            } catch (e) {
                permissions = [];
            }

            const form   = document.getElementById('editRoleForm');
            const input  = document.getElementById('editRoleName');
            const select = document.getElementById('editRolePermissions');

            if (action && form) form.action = action;
            if (input) input.value = name || '';

            if (select) {
                Array.prototype.slice.call(select.options).forEach(function(opt){
                    opt.selected = false;
                });

                permissions.forEach(function(id){
                    Array.prototype.slice.call(select.options).forEach(function(opt){
                        if (String(opt.value) === String(id)) {
                            opt.selected = true;
                        }
                    });
                });
            }
        });
    }

    /* ======================
     | DELETE ROLE MODAL
     ====================== */
    const deleteRoleModal = document.getElementById('delete_role');
    if (deleteRoleModal) {
        deleteRoleModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const action = button ? button.getAttribute('data-delete-action') : null;
            const name   = button ? button.getAttribute('data-delete-name') : null;

            const form = document.getElementById('deleteRoleForm');
            const text = document.getElementById('deleteRoleText');

            if (action && form) form.action = action;
            if (text) text.textContent = name
                ? "Êtes-vous sûr de vouloir supprimer le rôle « " + name + " » ?"
                : "Êtes-vous sûr de vouloir supprimer ce rôle ?";
        });
    }

    /* ======================
     | EDIT PERMISSION MODAL
     ====================== */
    const editPermissionModal = document.getElementById('edit_permission');
    if (editPermissionModal) {
        editPermissionModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const action = button ? button.getAttribute('data-edit-action') : null;
            const name   = button ? button.getAttribute('data-permission-name') : null;

            const form  = document.getElementById('editPermissionForm');
            const input = document.getElementById('editPermissionName');

            if (action && form) form.action = action;
            if (input) input.value = name || '';
        });
    }

    /* ======================
     | DELETE PERMISSION MODAL
     ====================== */
    const deletePermissionModal = document.getElementById('delete_permission');
    if (deletePermissionModal) {
        deletePermissionModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const action = button ? button.getAttribute('data-delete-action') : null;
            const name   = button ? button.getAttribute('data-delete-name') : null;

            const form = document.getElementById('deletePermissionForm');
            const text = document.getElementById('deletePermissionText');

            if (action && form) form.action = action;
            if (text) text.textContent = name
                ? "Êtes-vous sûr de vouloir supprimer la permission « " + name + " » ?"
                : "Êtes-vous sûr de vouloir supprimer cette permission ?";
        });
    }

});
</script>
