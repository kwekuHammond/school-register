@props(['id','StudentName', 'Gender', 'ProfileImage', 'PupilClass'])
<div class="card" style="width: 18rem;">
  <img src="storage/{{$ProfileImage}}" style="height: 150px;" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$StudentName}} <span><h6 class="card-text">({{$PupilClass}})</h6></span></h5>

    <form method="POST" action="/update/{{$id}}">
        @csrf
        @method('get')
        <sapn><button href="#" class="btn btn-sm btn-primary" type="submit">Update</button></sapn>
    </form>

    <form method="POST" action="/student-list/{{$id}}">
        @csrf
        @method('DELETE')
        <sapn><button class="btn btn-sm btn-danger" type="submit">Delete</button></sapn>
    </form>
  </div>
</div>
