@extends('layouts.app')
@section('content')
    @include('partials.header')
    <div class="main">
        <h2 class="main_head">Update data of {{ $update -> text2 }}</h2>
        <form class="main_form" method="post" action="{{ route('update4') }}">
            @method('patch')
            @csrf
            <input type="hidden" name="id" value="{{ $update->id }}">
            <div class="form_section">
                <label class="lebel_section" for="text2">Text <span style="color:red">*</span></label>
                <input class="input_section @error('text2') is-invalid @enderror" id="text2" type="text" name="text2" value="{{ $update -> text2 }}" placeholder="Please enter the text">
                @error('text2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form_section">
                <label class="lebel_section" for="ti_id">Select text <span style="color:red">*</span></label>
                <select class="input_section @error('ti_id') is-invalid @enderror" id="ti_id" name="ti_id">
                    <option value="{{ $update -> testinputs -> id }}" selected hidden>{{ $update -> testinputs -> text }}</option>
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
                <button class="button" type="submit">Update</button>
                <a class="link" style="width: 100px; margin-top: 10px;" href="{{route('view2')}}">Cancel</a>
            </div>
        </form>
    </div>
    @include('partials.footer')
@endsection