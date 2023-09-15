<p>スクレイピングするんゴよ</p>

<form method="post" action="{{ route('scraping') }}">
    @csrf
    <lavel>対象URL</lavel>
    <input type="text" name="URL">
    <button>スクレイピング</button>
</form>
