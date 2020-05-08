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
                <div class="form-group" id="otEmbedContainer" style="width:800px; height:600px">

		</div>
                <script src="https://tokbox.com/embed/embed/ot-embed.js?embedId=d98fda98-6970-42e6-b9d6-dab9b76f447d&room=DEFAULT_ROOM"></script>
                
            </div>
        </div>
    </div>
</div>
@endsection
