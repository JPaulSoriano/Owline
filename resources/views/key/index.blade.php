@extends('layouts.app')
 
@section('content')
<div class="container">
<div class="jumbotron p-5">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('key.store') }}" method="post">@csrf<button type="submit" class="btn btn-sm btn-primary">Add Conference Room</button></form>  
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-3">
                <p class="font-weight-light">click the generated key to open your conference.</p>
            </div>
        </div>
        @foreach ($keys as $key)
        <div class="row my-3">
            <div class="col-lg-2">
                <a href="https://meet.step.com.ph/{{ $key->key }}" target="_blank">{{ $key->key }}</a>
            </div>
            <div class="col-lg-10 d-flex justify-content-start">
                <form action="{{ route('key.update', $key->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <button type="submit" class="btn btn-secondary btn-sm">Generate</button>
                </form>
            <div class="mx-1"></div>
                <form action="{{ route('key.destroy', $key->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
        @endforeach

        {!! $keys->links() !!}
</div>
</div>
      
@endsection