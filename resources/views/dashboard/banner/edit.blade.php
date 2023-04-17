@extends('dashboard.layout.app')
@section('title', 'Banner Edit')
@section('content')
    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <ion-icon name="home-outline"></ion-icon>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Banner
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Banner</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <form action="{{ route('admin.banner.update') }}" method="post" class="row g-3 needs-validation" enctype="multipart/form-data">
                            @csrf @method('put')
                            <div class="col-md-12">
                                <label for="banner_text" class="form-label required">Text </label>
                                <textarea name="banner_text" id="summernote" class="form-control" required>@setting('banner_text') </textarea>
                                @if ($errors->has('banner_text'))
                                    <div class="alert alert-danger">{{ $errors->first('banner_text') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <img src="{{ imagePath('banner', Setting('banner_image')) }}" alt="" height="200px">
                            </div>

                            <div class="col-md-4">
                                <label for="banner_image" class="form-label">Image 667x630</label>
                                <input type="file" class="form-control" name="banner_image">
                                @if ($errors->has('banner_image'))
                                    <div class="alert alert-danger">{{ $errors->first('banner_image') }}</div>
                                @endif
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
    @push('custom_scripts')
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    // tabsize: 5,
                    height: 400
                });
            });
        </script>
    @endpush
@endsection
