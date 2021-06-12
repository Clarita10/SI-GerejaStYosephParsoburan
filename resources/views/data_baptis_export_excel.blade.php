<table>
    <thead>
        <tr>
            <th>#</th>
            <th colspan="6">DATA CALON BAPTIS</th>
            <th colspan="8">DATA ORANG TUA KANDUNG / ADOPSI</th>
            <th colspan="2">BAPAK DAN IBU BAPTIS</th>
            <!-- <th colspan="5">LAMPIRAN</th> -->
        </tr>
        <tr>
            <th>#</th>
            <th>Nama Baptis</th>
            <th>Nama Lengkap</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>NIK</th>
            <th>Nama Ayah</th>
            <th>Agama Ayah</th>
            <th>Nama Ibu</th>
            <th>Agama Ibu</th>
            <th>Alamat Pos</th>
            <th>No HP</th>
            <th>No KK</th>
            <th>Lingkungan</th>
            <th>Nama Lengkap Bapak Baptis</th>
            <th>Nama Lengkap Ibu Baptis</th>
            <!-- <th>Surat Baptis</th>
            <th>Surat Nikah</th>
            <th>Kartu Keluarga</th>
            <th>Foto Copy Akte Lahir</th>
            <th>Surat Nikah Orangtua</th> -->
        </tr>
    </thead>
    
    <tbody>
        @foreach($data_baptis_export_excel as $data_baptis)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$data_baptis->nama_baptis}}</td>
            <td>{{$data_baptis->nama}}</td>
            <td>{{$data_baptis->tempat_lahir}}</td>
            <td>{{$data_baptis->tanggal_lahir}}</td>
            <td>{{$data_baptis->jenis_kelamin}}</td>
            <td>{{$data_baptis->nik}}</td>
            <td>{{$data_baptis->nama_ayah}}</td>
            <td>{{$data_baptis->agama_ayah}}</td>
            <td>{{$data_baptis->nama_ibu}}</td>
            <td>{{$data_baptis->agama_ibu}}</td>
            <td>{{$data_baptis->alamat_pos}}</td>
            <td>{{$data_baptis->no_hp}}</td>
            <td>{{$data_baptis->no_kk}}</td>
            <td>{{$data_baptis->lingkungan}}</td>
            <td>{{$data_baptis->nama_lengkap_bapak_baptis}}</td>
            <td>{{$data_baptis->nama_lengkap_ibu_baptis}}</td>
            <!-- <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td> -->
        </tr>
        @endforeach    
    </tbody>
</table>