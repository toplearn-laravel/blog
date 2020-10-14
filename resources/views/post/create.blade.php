@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left m-4">
            <h2>ساخت پست جدید</h2>
        </div>
        <div class="pull-right p-4">
            <a class="btn btn-warning" href="{{ route('post.index') }}">بازگشت</a>
        </div>
    </div>
</div>

@include('layouts.partials.error')
<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="border p-5">
@csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>عنوان:</strong>
                <input type="text" name="title" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>نویسنده:</strong>
                <input type="text" name="user_id" class="form-control" placeholder="">
            </div>
            <strong>عکس:</strong>

             <div class="col-md-12 p-3 mt-4">
                <input type="file" class="custom-file-input" id="customFile" name="image">
                <label class="custom-file-label" for="customFile"></label>
                    </div>
                    <strong>pdf:</strong>

             <div class="col-md-12 p-3 mt-4">
                <input type="file" class="custom-file-input" name="pdf">
                <label class="custom-file-label"></label>
                    </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success btn-block" style="font-size: 20px">ثبت</button>
        </div>
    </div>

</form>
@endsection
