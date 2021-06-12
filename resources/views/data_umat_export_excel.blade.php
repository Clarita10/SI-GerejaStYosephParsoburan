<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Alamat</th>
            <th>NIK</th>
            <th>Jenis Kelamin</th>
            <th>No HP</th>
            <th>Lingkungan</th>
            <th>Tanggal Baptis</th>
            <th>No Baptis</th>
            <th>Paroki</th>
            <th>Keuskupan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_umat_export_excel as $umat)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$umat->username}}</td>
            <td>{{$umat->nama}}</td>
            <td>{{$umat->alamat}}</td>
            <td>{{$umat->nik}}</td>
            <td>{{$umat->jenis_kelamin}}</td>
            <td>{{$umat->no_hp}}</td>
            <td>{{$umat->lingkungan}}</td>
            <td>{{$umat->tanggal_baptis}}</td>
            <td>{{$umat->no_baptis}}</td>
            <td>{{$umat->paroki}}</td>
            <td>{{$umat->keuskupan}}</td>
        </tr>
        @endforeach    
    </tbody>
</table>