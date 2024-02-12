<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
        <div class="card-body">
            <form action= "/update-karyawan/{{ $karyawan -> id }}" method="POST">
                @csrf
                @method('put')
                {{-- @method('POST') --}}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaKaryawan" value="{{ $karyawan -> namaKaryawan}}">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Umur Karyawan</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" name="umurKaryawan" value="{{ $karyawan -> umurKaryawan}}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat Karyawan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="alamatKaryawan" value="{{ $karyawan -> alamatKaryawan}}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nomor Telpon Karyawan</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nomorKaryawan" value="{{ $karyawan -> nomorKaryawan}}">
                </div>

                <button type="submit" class="btn btn-primary mt-2">Submit</button>
              </form>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
