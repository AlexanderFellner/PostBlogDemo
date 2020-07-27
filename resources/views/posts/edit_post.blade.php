@extends("layouts.welcome")

@section("content")
<form method="post" action="{{action('PostController@update',['id'=>$post->id])}}">
@csrf
@method('put')
<div class="form-group">
<label for="title">Title</label>
<input class="form-control" type="text" name="title" value="{{$post->title}}"/>
</div>
<div class="form-group">
<label for="content">Content</label>
<input class="form-control" type="text" name="content" value="{{$post->content}}"/>
</div>
<button type="submit" style="width:200px;" class="btn btn-primary">Update post</button>
</div>
@stop
