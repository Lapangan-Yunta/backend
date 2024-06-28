@extends('admin.backend.layouts.parent')

@section('title','Booking')

@section('top','Booking')

@section('content')
    <table class="table bordered">
        <thead>
                <th>ID</th>
                <th>Nama</th>
                <th>No Hp</th>
                <th>Lapangan</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Status</th>
                <th>Action</th>
        </thead>
        @foreach ($booking as $item )
            <tbody>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->user->name}}</td>
                    <td>{{$item->user->phone}}</td>
                    <td>{{$item->lapangan->title}}</td>
                    <td>{{$item->schedule->date}}</td>
                    <td>{{ sprintf('%02d:00 - %02d:00', $item->schedule->hour, $item->schedule->hour + 1) }}</td>
                    <td>{{$item->status}}</td>
                    <td>
                        <div class="d-flex flex-row ms-1">
                            <a href="{{route('booking.detail', $item->id)}}" class="btn btn-primary me-1">Show</a> 
                            <a href="{{route('booking.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('fasilitas.destroy',$item->id)}}" method="POST">
                                {{-- csrf itu untuk keamanan saja biar tidak mudah dibobol katanya  --}}
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
            </tbody>
        @endforeach
    </table>
@endsection