<form action="/content" method="post">
@csrf
<input type="text" name="title" value="{{$title}}" placeholder="タイトル">
<input type="submit" value="find"> 
</form>

@extends('layouts.app')
@foreach($items as $item)
<table>
<tr>
        <td>{{$item->title}}</td>
        <td>{{$item->address_first}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->user->name}}</td>
        <td>{{DB::table('content_items')->where('content_id','=',$item->id)->count()}}</td>
<tr>
</table>
@endforeach