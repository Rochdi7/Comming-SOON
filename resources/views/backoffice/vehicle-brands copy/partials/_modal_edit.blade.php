<!-- Edit Brand -->
<div class="modal fade" id="edit_brand" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">

            <form id="editBrandForm"
                  class="needs-validation"
                  novalidate
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h4 class="mb-0">Edit Brand</h4>
                    <button type="button"
                            class="btn-close custom-btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close">
                        <i class="ti ti-x fs-16"></i>
                    </button>
                </div>

                <div class="modal-body pb-1">

                    {{-- BRAND IMAGE (optional in edit) --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Brand Image
                        </label>

                        <div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">
                            <div class="d-flex align-items-center justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames">
                                <img src="{{ asset('admin_assets/img/brands/toyota.svg') }}"
                                     class="upload-img img-fluid"
                                     alt="brand"
                                     id="editBrandLogo">
                            </div>

                            <div class="profile-upload">
                                <div class="profile-uploader d-flex align-items-center">
                                    <div class="drag-upload-btn btn btn-md btn-dark">
                                        <i class="ti ti-photo-up fs-14"></i>
                                        Upload
                                        <input type="file"
                                               name="logo"
                                               class="form-control image-sign @error('logo') is-invalid @enderror">
                                    </div>
                                </div>

                                {{-- SERVER validation message --}}
                                @error('logo')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="mt-2">
                                    <p class="fs-14 mb-0">
                                        Upload Image size 180*180, within 5MB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- BRAND NAME (required) --}}
                    <div class="mb-3">
                        <label class="form-label">
                            Brand Name <span class="text-danger">*</span>
                        </label>
                        <input type="text"
                               name="name"
                               class="form-control @error('name') is-invalid @enderror"
                               id="editBrandName"
                               value="{{ old('name') }}"
                               required>

                        {{-- CLIENT validation message --}}
                        <div class="invalid-feedback">
                            Please enter a brand name.
                        </div>

                        {{-- SERVER validation message --}}
                        @error('name')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>

                <div class="modal-footer">
                    <div class="d-flex justify-content-center w-100">
                        <a href="javascript:void(0);"
                           class="btn btn-light me-3"
                           data-bs-dismiss="modal">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Save Changes
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>
<!-- /Edit Brand -->
