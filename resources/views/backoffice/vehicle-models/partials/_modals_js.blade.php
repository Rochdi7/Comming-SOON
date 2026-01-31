<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ======================
     | EDIT MODEL MODAL
     ====================== */
    const editModal = document.getElementById('edit_model');
    if (editModal) {
        editModal.addEventListener('show.bs.modal', function (event) {

            const button = event.relatedTarget;

            const action  = button ? button.getAttribute('data-edit-action') : null;
            const name    = button ? button.getAttribute('data-model-name') : null;
            const brandId = button ? button.getAttribute('data-model-brand-id') : null;

            const form       = document.getElementById('editModelForm');
            const nameInput  = document.getElementById('editModelName');
            const brandInput = document.getElementById('editModelBrand');

            if (action) form.action = action;
            if (nameInput) nameInput.value = name ?? '';

            if (brandInput) {
                brandInput.value = brandId ?? '';
            }
        });
    }

    /* ======================
     | DELETE MODEL MODAL
     ====================== */
    const deleteModal = document.getElementById('delete_model');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function (event) {

            const button = event.relatedTarget;
            const action = button ? button.getAttribute('data-delete-action') : null;

            const form = document.getElementById('deleteModelForm');
            if (form && action) form.action = action;
        });
    }

});
</script>
<script>
(() => {
    'use strict';

    const forms = document.querySelectorAll('.needs-validation');

    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();
</script>
