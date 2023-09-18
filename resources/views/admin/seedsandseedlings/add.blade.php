@extends('admin.main')

@section('head')
@endsection
@include('admin.alert')

@section('content')

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="menu">Tên Hạt - Cây Giống</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control"  placeholder="Nhập Tên Hạt - Cây Giống">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="menu">Mô Tả</label>
                        <input type="text" name="description" value="{{old('description')}}" class="form-control"  placeholder="Nhập mô tả">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="menu">Chi tiết</label>
                        <input type="text" name="detail" value="{{old('detail')}}" class="form-control"  placeholder="Nhập chi tiết">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="menu">Nhà Cung Cấp Giống</label>
                <select class="form-control" name="id_seedsupplier">
                    @foreach($seedsuppliers as $seedsupplier)
                        <option value="{{$seedsupplier->id}}">{{$seedsupplier->tencoso. " - " . $seedsupplier->madoanhnghiep}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="menu">Ảnh Nhà Vườn</label>
                <input type="file"  class="form-control" id="upload">
                <div id="image_show" style="padding-top: 20px"></div>
                <input type="hidden" name="thumb" id="thumb">
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Cây - Hạt Giống</button>
        </div>
        @csrf
    </form>
@endsection

@section('footer')
@endsection
