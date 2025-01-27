@extends('layouts.default')

@section('page-title', 'Add Property')

@section('content')

<div class="container">
    <form action="{{ route('pages.post.property') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="my-4">
            <label class="block font-semibold" for="image">Upload file</label>
            <input id="image" name="image" type="file" accept="image/png, image/jpeg, image/jpg" class="outline-none outline-offset-0 border border-2 rounded-md cursor-pointer mt-2 file:px-3 file:py-2 focus:outline-2 focus:outline-[#004cd2] file:border-0 w-full">
            @error('image')
            <div class="text-xs text-[#C23A22] mt-1">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="inputName">Nama Properti</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="inputDescription">Deskripsi</label>
            <textarea name="description" class="form-control" rows="4"></textarea>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tipe Properti</label>
                    <select name="type_id" class="form-control select2" style="width: 100%;">
                        <option value="" selected="selected"></option>
                        @foreach($type as $types)
                        <option value="{{ $types->id }}">{{$types->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- /.form-group -->

                <div class="form-group">
                    <label for="">Provinsi</label>
                    <select name="province_id" id="selectprov" class="form-select" style="width: 100%;">
                        <option value="" selected="selected"></option>
                        @foreach($province as $provincies)
                        <option value="{{ $provincies->id }}">{{ $provincies->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Kecamatan</label>
                    <select id="selectdis" name="district_id" class="form-select" style="width: 100%;">
                        <option selected="selected"></option>
                        @foreach($district as $districts)
                        <option value="{{ $districts->id }}">{{$districts->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="inputClientCompany">Alamat Lengkap</label>
                    <input type="text" name="address" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Daya Listrik</label>
                    <input type="text" name="electricity" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Interior</label>
                    <input type="text" name="interior" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Tempat Parkir</label>
                    <input type="text" name="parking_lot" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">ID Jenis Sertifikat</label>
                    <input type="text" name="id_certificate_type" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">ID Tipe Penjualan</label>
                    <input type="text" name="sale_type_id" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Lantai ke</label>
                    <input type="text" name="floor" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Hadap</label>
                    <input type="text" name="hadap" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Kamar Tidur</label>
                    <input type="text" name="kt" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Kamar Mandi</label>
                    <input type="text" name="km" class="form-control" style="width: 100%;">
                </div>
                
                <!-- /.form-group -->
            </div>
            <!-- /.col -->

            <div class="col-md-6">
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="category_id" class="form-control select2" style="width: 100%;">
                        <option selected="selected"></option>
                        @foreach($category as $categories)
                        <option value="{{$categories->id}}">{{$categories->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Regency -->
                <div class="form-group">
                    <label>Kabupaten/ Kota</label>
                    <select id="selectregen" name="regency_id" class="form-select" style="width: 100%;">
                        <option selected="selected"></option>
                        @foreach($regency as $regencies)
                        <option value="{{$regencies->id}}">{{$regencies->name}}</option>
                        @endforeach
                    </select>
                </div>



                <!-- /.form-group -->

                <div class="form-group">
                    <label>Desa/ Kelurahan</label>
                    <select id="selectvill" name="village_id" class="form-select" style="width: 100%;">
                        <option selected="selected"></option>
                        @foreach($village as $villages)
                        <option value="{{$villages->id}}">{{$villages->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="inputClientCompany">developer</label>
                    <input type="text" name="developer" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Nomor Kamar</label>
                    <input type="text" name="room_number" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Kamar Mandi</label>
                    <input type="text" name="bathroom" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">slug</label>
                    <input type="text" name="slug" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Tahun</label>
                    <input type="text" name="year" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">Area Bangunan</label>
                    <input type="text" name="building_area" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Luas Bangunan</label>
                    <input type="text" name="lb" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Luas Tanah</label>
                    <input type="text" name="lt" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Jumlah Lantai</label>
                    <input type="text" name="jumlah_lantai" class="form-control" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label for="inputProjectLeader">Harga</label>
                    <input type="text" name="price" class="form-control" style="width: 100%;">
                </div>
                <div class="my-4">
                    <input id="recommended" type="checkbox" name="recommended" {{ old('recommended') ? 'checked' : '' }} class="inline align-middle cursor-pointer">
                    <label for="recommended" class="font-semibold inline align-middle cursor-pointer">Rekomendasi</label>
                </div>
            </div>
            <div class="row text-center">
                    <div class="">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </div>
            <!-- /.form-group -->
        </div>
        <!-- /.col -->
</div>
<!-- /.row -->

</form>
</div>

@endsection