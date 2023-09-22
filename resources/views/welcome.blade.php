@extends('layouts.app')
@section('content')
    @include('partials.header')
    <div class="main">
        <h2 class="main_head">Add data in 1st table</h2>
        <form class="main_form" method="post" action="{{ route('add') }}" enctype="multipart/form-data">
            @csrf
            <div class="form_section">
                <label class="lebel_section" for="text">Text <span style="color:red">*</span></label>
                <input class="input_section @error('text') is-invalid @enderror" id="text" type="text" name="text" placeholder="Please enter the text" value="{{ old('text') }}" autofocus>
                @error('text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form_section">
                <label class="lebel_section" for="number">Number <span style="color:red">*</span></label>
                <input class="input_section @error('number') is-invalid @enderror" id="number" type="text" name="number" placeholder="Please enter the number" value="{{ old('number') }}">
                @error('number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form_section">
                <label class="lebel_section" for="image">Image</label>
                <div class="file_input_section">
                    <input class="input_section_2 @error('image') is-invalid @enderror" id="image" type="file" name="image" tabindex="-1">
                </div>
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div>
                <button class="button" type="submit">Add</button>
            </div>
        </form>
        <div class="link_section">
            <a class="link" href="{{ route('view') }}">View 1st table datas</a>
        </div>
        <div class="update_link_section">
            <a class="link" href="{{ route('view2') }}">View 2nd table datas</a>
        </div>
        <div class="update_link_section">
            <a class="link" href="{{ route('add2') }}">Add data in 2nd table</a>
        </div>
    </div>
    @include('partials.footer')
@endsection