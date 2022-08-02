
@extends('layout', ['title' => 'My School Register | Studetns'])
@section('content')
<!-- NavBar -->
<x-navbar />

<div class="container-sm pt-4">
<x-search-form/>
<hr>
<x-alert-message/>
</div>

<div class="container pt-5" style="margin-left: auto; margin-right: auto;">

<a class="btn btn-lg btn-success" href="/add-new-student">Add New </a>

<p><h3 class="align-center" >Students Lists</h3><hr></p>

<div class="container">
  <div class="row mb-5">
    @unless (count($StudentList) == 0)
    @foreach ($StudentList as $student)
    <div class="col pb-3">
        <x-profile-card
        :StudentName="$student->fullname"
        :ProfileImage="$student->profile_image"
        :PupilClass="$student->pupil_class"
        :id="$student->id"/>
    </div>
    @endforeach

    @else
    <p>No Student Found</p>
    @endunless


  </div>
  <div class="mt-5 p-3">
      <p> {{ $StudentList->links() }}  </p>
    </div>
</div>

</div>

@endsection
