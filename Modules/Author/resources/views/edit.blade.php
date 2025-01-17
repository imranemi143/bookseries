{{-- @extends('book::layouts.master') --}}
@extends('masterLayout.master')

@push('content')
    <!-- Dynamic Breadcrumb -->
    <div class="row">
        <!-- Basic Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

                <li class="breadcrumb-item">
                    <a href="{{ url('authors') }}">Authors</a>
                </li>

                <li class="breadcrumb-item active text-primary">Edit Author</li>
            </ol>
        </nav>
    </div>
    <!--/ Dynamic Breadcrumb -->

    <!--Form -->
    <div class="row">
        <div class="col-xl-12">
            <!-- HTML5 Inputs -->
            <div class="card mb-4">
                <div class="card-header col-md-12 d-flex justify-content-between align-items-center">
                    <h5 class="card-header text-primary">
                        <li class="fa fa-align-justify"></li> Edit Author
                    </h5>
                </div>
                <div class="menu-divider mb-4"></div>
                <div class="card-body mt-0">
                    <form action="{{ url('update-author', $author->id) }}" method="POST" class="card-body">
                        @csrf

                        {{-- Name --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="name">Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" id="alignment-name" class="form-control"
                                    value="{{ old('name', $author->name) }}" />
                            </div>
                        </div>

                        {{-- Slug --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="slug">Slug</label>
                            <div class="col-sm-8">
                                <input type="text" name="slug" id="slug" class="form-control"
                                    value="{{ old('slug', $author->slug) }}" />
                            </div>
                        </div>

                        {{-- Description --}}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="description">Description</label>
                            <div class="col-sm-8">
                                <textarea type="text" name="description" id="editor" class="editor form-control">{!! $author->description !!}</textarea>
                            </div>
                        </div>

                        {{-- Status --}}
                        {{-- <div class="row mb-3">
                            <label for="defaultSelect" class="col-sm-2 col-form-label text-sm-end">Availibility Status</label>
                            <div class="col-sm-8">
                                <select id="defaultSelect" name="status" class="form-select">
                                    <option>Select status</option>
                                    @foreach ($statuses as $key => $value)
                                        <option value="{{ $key }}"
                                            {{ old('status', $book->status) == $key ? 'selected' : ' ' }}>
                                            {{ $value }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        {{-- Save button --}}
                        <hr class="my-4 mx-n4">
                        <div class="card-footer col-md-12 d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('scripts')
    <script src="{{ asset('assets/editors/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush
