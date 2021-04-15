<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\MyLib\Dates;
use App\MyLib\Query;
use App\MyLib\Misc;
use App\Forums;
use DB;
?>

 <div class="chat-rbox" style="margin-top: -40px">    
    <ul class="chat-list p-20">

        @foreach($comments as $comment) 
            
            @php($user_fullname = Query::getFullname('users', $comment->users_id))

            @if($comment->users_id != "admin")
                <li>
                    <div class="chat-content" style="width:100%">
                        <h5>{{$user_fullname}}</h5>
                        <div class="box bg-light-info"><small style="font-size:14px"> {!! html_entity_decode(ucfirst(nl2br($comment->comment))) !!} </small></div>
                    </div>
                    <div class="chat-time">{!! Dates::chatTimeAgo(strtotime($comment->created_at), "three") !!}</div>

                    <div style="margin-right:30px">
                        <small>
                            <a href="#" onclick="return forumRequests('admin','admin-delete-comment','{{$comment->id}}')" class="text-danger" style="font-size:14px;color:#fff"> Delete</a>
                        </small>
                    </div>

                </li>
            @else 
                <li class="reverse" align="left">
                    <div class="chat-content" style="width:100%">
                        <h5>You</h5>
                        <div class="box bg-light-inverse" style="text-align:left"><small style="font-size:14px"> {!! html_entity_decode(ucfirst(nl2br($comment->comment))) !!} </small></div>
                    </div>
                    <div class="chat-time">{!! Dates::chatTimeAgo(strtotime($comment->created_at), "three") !!}</div>

                    <div style="margin-right:30px">
                        <small>
                            <a href="#" onclick="return forumRequests('admin','admin-edit-comment','{{$comment->id}}')" class="text-info" style="font-size:14px;color:#fff">Edit</a> &nbsp; &nbsp;

                            <a href="#" onclick="return forumRequests('admin','admin-delete-comment','{{$comment->id}}')" class="text-danger" style="font-size:14px;color:#fff"> Delete</a>
                        </small>
                    </div>
                </li>
            @endif

            <div id="the-status{{$comment->id}}"></div>
        @endforeach

    </ul>
</div>