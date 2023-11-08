@extends('layouts.app')
@section('content')
    @include('partials.header')
    <div class="main">
        <h2 class="main_head">All data in 1st table</h2>
        <div class="table-container">
            <table id="table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Text</th>
                        <th>Second Table Text</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($views as $view)
                        <tr>
                            <td>{{ $view -> text}}</td>
                            <td>
                                @if($view->secondtestinputs->isEmpty())
                                    No Text
                                @else
                                    @foreach($view->secondtestinputs as $secondtestinput)
                                        <p style="margin: 0;">{{ $secondtestinput -> text2 }}</p>
                                    @endforeach
                                @endif
                            </td>
                            @if($view -> image != null)
                                <td>
                                    <img style="height: 50px; width: 50px; border-radius: 5px;" src="{{asset($view->image)}}">
                                </td>
                            @elseif($view -> image == null)
                                <td>No Image</td>
                            @endif
                            <td>
                                <a class="table_link" href="{{ route('update', $view->id) }}"><i class="fa fa-edit"></i></a>
                                <form style="display: inline-flex;" method="post" action="{{URL::to('/delete/data')}}">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $view->id }}">
                                    <button class="table_link"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="link_section">
            <a class="link" href="{{ route('welcome') }}">Add data in 1st table</a>
        </div>
        <div class="update_link_section">
            <a class="link" href="{{ route('add2') }}">Add data in 2nd table</a>
        </div>
        <div class="update_link_section">
            <a class="link" href="{{ route('view2') }}">View 2nd table datas</a>
        </div>
    </div>
    @include('partials.footer')
@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#table').DataTable({
                scrollX: true,
                "pagingType": "simple",
                "drawCallback": function( settings ) {
                    document.getElementById('table_previous').querySelector('a').innerHTML = '<i class="fa fa-angle-left"></i>';
                    document.getElementById('table_next').querySelector('a').innerHTML = '<i class="fa fa-angle-right"></i>';
                }
            });
        });
    </script>
@endsection