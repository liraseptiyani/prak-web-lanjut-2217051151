
@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 30rem;">
            <h2 class="text-center mb-4">Form Edit User</h2>
            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                @method('PUT')

                @if($user->foto)
                    <div class="text-center mb-3">
                    <img src="{{ asset('assets/upload/img/' . $user->foto) }}" alt="User Foto" style="object-fit: cover; border-radius: 50%;" width="150" height="150">
                    </div>
                @endif

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', $user->nama) }}">
                    @foreach($errors->get('nama') as $msg)
                        <p class="text-danger">Nama Harus Diisi</p>
                    @endforeach     
                </div>
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM:</label>
                    <input type="text" id="npm" name="npm" class="form-control" value="{{ old('npm', $user->npm) }}">
                    @foreach($errors->get('npm') as $msg)
                        <p class="text-danger">NPM Harus Diisi</p>
                    @endforeach 
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas:</label>
                    <select name="kelas_id" id="kelas_id" class="form-select" >
                        <option value="" disabled selected>Pilih Kelas</option>
                        @foreach($kelas as $kelasItem)
                            <option value="{{$kelasItem->id}}"
                                {{$kelasItem->id == $user->kelas_id ? 'selected' : ''}}>
                                {{ $kelasItem->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                    @foreach($errors->get('kelas_id') as $msg)
                        <p class="text-danger">Kelas Harus Dipilih</p>
                    @endforeach                 
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto:</label>
                    <input type="file" id="foto" name="foto" class="form-control">
                         
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-custom" value="Submit">
                    <a href="{{ url('/user') }}" class="btn btn-custom">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
