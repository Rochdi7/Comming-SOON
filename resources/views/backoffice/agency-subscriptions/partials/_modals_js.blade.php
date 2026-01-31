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
     | HELPERS
     ====================== */
    const setVal = (id, val) => {
        const el = document.getElementById(id);
        if (!el) return;
        el.value = (val ?? '');
    };

    // Select2/Choices helper (your theme "select" plugin)
    const setSelectVal = (id, val) => {
        const el = document.getElementById(id);
        if (!el) return;

        el.value = (val ?? '');

        // If your theme uses jQuery select2
        if (window.jQuery && jQuery(el).hasClass('select2-hidden-accessible')) {
            jQuery(el).val(el.value).trigger('change');
        } else {
            // fallback: native change
            el.dispatchEvent(new Event('change', { bubbles: true }));
        }
    };

    // Convert "YYYY-MM-DD" => "dd/mm/yyyy" for datetimepicker input text
    const ymdToDmy = (ymd) => {
        if (!ymd) return '';
        const parts = String(ymd).split('-'); // [YYYY,MM,DD]
        if (parts.length !== 3) return '';
        return `${parts[2]}/${parts[1]}/${parts[0]}`;
    };

    // Fill a datetimepicker text input
    const setDatePicker = (id, ymd) => {
        const el = document.getElementById(id);
        if (!el) return;
        el.value = ymdToDmy(ymd);

        // if your datetimepicker plugin exposes reinit, keep simple: trigger input/change
        el.dispatchEvent(new Event('input', { bubbles: true }));
        el.dispatchEvent(new Event('change', { bubbles: true }));
    };

    /* ======================
     | EDIT SUBSCRIPTION MODAL
     ====================== */
    const editModal = document.getElementById('edit_subscription');
    if (editModal) {
        editModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;

            const action = button ? button.getAttribute('data-edit-action') : null;

            const data = {
                agency_id: button?.getAttribute('data-subscription-agency-id') || '',
                plan_name: button?.getAttribute('data-subscription-plan-name') || '',
                is_active: button?.getAttribute('data-subscription-is-active') ?? '1',
                billing_cycle: button?.getAttribute('data-subscription-billing-cycle') || '',
                provider: button?.getAttribute('data-subscription-provider') || 'manual',
                provider_subscription_id: button?.getAttribute('data-subscription-provider-subscription-id') || '',
                starts_at: button?.getAttribute('data-subscription-starts-at') || '',
                ends_at: button?.getAttribute('data-subscription-ends-at') || '',
                trial_ends_at: button?.getAttribute('data-subscription-trial-ends-at') || '',
                notes: button?.getAttribute('data-subscription-notes') || '',
            };

            const form = document.getElementById('editSubscriptionForm');
            if (form && action) form.action = action;

            // Fill fields
            setSelectVal('editAgencyId', data.agency_id);
            setVal('editPlanName', data.plan_name);
            setSelectVal('editIsActive', String(data.is_active));
            setSelectVal('editBillingCycle', data.billing_cycle);
            setSelectVal('editProvider', data.provider);
            setVal('editProviderSubscriptionId', data.provider_subscription_id);

            setDatePicker('editStartsAt', data.starts_at);
            setDatePicker('editEndsAt', data.ends_at);
            setDatePicker('editTrialEndsAt', data.trial_ends_at);

            const notesEl = document.getElementById('editNotes');
            if (notesEl) notesEl.value = data.notes;

            // reset validation UI
            if (form) form.classList.remove('was-validated');
        });
    }

});
</script>
