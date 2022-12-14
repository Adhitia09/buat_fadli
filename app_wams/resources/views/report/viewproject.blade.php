@extends('layouts.main')
@section('content')
@include('sweetalert::alert')
<section class="section">
    <h1 style="color: black; margin-left: 10px; margin-top:10px"></h1>
</section>

<!-- Table Report -->
<div class="card" style="border-radius: 2em">
    <div class="card-header">
        <h4>List View Project</h4>

        <div class="card-header-form">
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Nama Client</th>
                        <th>Nama Project</th>
                        <th>Uraian Pekerjaan</th>

                        <th>Start Date</th>
                        <th>End Date</th>

                    </tr>
                    <tr>
                        @foreach ($lt as $item)
                        @if (Auth::user()->name == $item->nama_technical)
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->lists->institusi}}</td>
                        <td>{{$item->lists->project}}</td>
                        <td>{{$item->jenis_pekerjaan}}</td>

                        <td>{{$item->start_date}}</td>
                        <td>{{$item->finish_date}}</td>
                        @endif
                        @endforeach
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- Akhir Table Report -->
@endsection