    @extends('layout')

    @section('content')
    <div class="col-md-9 mx-auto">

        <p class="text-muted">Home &gt; KRS</p>

        <div class="card shadow-sm">
            <div class="card-body">
                <h5>Kartu Rencana Studi (KRS) <small class="text-muted">Total SKS: {{ $total }}</small></h5>

                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matkul as $m)
                        <tr>
                            <td>{{ $m['kode'] }}</td>
                            <td>{{ $m['nama'] }}</td>
                            <td>
                                @if ($m['sks'] == 3)
                                    <span class="badge bg-success">{{ $m['sks'] }} SKS</span>
                                @else
                                    <span class="badge bg-warning">{{ $m['sks'] }} SKS</span>
                                @endif
                            </td>
                            <td><button class="btn btn-danger btn-sm">Batal</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="text-end">
                    <button class="btn btn-success btn-sm">Simpan KRS</button>
                </div>
            </div>
        </div>

    </div>
    @endsection