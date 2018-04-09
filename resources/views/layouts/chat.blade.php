<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
      <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Room4Rent</title>

    <script src="{{asset('js/app.js')}}"></script>

    <script src="{{asset('chat/js/talk.js')}}"></script>

    <link rel="stylesheet" href="{{asset('chat/css/reset.css')}}">

    <link rel="stylesheet" href="css/style.css" rel="stylesheet">

    <link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="{{asset('chat/css/style.css')}}">

  </head>

  <body>
<div class="header">
    <div class="container header-brand">
          <a href="/">Go back</a>
    </div>
</div>
    @if ($message = Session::get('alert'))
    <div class="header">
      <div class="container header-brand">
        <p class="brand">{!! $message !!}</p>
      </div>
    </div>

    @endif

      <div class="container clearfix body">
   @include('messages.peoplelist')

    <div class="chat">
      <div class="chat-header clearfix">

        <div class="chat-about">
            @if(isset($user))
                <div class="chat-with">@lang('phrases.chatWith') {{$user->name}}</div>
                <div class="chat-with">@lang('phrases.concerningRoom') <a href="/kamer/{{$room->id}}" target="_blank" > {{$room->street}} {{$room->housenumber}}</a></div>
            @else
                <div class="chat-with">@lang('phrases.noConvo')</div>
            @endif
        </div>
        <i class="fa fa-star"></i>
      </div> <!-- end chat-header -->

      @yield('content')

      @if(isset($user))
      <div class="chat-message clearfix">
      <form action="" method="post" id="talkSendMessage">
            <textarea name="message-data" id="message-data" placeholder ="@lang('phrases.messagePlaceholder')" rows="3"></textarea>
            <input type="hidden" name="_id" value="{{@request()->route('userid')}}">
            <input type="hidden" name="room_id" value="{{@request()->route('roomid')}}">
            <button type="submit">@lang('phrases.send')</button>
      </form>
      @endif
      </div> <!-- end chat-message -->

    </div> <!-- end chat -->

  </div> <!-- end container -->
    <script src="{{asset('chat/js/index.js')}}"></script>
      <script>
          var __baseUrl = "{{url('/')}}"
      </script>
    <!-- <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script> -->

    <script>
    function check(){

          $.ajax({
            type: 'POST',
            url: __baseUrl + '/count/{{$convo}}',
            dataType: 'json',
            data: {
              counter:$('#talkMessages').data('counter')
            }
          }).done(function( response ) {
            /* update counter */
            $('#talkMessages').data('counter',response.current);
            /* check if with response we got a new update */
            if(response.update==true && response.userID != "{{auth()->user()->id}}" ){
              var html = '<li id="message-' + response.userID + '">' +
              '<div class="message-data">' +
              '<span class="message-data-name">' + response.sender + '</span>' +
              '<span class="message-data-time">'+ response.date +'</span>' +
              '</div>' +
              '<div class="message my-message">' +
              response.message +
              '</div>' +
              '</li>';
              $('#talkMessages').append(html);
            }
            });
          }


        setInterval(check,5000);

    </script>

  </body>
</html>
