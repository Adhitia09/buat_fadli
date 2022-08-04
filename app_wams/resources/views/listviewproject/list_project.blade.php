@extends('layouts.main')
@section('content')
<section class="section">
    <div class="section-header">
        <h1>List View Project </h1>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-hover">
                <a href="{{route('input')}}"><button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Create</button></a>

                <hr>
                <thead>
                    <tr align="center">
                        <th>No Work Order</th>
                        <th>Tanggal WO</th>
                        <th>Nama Institusi</th>
                        <th>Nama Project</th>
                        <th>Nama Sales</th>
                        <th>HPS</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($cb as $item)
                    @if (Auth::user()->id == $item->sign_pm)
                    <tr>
                        <td>{{$item->no_sales}}</td>
                        <td>{{$item->tgl_sales}}</td>
                        <td>{{$item->nama_institusi}}</td>
                        <td>{{$item->nama_project}}</td>
                        <td>{{$item->nama_sales}}</td>
                        <td>{{$item->hps}}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</section>
@endsection