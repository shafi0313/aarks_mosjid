<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Feature</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form onsubmit="ajaxStore(event, this, 'createModal')" action="{{ route('admin.feature.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="title" class="form-label required">Title </label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                                required />
                            @if ($errors->has('title'))
                                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label for="description" class="form-label required">Description </label>
                            <textarea name="description" id="summernote" required></textarea>
                            @if ($errors->has('description'))
                                <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label for="link_title" class="form-label">Link Title </label>
                            <input type="text" name="link_title" class="form-control" value="{{ old('link_title') }}"/>
                            @if ($errors->has('link_title'))
                                <div class="alert alert-danger">{{ $errors->first('link_title') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label for="link" class="form-label">Link </label>
                            <input type="text" name="link" class="form-control" value="{{ old('link') }}"/>
                            @if ($errors->has('link'))
                                <div class="alert alert-danger">{{ $errors->first('link') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="icon" class="form-label required">Icon </label>
                            <input type="file" name="icon" class="form-control">
                            @if ($errors->has('icon'))
                                <div class="alert alert-danger">{{ $errors->first('icon') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
