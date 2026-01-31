<script>
document.addEventListener('DOMContentLoaded', function () {

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
     | EDIT AGENCY MODAL
     ====================== */
    const editModal = document.getElementById('edit_agency');
    if (editModal) {
        editModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const action = button ? button.getAttribute('data-edit-action') : null;

            const data = {
                name: button?.getAttribute('data-agency-name') || '',
                legal_name: button?.getAttribute('data-agency-legal-name') || '',
                email: button?.getAttribute('data-agency-email') || '',
                phone: button?.getAttribute('data-agency-phone') || '',
                website: button?.getAttribute('data-agency-website') || '',
                default_currency: button?.getAttribute('data-agency-currency') || 'MAD',
                address: button?.getAttribute('data-agency-address') || '',
                city: button?.getAttribute('data-agency-city') || '',
                country: button?.getAttribute('data-agency-country') || '',
                tp_number: button?.getAttribute('data-agency-tp') || '',
                rc_number: button?.getAttribute('data-agency-rc') || '',
                if_number: button?.getAttribute('data-agency-if') || '',
                ice_number: button?.getAttribute('data-agency-ice') || '',
                vat_number: button?.getAttribute('data-agency-vat') || '',
                creation_date: button?.getAttribute('data-agency-creation-date') || '',
                description: button?.getAttribute('data-agency-description') || '',
            };

            const form = document.getElementById('editAgencyForm');
            if (action && form) form.action = action;

            // Fill inputs
            const setVal = (id, val) => {
                const el = document.getElementById(id);
                if (el !== null) el.value = val ?? '';
            };

            setVal('editAgencyName', data.name);
            setVal('editAgencyLegalName', data.legal_name);
            setVal('editAgencyEmail', data.email);
            setVal('editAgencyPhone', data.phone);
            setVal('editAgencyWebsite', data.website);
            setVal('editAgencyCurrency', data.default_currency);
            setVal('editAgencyCity', data.city);
            setVal('editAgencyCountry', data.country);
            setVal('editAgencyTp', data.tp_number);
            setVal('editAgencyRc', data.rc_number);
            setVal('editAgencyIf', data.if_number);
            setVal('editAgencyIce', data.ice_number);
            setVal('editAgencyVat', data.vat_number);
            setVal('editAgencyCreationDate', data.creation_date);

            // Textareas
            const addressEl = document.getElementById('editAgencyAddress');
            if (addressEl) addressEl.value = data.address;

            const descEl = document.getElementById('editAgencyDescription');
            if (descEl) descEl.value = data.description;

            // reset validation state
            if (form) form.classList.remove('was-validated');
        });
    }

    /* ======================
     | DELETE AGENCY MODAL
     ====================== */
    const deleteModal = document.getElementById('delete_agency');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const action = button ? button.getAttribute('data-delete-action') : null;
            const name   = button ? button.getAttribute('data-agency-name') : '—';

            const form = document.getElementById('deleteAgencyForm');
            const nameHolder = document.getElementById('deleteAgencyName');

            if (action && form) form.action = action;
            if (nameHolder) nameHolder.textContent = name || '—';
        });
    }

    /* ======================
     | OPEN CREATE MODAL ON ERRORS
     ====================== */
    @if ($errors->any())
        const addEl = document.getElementById('add_agency');
        if (addEl) new bootstrap.Modal(addEl).show();
    @endif

});
</script>
