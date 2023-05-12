@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <div class="col-12 card">
        <div class="card-body">
            <h2 class="card-title">Editing Links</h2>
            <form action="/dashboard/links/{{$link->id}}" mathod="post">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="name">Link Name</label>
                            <input type="text" id="name" name="name" class="form-control{{$errors->first('name')?'is-invalid':''}}" palceholder="My Youtube Channel" value="{{$link->name}}">
</input>
@if($errors->first('name'))
<div class="invalid-feedback">{{$errors->first('name')}}</div>
@endif
</div> 
<div class="form-group">
                            <label for="name">Link Url</label>
                            <input type="text" id="link" name="link" class="form-control{{$errors->first('link')?'is-invalid':''}}" palceholder="https://www.youtube.com" value="{{$link->link}}>
</input>
@if($errors->first('link'))
<div class="invalid-feedback">{{$errors->first('link')}}</div>
@endif
</div>       
                    </div>  
                </div>  
</form> 
<div class="row">
<div class="col-12">
    @csrf
    <bytton type="submit" class="btn btn-primary">Save Link</button>
    <bytton type="submit" class="btn btn-secondary" onclick="event.preventDefault()" document.getElementById('delete-form').sumbit();>Delete Link</button>

                            </div>
                            </div> 
                            </form>
                            <form action="/dashboard/links/{{$link->id}}" mathod="post" id="delete-form">
                                @csrf
                                @method('DELETE')



        </div> 
    </div> 
</div>
</div>       


@endsection