@extends('layouts.app')

@section('content')

<div class="py-5 container">
        <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-3 display-4">جميع الأصدرات</h1>
                </div>
                <div class="col-md-6 clearfix">
                    <a href="{{route('magazines.create', ['channel_id' => $channel_id])}}" class="btn btn-secondary btn-sm float-left">اضافة اصدار جديد</a>
                </div>
        
            </div>






{{-- ADDING NEW UI --}}
<div class="container">
    <div class="row">
        @if(count($magazines) > 0)
        @foreach ($magazines as $magazine)
            <div id="book1-trigger" class=" col-lg-4 col-md-6 text-center">
                <div class="service-box">
                        <a href="{{route('magazines.show', ['channel_id'=>$channel_id, 'magazine'=>$magazine->id])}}">
                                <img src="/images/{{$magazine->cover_path}}" alt="" class="img-fluid card-img" style="width:200px; height:250px;">
                        </a>         
                        <h3 class="card-title">{{$magazine->magazine_name}}</h3>
                        <br><br>
                </div>
            </div>
 
            @endforeach
            @endif
        </div>
        <br>
    </div>
    <div style="min-height:250px"></div>

    {{-- END --}}
    
@endsection