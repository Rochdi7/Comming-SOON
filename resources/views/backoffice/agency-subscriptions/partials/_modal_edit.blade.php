<!-- Edit Subscription -->
<div class="modal fade" id="edit_subscription">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="mb-0">Modifier l’abonnement</h5>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x fs-16"></i>
                </button>
            </div>

            <form id="editSubscriptionForm"
                  action="#"
                  method="POST"
                  class="needs-validation"
                  novalidate>
                @csrf
                @method('PUT')

                <div class="modal-body pb-1">
                    <div class="row">

                        {{-- Agence --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Agence <span class="text-danger">*</span></label>
                                <select name="agency_id"
                                        id="editAgencyId"
                                        class="select @error('agency_id') is-invalid @enderror"
                                        required>
                                    <option value="">Sélectionner</option>
                                    @foreach(($agencies ?? []) as $agency)
                                        <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Veuillez sélectionner une agence.</div>
                                @error('agency_id') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Plan --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Plan <span class="text-danger">*</span></label>
                                <input type="text"
                                       name="plan_name"
                                       id="editPlanName"
                                       class="form-control @error('plan_name') is-invalid @enderror"
                                       maxlength="100"
                                       required>
                                <div class="invalid-feedback">Veuillez saisir le plan.</div>
                                @error('plan_name') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Statut --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Statut <span class="text-danger">*</span></label>
                                <select name="is_active"
                                        id="editIsActive"
                                        class="select @error('is_active') is-invalid @enderror"
                                        required>
                                    <option value="1">Actif</option>
                                    <option value="0">Inactif</option>
                                </select>
                                <div class="invalid-feedback">Veuillez sélectionner un statut.</div>
                                @error('is_active') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Billing cycle --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Cycle de facturation</label>
                                <select name="billing_cycle"
                                        id="editBillingCycle"
                                        class="select @error('billing_cycle') is-invalid @enderror">
                                    <option value="">Sélectionner</option>
                                    <option value="monthly">Mensuel</option>
                                    <option value="yearly">Annuel</option>
                                </select>
                                @error('billing_cycle') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Starts at --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Date de début</label>
                                <div class="input-icon-end position-relative">
                                    <input type="text"
                                           name="starts_at"
                                           id="editStartsAt"
                                           class="form-control datetimepicker @error('starts_at') is-invalid @enderror"
                                           placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                                @error('starts_at') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Ends at --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Date de fin</label>
                                <div class="input-icon-end position-relative">
                                    <input type="text"
                                           name="ends_at"
                                           id="editEndsAt"
                                           class="form-control datetimepicker @error('ends_at') is-invalid @enderror"
                                           placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                                @error('ends_at') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Trial ends --}}
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Fin période d’essai</label>
                                <div class="input-icon-end position-relative">
                                    <input type="text"
                                           name="trial_ends_at"
                                           id="editTrialEndsAt"
                                           class="form-control datetimepicker @error('trial_ends_at') is-invalid @enderror"
                                           placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                </div>
                                @error('trial_ends_at') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Provider --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Provider <span class="text-danger">*</span></label>
                                <select name="provider"
                                        id="editProvider"
                                        class="select @error('provider') is-invalid @enderror"
                                        required>
                                    <option value="manual">manual</option>
                                    <option value="stripe">stripe</option>
                                    <option value="paypal">paypal</option>
                                    <option value="other">other</option>
                                </select>
                                <div class="invalid-feedback">Veuillez sélectionner un provider.</div>
                                @error('provider') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Provider subscription id --}}
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Provider subscription id</label>
                                <input type="text"
                                       name="provider_subscription_id"
                                       id="editProviderSubscriptionId"
                                       class="form-control @error('provider_subscription_id') is-invalid @enderror"
                                       maxlength="150">
                                @error('provider_subscription_id') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        {{-- Notes --}}
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Notes</label>
                                <textarea name="notes"
                                          id="editNotes"
                                          class="form-control @error('notes') is-invalid @enderror"
                                          rows="3"
                                          maxlength="2000"></textarea>
                                @error('notes') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

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
<!-- /Edit Subscription -->
