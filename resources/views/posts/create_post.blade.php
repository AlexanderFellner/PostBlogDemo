@extends('layouts.welcome')

@section('content')
<form method="post" action="{{route('store_post')}}">
@csrf
<div class="form-group">
<label for="title">Title</label>
<input class="form-control" name="title" type="title" value="" placeholder="Enter title"/>
</div>
<div class="form-group">
<label for="content">Content</label>
<input class="form-control" name="content" type="content" placeholder="Enter content"/>

</div>
<button type="submit" style="width:200px;" class="btn btn-lg btn-primary" />Add a post </button>
</form>
@stop

