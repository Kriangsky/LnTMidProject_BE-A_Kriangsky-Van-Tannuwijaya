<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    @forelse ($karyawans as $karyawan)
        <div class="card" style="width: 18rem;">
           <h4>{{ $karyawan->namaKaryawan }}</h4>
           <h4>{{ $karyawan->umurKaryawan }}</h4>
           <h4>{{ $karyawan->alamatKaryawan }}</h4>
           <h4>{{ $karyawan->nomorKaryawan }}</h4>
           <div style="display: flex; justify-content: space-around; margin: 20px">
                <a href="/edit-karyawan/{{ $karyawan->id }}"><button class="btn btn-primary">Edit</button></a>
                <form action="/delete-karyawan/{{ $karyawan->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
           </div>
        </div>
        <br>
    @empty
        <p>Data is empty.</p>
    @endforelse
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
