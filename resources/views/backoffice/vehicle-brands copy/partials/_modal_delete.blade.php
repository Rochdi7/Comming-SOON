<!-- Delete Brand -->
<div class="modal fade" id="delete_brand">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">

            <div class="modal-body text-center">
                <span class="avatar avatar-lg bg-transparent-danger rounded-circle text-danger mb-3">
                    <i class="ti ti-trash-x fs-26"></i>
                </span>

                <h4 class="mb-1">Delete Brand</h4>
                <p class="mb-3">
                    Are you sure you want to delete this brand?
                </p>

                <form id="deleteBrandForm" method="POST">
                    @csrf
                    @method('DELETE')

                    <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);"
                           class="btn btn-light me-3"
                           data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Yes, Delete
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- /Delete Brand -->
