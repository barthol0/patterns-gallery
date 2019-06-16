@extends('layouts.app')

@section('content')
<a href="" class="btn btn-primary">Back</a>
<h1>Add pattern</h1>
<form action="" method="post">
    <div class="form-group">
        <label for="">Pattern name</label>
        <input type="text" name="pattern-name" class="form-control">
        <label for="">Description</label>
        <textarea name="description" class="form-control" rows="5"></textarea>
        <br>
        <label for="img-upload" class="btn btn-info btn-block">
            Upload images
            <input type="file" name="images" id="img-upload" style="display: none" multiple />
        </label>
        <br>
        <input type="submit" name="submit" value="Add" class="btn btn-primary btn-lg btn-block">
    </div>
</form>
@endsection
