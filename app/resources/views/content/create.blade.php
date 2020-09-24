@extends('layouts.bootstrap')

<h2>依頼作成画面</h2>

<form action="/content/check" method="post">
@csrf
<tr>
<th><input type="text" name="title" value="{{old('title')}}" placeholder="タイトル"></th>
<th><input type="text" name="prefectures" value="{{old('prefectures')}}" placeholder="依頼先の都道府県"></th>
<th><input id="address"　type="text" name="address" value="{{old('address')}}" placeholder="住所入力"></th>
<input type="button" value="地図URL取得" onClick="codeAddress()">
<div id="addressfind">発見情報が表示される</div>
<th><input type="number" name="price" value="{{old('price')}}" placeholder="報酬"></th>
<th><input type="text" name="order" value="{{old('order')}}" placeholder="依頼内容"></th>
<input id="addressURL" type="hidden" name="gmap" value="{{old('gmap')}}" >
<th><input type="submit" value="送信"></th>
</tr>

<div id="latlngDisplay">ここに緯度、経緯が表示される</div>
<div id="map"></div>

<style>
#map{
  height: 600px;
  width: 600px;
}
#latlngDisplay{
  display:none;
}
</style>
@extends('layouts.apikey')
<script src="{{ asset('/js/googlemap_api.js') }}"></script>
