@extends('backend.layouts.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="card-title">Create Banners</h4>
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('banners.index') }}"><i class="icon-arrow-left"></i> Back</a>
                </div>

                <div class="row">
                    <div class="col-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>

                <form class="forms-sample" action="{{ route('banners.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" value="{{ old('title') }}" name="title" class="form-control" id="title" placeholder="Title">
                    </div>

                    <div class="input-group">
                       <span class="input-group-btn mr-3">
                         <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose Photo
                         </a>
                       </span>
                        <input id="thumbnail" class="form-control" type="text" name="photo">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="4">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleSelectGender">Condition <span class="text-danger">*</span></label>
                        <select class="form-control" id="exampleSelectGender" name="condition">
                            <option value="banner" {{ old('condition') == 'banner' ? 'selected' : '' }}>Banner</option>
                            <option value="promo" {{ old('condition') == 'promo' ? 'selected' : '' }}>Promote</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="exampleSelectGender" name="status">
                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive
                            </option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
@endsection