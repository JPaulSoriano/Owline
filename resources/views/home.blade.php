@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top:45px">
       <div class="col-md-6 offset-md-3">

          <form action="{{ route('key.store') }}" method="post">
          @csrf




               <button type="submit" class="btn btn-primary">Save</button>
             </div>
          </form>     
       </div>
    </div>
</div> 
@endsection


