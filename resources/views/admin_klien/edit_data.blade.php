<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit data klien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    .form-control {
        padding: 15px;
    }
    label {
        margin-bottom: 5px;
        margin-top: 15px;
    }
    .btn-custom {
        background-color:  #447abc;
        padding: 10px;
        color: white;
        font-weight: 600;
    }
</style>
<body style="background: lightgray">

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded" style="background-color:  #7ea1cd; border-radius:10px;">
                <div class="card-body">


                    <div class="d-flex justify-content-center pt-5 mt-1 mb-4">
                        <h1 class="head-klien fs-2 fw-bold">
                            FORMULIR EDIT
                        </h1>
                    </div>

                    <form action="{{ route('admin_klien.update', $data_kliens->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $data_kliens->nama) }}" placeholder="Masukkan Nama">
                                    @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Nama_Wali</label>
                                    <input type="text" class="form-control @error('nama_wali') is-invalid @enderror" name="nama_wali" value="{{ old('nama_wali', $data_kliens->nama_wali) }}" placeholder="Masukkan Nama Wali">
                                    @error('nama_wali')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $data_kliens->alamat) }}" placeholder="Masukkan Alamat Anda">
                                    @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">No telepon</label>
                                    <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ old('no_telepon', $data_kliens->no_telepon) }}" placeholder="Masukkan No Telepon Anda">
                                    @error('no_telepon')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Paket</label>
                                    <select class="form-control @error('paket') is-invalid @enderror" name="paket">
                                        <option>Pilih Paket Anda</option>
                                        <option value="1" {{ old('paket', $data_kliens->paket) == 1 ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ old('paket', $data_kliens->paket) == 2 ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ old('paket', $data_kliens->paket) == 3 ? 'selected' : '' }}>3</option>
                                        <option value="4" {{ old('paket', $data_kliens->paket) == 4 ? 'selected' : '' }}>4</option>
                                    </select>
                                    @error('paket')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Kelamin</label>
                                    <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                                        <option>Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki" {{ old('jenis_kelamin', $data_kliens->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                                        <option value="Perempuan" {{ old('jenis_kelamin', $data_kliens->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-flex container mt-3 pb-4 justify-content-end">
                            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                            <button type="reset" value="reset" class="btn btn-md btn-danger">RESET</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
