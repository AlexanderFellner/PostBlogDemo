@extends('layouts.welcome')

@section('content')
       <table>
       @foreach($posts as $post)
        <tr><td>
        Title: {{$post->title}} </td> <td>Content: {{$post->content}}</td></tr>
        @endforeach
        </table>
        {{csrf_token()}}
        <script src="" async defer></script>
@stop
