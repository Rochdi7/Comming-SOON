<script>
document.addEventListener('DOMContentLoaded', function() {

    /* ======================
     | BOOTSTRAP VALIDATION
     ====================== */
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach((form) => {
        form.addEventListener('submit', (event) => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    /* ======================
     | CREATE USER MODAL (already in your previous code)
     | (keep your create logic if you want — no change required here)
     ====================== */

    /* ======================
     | EDIT USER MODAL + AVATAR LIKE TEMPLATE
     ====================== */
    const editModal = document.getElementById('edit_user');

    const editAvatarInput = document.getElementById('editUserAvatarInput');
    const editAvatarImg   = document.getElementById('editUserAvatarImg');
    const editAvatarIcon  = document.getElementById('editUserAvatarIcon');
    const editAvatarTrash = document.getElementById('editUserAvatarTrash');
    const editRemoveInput = document.getElementById('editUserRemoveAvatar');

    const setEditAvatar = (src) => {
        if (!editAvatarImg || !editAvatarIcon || !editAvatarTrash || !editRemoveInput) return;

        if (src) {
            editAvatarImg.src = src;
            editAvatarImg.style.display = '';
            editAvatarIcon.style.display = 'none';
            editAvatarTrash.style.display = '';
            editRemoveInput.value = '0';
        } else {
            editAvatarImg.src = '';
            editAvatarImg.style.display = 'none';
            editAvatarIcon.style.display = '';
            editAvatarTrash.style.display = 'none';
            editRemoveInput.value = '0';
        }
    };

    const setVal = (id, val) => {
        const el = document.getElementById(id);
        if (el !== null) el.value = val ?? '';
    };

    if (editModal) {
        editModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;

            const action = button ? button.getAttribute('data-edit-action') : null;

            const data = {
                name: button?.getAttribute('data-user-name') || '',
                email: button?.getAttribute('data-user-email') || '',
                phone: button?.getAttribute('data-user-phone') || '',
                status: button?.getAttribute('data-user-status') || 'active',
                agency_id: button?.getAttribute('data-user-agency') || '',
                avatar: button?.getAttribute('data-user-avatar') || '',
            };

            const form = document.getElementById('editUserForm');
            if (action && form) form.action = action;

            setVal('editUserName', data.name);
            setVal('editUserEmail', data.email);
            setVal('editUserPhone', data.phone);
            setVal('editUserStatus', data.status);
            setVal('editUserAgency', data.agency_id);

            // reset validation
            if (form) form.classList.remove('was-validated');

            // reset remove flag + input file
            if (editRemoveInput) editRemoveInput.value = '0';
            if (editAvatarInput) editAvatarInput.value = '';

            // set avatar from DB
            setEditAvatar(data.avatar);
        });

        editModal.addEventListener('hidden.bs.modal', function() {
            const form = document.getElementById('editUserForm');
            if (form) form.classList.remove('was-validated');

            if (editAvatarInput) editAvatarInput.value = '';
            if (editRemoveInput) editRemoveInput.value = '0';
        });
    }

    // Upload new avatar -> preview
    if (editAvatarInput) {
        editAvatarInput.addEventListener('change', function() {
            const file = this.files && this.files[0] ? this.files[0] : null;

            // If user selects a file, cancel "remove"
            if (editRemoveInput) editRemoveInput.value = '0';

            if (!file) return;

            const url = URL.createObjectURL(file);
            setEditAvatar(url);
            if (editAvatarImg) {
                editAvatarImg.onload = () => URL.revokeObjectURL(url);
            }
        });
    }

    // Trash badge -> mark remove_avatar = 1 + hide preview
    if (editAvatarTrash) {
        editAvatarTrash.addEventListener('click', function() {
            if (editRemoveInput) editRemoveInput.value = '1';

            if (editAvatarInput) editAvatarInput.value = ''; // remove selected file
            setEditAvatar(''); // show icon, hide img
        });
    }

    /* ======================
     | DELETE USER MODAL
     ====================== */
    const deleteModal = document.getElementById('delete_user');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;

            const action = button ? button.getAttribute('data-delete-action') : null;
            const name = button ? button.getAttribute('data-user-name') : '—';

            const form = document.getElementById('deleteUserForm');
            const nameHolder = document.getElementById('deleteUserName');

            if (action && form) form.action = action;
            if (nameHolder) nameHolder.textContent = name || '—';
        });
    }

    /* ======================
     | OPEN CREATE MODAL ON ERRORS
     ====================== */
    @if ($errors->any())
        const addEl = document.getElementById('add_user');
        if (addEl) new bootstrap.Modal(addEl).show();
    @endif

});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('addUserAvatarInput');
    const img   = document.getElementById('addUserAvatarImg');
    const icon  = document.getElementById('addUserAvatarIcon');
    const clear = document.getElementById('addUserAvatarClearBtn');

    const reset = () => {
        if (input) input.value = '';
        if (img) { img.src = ''; img.style.display = 'none'; }
        if (icon) icon.style.display = '';
    };

    if (input) {
        input.addEventListener('change', function () {
            const file = this.files && this.files[0] ? this.files[0] : null;
            if (!file) return reset();

            const url = URL.createObjectURL(file);
            if (img) {
                img.src = url;
                img.style.display = '';
                img.onload = () => URL.revokeObjectURL(url);
            }
            if (icon) icon.style.display = 'none';
        });
    }

    if (clear) clear.addEventListener('click', reset);
});
</script>
