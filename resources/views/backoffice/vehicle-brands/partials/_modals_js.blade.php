<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ======================
     | EDIT BRAND MODAL
     ====================== */
    const editModal = document.getElementById('edit_brand');
    if (editModal) {
        editModal.addEventListener('show.bs.modal', function (event) {

            const button = event.relatedTarget;

            const action = button ? button.getAttribute('data-edit-action') : null;
            const name   = button ? button.getAttribute('data-brand-name') : null;
            const logo   = button ? button.getAttribute('data-brand-logo') : null;

            const form      = document.getElementById('editBrandForm');
            const nameInput = document.getElementById('editBrandName');
            const logoImg   = document.getElementById('editBrandLogo');

            if (form && action) form.action = action;
            if (nameInput) nameInput.value = name ?? '';

            if (logoImg) {
                logoImg.src = (logo && logo !== '')
                    ? logo
                    : "{{ asset('admin_assets/img/brands/toyota.svg') }}";
            }
        });
    }


    /* ======================
     | DELETE BRAND MODAL
     ====================== */
    const deleteModal = document.getElementById('delete_brand');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function (event) {

            const button = event.relatedTarget;
            const action = button ? button.getAttribute('data-delete-action') : null;

            const form = document.getElementById('deleteBrandForm');
            if (form && action) form.action = action;
        });
    }


    /* ======================
     | ADD BRAND IMAGE PREVIEW (SQUARE FIT)
     ====================== */
    const addLogoInput = document.getElementById('addBrandLogoInput');
    const addPreview   = document.getElementById('addBrandPreview');
    const addIcon      = document.getElementById('addBrandIcon');
    const addModalEl   = document.getElementById('add_brand');

    function resetAddPreview() {
        if (addPreview) {
            addPreview.src = '';
            addPreview.style.display = 'none';
        }
        if (addIcon) addIcon.style.display = '';
        if (addLogoInput) addLogoInput.value = '';

        const clientErr = document.getElementById('addBrandLogoClientError');
        if (clientErr) clientErr.style.display = 'none';
    }

    if (addLogoInput && addPreview) {
        addLogoInput.addEventListener('change', function () {
            const file = this.files && this.files[0] ? this.files[0] : null;

            if (!file || !file.type || !file.type.startsWith('image/')) {
                resetAddPreview();
                return;
            }

            const reader = new FileReader();
            reader.onload = function (e) {
                addPreview.src = e.target.result;
                addPreview.style.display = 'block';
                if (addIcon) addIcon.style.display = 'none';
            };
            reader.readAsDataURL(file);
        });
    }

    if (addModalEl) {
        addModalEl.addEventListener('hidden.bs.modal', function () {
            resetAddPreview();

            // remove validation state
            const form = addModalEl.querySelector('form.needs-validation');
            if (form) form.classList.remove('was-validated');
        });
    }


    /* ======================
     | BOOTSTRAP CUSTOM VALIDATION
     ====================== */
    (function () {
        'use strict';

        const forms = document.querySelectorAll('.needs-validation');

        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {

                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }

                form.classList.add('was-validated');

                // ADD modal: show/hide client error for logo only
                const addFileInput = document.getElementById('addBrandLogoInput');
                const clientErr = document.getElementById('addBrandLogoClientError');

                if (addFileInput && clientErr) {
                    if (!addFileInput.value) clientErr.style.display = 'block';
                    else clientErr.style.display = 'none';
                }

            }, false);
        });
    })();


    /* ======================
     | AUTO-OPEN MODAL AFTER SERVER VALIDATION ERRORS
     ====================== */
    const modalToOpen = @json(old('_modal'));

    if (modalToOpen === 'add_brand') {
        const el = document.getElementById('add_brand');
        if (el) {
            const modal = new bootstrap.Modal(el);
            modal.show();

            const form = el.querySelector('form.needs-validation');
            if (form) form.classList.add('was-validated');
        }
    }

    if (modalToOpen === 'edit_brand') {
        const el = document.getElementById('edit_brand');
        if (el) {
            const editAction = @json(old('_edit_action'));
            const oldName    = @json(old('name'));

            const form      = document.getElementById('editBrandForm');
            const nameInput = document.getElementById('editBrandName');

            if (form && editAction) form.action = editAction;
            if (nameInput && oldName !== null) nameInput.value = oldName;

            const modal = new bootstrap.Modal(el);
            modal.show();

            const vForm = el.querySelector('form.needs-validation');
            if (vForm) vForm.classList.add('was-validated');
        }
    }

});
</script>
