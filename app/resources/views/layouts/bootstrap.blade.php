@section(`bootstrap`)
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>サンプルApp</title>
  <link href="/css/all.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>

<h2>依頼検索画面</h2>

<form action="/content/find" method="post">
@csrf
<input type="text" name="title" value="{{$title}}" placeholder="タイトル">
<input type="text" name="prefectures" value="{{$prefectures}}" placeholder="都道府県">
<input type="number" name="price" value="{{$price}}" placeholder="報酬">
<input type="submit" value="検索"> 
</form>

{{ Auth::user()->name }}がログインしてます
@foreach($items as $item)
<table>
<tr>
        <td>{{$item->title}}</td>
        <td>{{$item->prefectures}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->user->name}}</td>
        <td>{{DB::table('content_items')->where('content_id','=',$item->id)->count()}}</td>
<tr>
</table>
@endforeach

<button type="button" class="btn btn-success"><a href="{{ action('ContentsController@create') }}">依頼作成</a></button>
@show
