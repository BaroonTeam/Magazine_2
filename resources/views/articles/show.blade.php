@extends('layouts.app')

@section('content')
<?php use Arabic\Arabic; ?>
<div class="container py-4">
    <div class="row">
        <div class="col">
        <h1 class="display-4">{{$article->article_title}}</h1>
        <span class="badge badge-danger mb-3"> الكاتب {{$article->user_id == 0 ? 'مجهول' : $article->user->first_name . ' ' . $article->user->last_name}} {{$article->created_at->day}}/{{$article->created_at->month}}/{{$article->created_at->year}}</span><br>
            <img src="/images/{{$article->article_cover}}" alt="" class="img-fluid text-center article-img">
            @if (count($article->photos) > 0)
                <div class="row mt-3">
                    @foreach ($article->photos as $photo)
                        <div class="col-lg-1 col-md-2 col-sm-3"><img height="75" width="75" src="/images/{{$photo->path}}" class="my-2" alt=""></div>
                    @endforeach
                </div>
            @endif
            <p class="lead">{{$article->article_content}}</p>
        </div>
    </div>



    {{-- ADD Comment Section --}}
    <div class="row mt-8">
        <div class="col">
            <div class="media d-flex">
                <div class="media-img ml-3 align-self-center">
                    <img src="/images/user.png" alt="">
                </div> 
                <div class="media-body align-center-end ">
                    <form method="POST" action="/articles/{{$article->id}}/comments">
                        {{ csrf_field() }}
                        @if(Auth::check())
                            <label class="align-center">{{Auth::user()->first_name }} {{Auth::user()->last_name }} </label>
                            <input type="hidden" name="username" value="{{Auth::user()->first_name }} {{Auth::user()->last_name }}">
                        @else
                        <div class="form-group">
                            <input type="text" name="username" placeholder="ادخل اسم المستخدم" class="form-control form-control-sm" style="height: 46px; width: 410px;" required>
                        </div>
                        @endif
                        <div class="form-group">
                            <textarea name="comment_content" placeholder="ادخل تعليقك " required="required" class="form-control" style="height: 129px; width: 412px; margin-top: 0px; margin-bottom: 0px;"></textarea>
                        </div>  
                            <input type="submit" value="اضف التعليق" class="btn btn-primary">
                    </form>
                </div>
            
            </div>
        </div>
    </div>

  

    {{-- Fetch the Comment --}}
    <div class="row mt-5">
        <div class="col">
                <ul >
            @foreach($comments as $comment)
       
             <li >
               <div class="media ml-3 d-flex">
              
                <div class="media-img ml-3">
                    <img src="/images/user.png "  style="height:50px; width:50px;" alt="">
                </div>
                <div class="media-body align-center-end ">
                  
                      {{  $comment->username }} -
                   {{'منذ '.Arabic::since($comment->created_at->diffforHumans() )}}
                    <br>
                    {{  $comment->comment_content }} 
                    <a class="btn btn-primary btn-circle" data-toggle="collapse" href="#replyOne{{$comment->id}}" style="width:40px; height:30px; text-align:center;"><span class="glyphicon glyphicon-comment"></span>رد</a>
                   
                   
                   {{-- FETCH REPLY  --}}
                   @foreach ($comment->replies as $reply)
                   @if(count($comment->replies)>0)
                    <div class="media ml-3 d-flex">
              
                            <div class="media-img ml-3">
                                <img src="/images/user.png "  style="height:50px; width:50px;" alt="">
                            </div>
                            <div class="media-body align-center-end ">
                             
                                    {{  $reply->username }} -
                                    {{'منذ '.Arabic::since($reply->created_at->diffforHumans() )}}
                                     <br>
                                     {{  $reply->reply_content }} 
                               
                            </div>
                        </div>
                        <br>
                        @endif
                        @endforeach
                    {{-- ADD REPLY  --}}
                    <div class="collapse" id="replyOne{{$comment->id}}">
                        <br>
                            <div class="row mt-8">
                                    <div class="col">
                                        <div class="media d-flex">
                                            <div class="media-img ml-3 align-self-center">
                                                <img src="/images/user.png" alt="">
                                            </div> 
                                            <div class="media-body align-center-end ">
                                                <form method="POST" action="/comments/{{$comment->id}}/replies">
                                                    {{ csrf_field() }}
                                                    @if(Auth::check())
                                                        <label class="align-center">{{Auth::user()->first_name }} {{Auth::user()->last_name }} </label>
                                                        <input type="hidden" name="username" value="{{Auth::user()->first_name }} {{Auth::user()->last_name }}">
                                                    @else
                                                    <div class="form-group">
                                                        <input type="text" name="username" placeholder="ادخل اسم المستخدم" class="form-control form-control-sm" style="height: 46px; width: 410px;" required>
                                                    </div>
                                                    @endif
                                                    <div class="form-group">
                                                        <textarea name="reply_content" placeholder="ادخل ردك " required="required" class="form-control" style="height: 70px; width: 412px;"></textarea>
                                                    </div>  
                                                        <input type="submit" value="اضف الرد" class="btn btn-primary">
                                                </form>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>  
                        </div>

                        {{-- END OF ADD REPLY --}}
                </div>
              </div>
            </li>
             @endforeach  
         </ul>
        </div>
    
    </div>

</div>
    
@endsection