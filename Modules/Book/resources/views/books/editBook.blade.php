{{-- @extends('book::layouts.master') --}}
@extends('masterLayout.master')

@push('content')

    <!-- Breadcrumb -->
    @include('layouts.breadcrumb')

    <!--Form -->
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header col-md-12 d-flex justify-content-between align-items-center">
                    <h5 class="card-header text-primary">Update Book</h5>
                </div>
                <hr class="my-4 mx-n4">
                <form action="{{ url('updatebook', $book->id) }}" method="POST" class="card-body">
                    @csrf
                    
                    {{-- Title --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-sm-end" for="alignment-username">Title</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" id="alignment-username" class="form-control" value="{{ old('title', $book->title) }}" />
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-sm-end" for="alignment-username">Description</label>
                        <div class="col-sm-8">
                            <textarea type="text" name="description" id="editor" class="editor form-control">{{ old('description', $book->description) }}</textarea>
                        </div>
                    </div>

                    {{-- Publisher --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-sm-end" for="alignment-username">Publisher</label>
                        <div class="col-sm-8">
                            <input type="text" name="publisher" id="alignment-username" class="form-control" value="{{ old('publisher', $book->publisher) }}" />
                        </div>
                    </div>

                    {{-- Language --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-sm-end" for="alignment-username">Language</label>
                        <div class="col-sm-8">
                            <input type="text" name="language" id="alignment-username" class="form-control" value="{{ old('language', $book->language) }}" />
                        </div>
                    </div>

                    {{-- Order --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-sm-end" for="alignment-username">Order No.</label>
                        <div class="col-sm-8">
                            <input type="text" name="orderNo" id="alignment-username" class="form-control" value="{{ old('orderNo', $book->orderNo) }}" />
                        </div>
                    </div>

                    {{-- Status --}}
                    <div class="row mb-3">
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
                    </div>

                    {{-- Price --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-sm-end" for="alignment-username">Price</label>
                        <div class="col-sm-8">
                            <input type="text" name="price" id="alignment-username" class="form-control" value="{{ old('price', $book->price) }}" />
                        </div>
                    </div>

                    {{-- Online Amount --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-sm-end" for="alignment-username">Online Amount</label>
                        <div class="col-sm-8">
                            <input type="text" name="online_amount" id="alignment-username" class="form-control" value="{{ old('online_amount', $book->online_amount) }}" />
                        </div>
                    </div>

                    {{-- Shipping Charges --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-sm-end" for="alignment-username">Shipping Charges</label>
                        <div class="col-sm-8">
                            <input type="text" name="ship_amount" id="alignment-username" class="form-control" value="{{ old('ship_amount', $book->ship_amount) }}" />
                        </div>
                    </div>

                    {{-- Author --}}
                    <div class="row mb-3">
                        <label for="defaultSelect" class="col-sm-2 col-form-label text-sm-end">Author Name</label>
                        <div class="col-sm-8">
                            <select id="defaultSelect" name="author_id" class="form-select">
                                @foreach ($authors as $author)
                                    <option value="{{ $author->id }}"
                                        {{ old('author_id', $book->author_id) == $author->id ? 'selected' : ' ' }}>
                                        {{ $author->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- Add book button --}}
                    <hr class="my-4 mx-n4">
                    <div class="card-footer col-md-12 d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary">Update Book</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endpush

@push('scripts')
    <script src="{{ asset('assets/editors/ckeditor/ckeditor.js') }}"></script>
    <script>CKEDITOR.replace('editor');</script>
@endpush