@extends('layouts.app')

@section('content')

<div class="py-5 container">
        <div class="row">
                <div class="col-md-6">
                    <h1 class="mb-3 display-4">جميع المقلات</h1>
                </div>
                <div class="col-md-6 clearfix">
                    <a href="{{route('create_article')}}" class="btn btn-secondary btn-sm float-left">اضافة مقالة جديد</a>
                </div>
        
            </div>
    <div class="row">
          
        @if(count($archives) > 0)
            @foreach ($archives as $archive)
                           <div class="col-md-4 my-3">
                    <div class="card border border-secondary">
                        <a href="{{route('articles.show',['magazine_id'=>$archive->magazine_id, 'article'=>$archive->id])}}">
                            {{-- {{dd($archive->magazine_id) }} --}}
                        <img src="/images/{{$archive->article_cover}}" alt="" class="img-fluid card-img" style="width:325px; height:300px;">
                        </a>
                        <div class="card-body">
                            <h3 class="card-title">{{$archive->article_title}}</h3>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
<div style="min-height:250px"></div>
    
@endsection