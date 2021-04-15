<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Users;
use App\Ratings;
use App\Chats;
use App\MyLib\Dates;
use App\MyLib\Misc;
use App\MyLib\Query;
use DB;
use Session;
?>

@extends('natal-nurses.pusher-app')

@section('title')
    Natalpro | My Chats
@endsection

@section('content')
    
    @php($current_url = \Request::url())

    <div class="page-wrapper">
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h3 class="text-themecolor">My Chats</h3>
            </div>
        </div>
        
        <div class="container-fluid">
            
            
                    @if(session('error'))
                        <div class='alert alert-danger'>
                            <i class="fa fa-remove"></i> {{ session('error') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class='alert alert-success'>
                            <i class="fa fa-check"></i> {{ session('success') }}
                        </div>
                    @endif

                    @php(Session::forget('success'))
                    @php(Session::forget('error'))

            <div class="card">
                
                <div class="card-body">
                        
                    @if(count($chat_requests) == 0) 
                        <div class="alert alert-danger" style="margin:0 auto"> No chat yet </div>
                    @else
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Request ID</th>
                                        <th>Patient</th>
                                        <th>Rating</th>
                                        <th>Status</th>
                                        <th>Initiated On</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach($chat_requests as $chat_request) 

                                        @php($chat_on = Dates::chatTimeAgo(strtotime($chat_request->created_at), "three"))

                                        @php($patient_fullname = Query::getFullname('users', $chat_request->users_id))

                                        @php($count_messages = Chats::where('chat_req_id', $chat_request->id)->count())

                                        <td>{{$loop->iteration}}</td>
                                        <td>
                                            <a href="{{$current_url}}/view/{{$chat_request->chat_req_id}}">
                                                {{str_replace("=", "",$chat_request->chat_req_id)}} ({{$count_messages}} messages)
                                            </a>
                                        </td>
                                        <td>{{ucfirst($patient_fullname)}}</td>
                                        <td>
                                            @if($chat_request->done_status == "done")
                                                <button onclick="return viewFeedbacks('nurse','{{$chat_request->id}}')" class="btn btn-sm btn-info"> View </button>
                                                <br/>
                                                <small id="feedback-status{{$chat_request->id}}"></small>
                                            @else
                                                None
                                            @endif
                                        </td>
                                        <td>
                                            @if($chat_request->done_status == "done")
                                                <span class='label label-primary'><i class="fa fa-check"></i> Done </span>
                                            @else
                                                <span class='label label-success'> {{$chat_request->done_status}} ...</span>
                                            @endif
                                        </td>
                                        <td><small> {{$chat_on}} </small></td>
                                    </a>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <br/>
                        <div style="clear:both"></div>
                        <div class="pull-right"> {{$chat_requests->links()}} </div><br/>
                        
                    @endif
                     <br/>
                </div>
            </div>
        </div>

        @include('natal-nurses.footer')
    </div>
</div>
    
@endsection
