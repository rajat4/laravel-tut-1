<h1>Upload File</h1>
<form action="upload" method="post">
    @csrf
    <input type="file" name="file" enctype="multipart/form-data"> <br> <br>
    <button type="submit" > Upload File </button>
</form>