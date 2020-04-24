@extends('layouts.foundation')

@section('content')
<script src="https://static.opentok.com/v2/js/opentok.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div id="otEmbedContainer" style="width:1024px; height:768px"></div>
                <script src="https://tokbox.com/embed/embed/ot-embed.js?embedId=d98fda98-6970-42e6-b9d6-dab9b76f447d&room=DEFAULT_ROOM"></script>
                <!--
                <div>SessionKey: {{ $session_token }}</div>
                    <div id="videos">
                        <div id="subscriber"></div>
                        <div id="publisher"></div>
                    </div>

                    <script src="https://static.opentok.com/v2/js/opentok.min.js"></script>
                    <script type="text/javascript">

                    var token = '{{ $opentok_token }}';
                    var session_key = '{{ $session_token }}';
                    var api_key = '{{ env('OPENTOK_API_KEY') }}';

                    // connect to open tok api using client side library
                    var session = OT.initSession(api_key, session_key);

                    // when other user is connected we want to show them
                    // in subscriber div element
                    session.on('streamCreated', function(event) {
                        session.subscribe(event.stream, 'subscriber', {
                            insertMode: 'append',
                            width: '100%',
                            height: '100%'
                        }, handleError);
                    });

                    // when first user loads this page we want him to
                    // be shown in publisher div element
                    var publisher = OT.initPublisher('publisher', {
                        insertMode: 'append',
                        width: '100%',
                        height: '150px'
                    }, handleError);

                    // if we have any connection error let's put an alert box
                    session.connect(token, function(error) {
                        if (error) {
                            alert(error.message);
                        } else {
                            session.publish(publisher, handleError);
                        }
                    });

                    </script>
                    -->
            </div>
        </div>
    </div>
</div>
@endsection
