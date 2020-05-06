@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>تاپ لرن</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href=""> پست جدید </a>
            </div>
        </div>
    </div>



    <table class="table table-bordered">
        <tr>
            <th>شناسه</th>
            <th>عنوان</th>
            <th>نویسنده</th>
        </tr>

        <tr>
            <td>تست</td>
            <td>نست</td>
            <td>فعال</td>
            <td>
                <form action="" method="POST">
                    <a class="btn btn-info" href="">نمایش</a>
                    <a class="btn btn-primary" href="">ویرایش</a>
                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>
            </td>
        </tr>

    </table>

    @endsection
