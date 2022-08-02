<form method="POST" action="/student-list" class="" role="search">
        @csrf <!--  prevents cross site scripting attacks -->
        @method('POST')
        <input class="form-control me-2" type="search" placeholder="enter student name" name="keyword" value="{{old('keyword')}}" aria-label="Search">

    @error('keyword')
        <p class="text-danger">{{ $message }}</p>
    @enderror
    <br>
    <button class="btn btn-outline-success" style="margin-left: auto; margin-right: auto;" type="submit">Search</button>
</form>
