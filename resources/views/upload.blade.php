<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input name="upload" type="file">
    <button>Send</button>
    <br>
    <br>
    <img class="img-fluid" height="200px" src="{{ asset('storage').'/Nr3ytUu6BuVZeK3w2T06mQ6K0ylgZfYnvOkW3ljV.jpg'}}"
    " alt="Hola">
</form>