@extends('layouts.app')

@section('content')






        {{-- <div class="container">
                <br>
                <br>
                
                <div class="row">
                        <div class="col-md-6">
                            <h1 class="mb-3 display-4 ">جميع المجلات</h1>
                            <div class="headding-border"></div>

                        </div>
                        <div class="col-md-6 clearfix">
                                <a href="{{route('channels.create')}}" class="btn btn-secondary btn-sm float-left">اضافة مجلة جديد</a>
                            </div>
                </div>
                <div class="row">
                        @if(count($channels) > 0)
                        @foreach ($channels as $channel)
                    <div class="col-md-6">
                        <div class="row space-16">&nbsp;</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumbnail">
                                    <div class="caption text-center" >
                                        <div class="position-relative">
                                            <a href="{{route('channels.show', ['id' => $channel->id])}}">
                                                    <img src="/images/{{$channel->cover_path}}" alt="" class="img-fluid card-img" style="height: 200px;width:175px;">
                                            </a> 
                                        </div>
                                        <h3 class="card-title">{{$channel->channel_name}}</h3>
                                        
                                        
                                    </div>
                                    <div class="caption card-footer text-center">
                                        <ul class="list-inline">
                                            <li><i class="people lighter"></i>&nbsp;تاريخ الإصدار: {{$channel->created_at->day}}/{{$channel->created_at->month}}/{{$channel->created_at->year}}</li>
                                            <li></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">&nbsp;</div>
                    </div>
                    @endforeach
                    @endif
                </div>
        </div> --}}

        <div class="container">
                <br>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="category-headding">الكتاب :</h1>
                        <div class="headding-border"></div>
                    </div>
            
                </div>
                <div class="row">
                        @if(count($users) > 0)
                    @foreach ($users as $user)                  
                    <div class="col-md-6">
                        <div class="row space-16">&nbsp;</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="thumbnail">
                                    <div class="caption text-center" >
                                        <div class="position-relative">
                                            <img src="/images/author.png" style="width:176px;">
                                        </div>
                                    <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp; الكاتب: {{$user->first_name}} {{$user->last_name}}</p>
                                    </div>
                                    <div class="caption card-footer text-center">
                                        <ul class="list-inline">
                                                <li><i class="people lighter"></i>&nbsp;تاريخ الانضمام: {{$user->created_at->day}}/{{$user->created_at->month}}/{{$user->created_at->year}}</li>
                                                <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">&nbsp;</div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>


        <div style="min-height:250px"></div>

@endsection