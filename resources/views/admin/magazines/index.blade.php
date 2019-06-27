@extends('layouts.admin')
@section('content')
    
<div class="container">
<div class="row mt-5 col-md-10 offset-md-1">
        
            <div>
                <h1 class="display-4 mb-3">جميع الاصدرات</h1>
            </div>
        </div>
        <div class=" mr-auto">
            <a href="{{route('admin.magazines.create')}}" class="btn btn-primary btn-sm">اضفة اصدار</a>
        </div>
            @if(count($magazines)>0)
            <table class="table table-striped"">
                <thead>
                <tr>
                    <th>#</th>
                    <th>غلاف الإصدار</th>
                    <th>عنوان الإصدار</th>
                    <th>عدد المقالت</th>
                    <th>اضافة رعاة</th>
                    <th>الإصدار PDF</th>
                    <th>تفعيل/ايقاف</th>
                    <th>تعديل الاصدار</th>
                    <th>مسح</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($magazines as $magazine)
                    <tr>
                        <td>{{$magazine->id}}</td>
                        <td><img src="/images/{{$magazine->cover_path}}" style="height:50px" class="img-fluid"></td>
                        <td><a href="{{route('magazines.show', ['magazine'=>$magazine->id])}}">{{$magazine->magazine_name}}</a></td>
                        <td>{{count($magazine->articles)}}</td>
                        <td><a href="{{route('magazine.sponsors', ['magazine_id'=>$magazine->id])}}" class="btn btn-primary">اضافة رعاة</a></td>
                        <td><a class="btn btn-info" target="_blank" href="/images/pdfs/{{$magazine->pdf_path}}">{{$magazine->magazine_name}} PDF</a></td>
                        
                        <td>

                           
                            <form action="{{route('admin.magazines.activation', ['id'=>$magazine->id])}}" method="POST">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <button type="submit" class="btn btn-warning">
                                    <i class="fas fa-edit"></i> {{$magazine->is_active == 0 ? 'تفعيل' : 'إقاف'}} 
                                </button>
                            </form>
                            
                        </td>
                        <td><a href="{{route('admin.magazines.edit', ['magazine'=>$magazine->id])}}" class="btn btn-secondary">تعديل الاصدار</a></td>
                        <td>
                        <form action="{{route('admin.magazines.destroy', ['magazine'=>$magazine->id])}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i> مسح</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>

@endsection