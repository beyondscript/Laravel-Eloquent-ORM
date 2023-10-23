@extends('layouts.app')
@section('content')
    @include('partials.header')
    <div class="main">
        <h2 class="main_head">Update data of {{ $update -> text }}</h2>
        <form class="main_form" method="post" action="{{ route('update2') }}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <input type="hidden" name="id" value="{{ $update->id }}">
            <div class="form_section">
                <label class="lebel_section" for="text">Text <span style="color:red">*</span></label>
                <input class="input_section @error('text') is-invalid @enderror" id="text" type="text" name="text" value="{{ $update -> text }}" placeholder="Please enter the text">
                @error('text')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form_section">
                <label class="lebel_section" for="number">Number <span style="color:red">*</span></label>
                <input class="input_section @error('number') is-invalid @enderror" id="number" type="text" name="number" value="{{ $update -> number }}" placeholder="Please enter the number">
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
                <button class="button" type="submit">Update</button>
                <a class="link" style="width: 100px; margin-top: 10px;" href="{{route('view')}}">Cancel</a>
            </div>
        </form>
    </div>
    @include('partials.footer')
@endsection