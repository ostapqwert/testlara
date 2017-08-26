<form action="{{ route('test.store') }}" method="POST">
    {{ csrf_field() }}
    <textarea name="areatest" rows="3"></textarea><br>
    <input name="sep" type="text" placeholder="testing">
    <input type="submit">
</form>