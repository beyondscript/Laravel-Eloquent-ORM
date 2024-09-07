@extends('layouts.app')
@section('content')
    @include('partials.header')
    <div class="main">
        <h2 class="main_head">Add data in 2nd table</h2>
        <form class="main_form" method="post" action="{{ route('add3') }}">
            @csrf
            <div class="form_section">
                <label class="lebel_section" for="text2">Text <span style="color:red">*</span></label>
                <input class="input_section @error('text2') is-invalid @enderror" id="text2" type="text" name="text2" placeholder="Please enter the text" value="{{ old('text2') }}" autofocus>
                @error('text2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form_section">
                <label class="lebel_section" for="ti_id">Select text <span style="color:red">*</span></label>
                <select class="input_section @error('ti_id') is-invalid @enderror" id="ti_id" name="ti_id">
                    <option value="" selected disabled>None Selected</option>
                    @foreach($first_tables as $first_table)
                        <option value="{{ $first_table -> id }}">{{ $first_table -> text }}</option>
                    @endforeach
                </select>
                @error('ti_id')
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
            <a class="link" href="{{ route('welcome') }}">Add data in 1st table</a>
        </div>
    </div>
    @include('partials.footer')
@endsection