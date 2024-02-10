@extends('index')
@section('content')
<form action="{{ route('spp.store')}}" method="POST">
    @csrf
    <div class="tahun">
        <label for="tahun">input tahun</label>
        <br>
        <input type="text" name="tahun" id="tahun">
    </div>
    <br>
    <div class="nominal">
        <label for="nominal">input nominal</label>
        <br>
        <input type="text" name="nominal" id="nominal">
    </div>
    <br>
    <button>Submit</button>
</form>
@endsection