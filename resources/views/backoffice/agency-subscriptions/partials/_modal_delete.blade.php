<div class="modal fade" id="delete_subscription" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="mb-0">Supprimer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>

            <form method="POST" id="deleteSubscriptionForm" action="#">
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    <p class="mb-2">
                        Voulez-vous vraiment supprimer l’abonnement de :
                    </p>
                    <div class="p-2 rounded border bg-light">
                        <div class="fw-semibold" id="deleteAgencyName">Agence</div>
                        <div class="text-muted small" id="deletePlanName">Plan</div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </div>

            </form>

        </div>
    </div>
</div>
