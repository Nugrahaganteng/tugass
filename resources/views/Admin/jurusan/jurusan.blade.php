<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: yellow">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Jurusan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route("jurusan.create") }}" class="btn btn-md btn-success mb-3">Tambah Jurusan</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Jurusan</th>
                                    <th scope="col">Detail</th>
                                    <th scope="col">Waktu Daftar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jurusan as $data)
                                    <tr>
                                        <td>{{ $data->jurusan }}</td>
                                        <td>{{ $data->detail }}</td>
                                        <td>{{ $data->created_at }}</td>
<div>
 <a href="{{route('jurusan.show',$data->id)}}"> 
<button class="mt-2 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
<span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
SHOW
</span>
</button>
</a>
</div>



                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Jurusan belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $jurusan->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

      
</body>
</html> 