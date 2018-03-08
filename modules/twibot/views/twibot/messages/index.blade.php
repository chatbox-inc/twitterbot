@extends("twibot.commons.layout-base")

@section("contents")

    <div class="mt-3 mb-3">
        <div>
            <span class="text-muted">send message as </span>
            <span>
                <img src="http://placehold.it/25x25" alt="">
                mikakane
            </span>
        </div>
    </div>


    <div class="d-flex flex-row-reverse">
        <div class="p-2">
            <a href="{{route("TWIROBO.MESSAGE.NEW")}}">add new message</a>
        </div>
    </div>


    <div class="list-group list-group-flush">
        @foreach($messages as $message)
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$message->message}}</h5>
                <small>{{$message->message_at->format("Y/m/d H:i")}}</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small>Donec id elit non mi porta.</small>
        </a>
        @endforeach
    </div>
@endsection