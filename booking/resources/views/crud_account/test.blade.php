
<table class="table bordered" border="1" align="center" style="width:50%; ">
    <h3 class="text-light text-center" align="center" style="margin:20pxz">Data Persediaan Barang</h3>
    <thead class="table-primary">
        <th>ID</th>
        <th>Nama</th>
        <th>No HP</th>
        <th>Email</th>
        <th>Role</th>
        <th>Action</th>
    </thead>
    @foreach ($data as $item)
        <tbody>
            <td>{{$loop->index + 1}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->role}}</td>
            <td>
                <a href="{{route('account.show',$item->id)}}" class="btn btn-primary"><button>Detail</button></a>
                <a href="{{route('account.edit',$item->id)}}" class="btn btn-warning"><button>Edit</button></a>
                <form action="{{route('account.destroy',$item->id)}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button> 
                </form>
            </td>
        </tbody>
    @endforeach
</table>
<form action="" align="center" style="margin:10px">
    <a href="/account/create"  class="btn btn-primary">Input New Data</a>
</form>