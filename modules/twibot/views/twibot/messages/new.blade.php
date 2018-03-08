@extends("twibot.commons.layout-modal")

@section("contents")
    <div class="row mt-5">
        <div class="col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="p-2">
                    <a href="{{route("TWIROBO.MESSAGE.INDEX")}}" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-8 offset-sm-2">

            <h2>投稿予約</h2>

            <div class="mb-3">
                <div>
                    <div class="text-muted">send message as </div>
                    <div>
                        <img src="http://placehold.it/25x25" alt="">
                        mikakane
                    </div>
                </div>
            </div>

            <form action="{{route("TWIROBO.MESSAGE.REGISTER")}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>message</label>
                    <textarea rows="4" class="form-control" name="message" placeholder="" value="{{$form["message"]}}"></textarea>
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label>send a message at</label>
                    <input type="datetime-local" class="form-control"  name="message_at" value="{{$form["message_at"]}}">
                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection