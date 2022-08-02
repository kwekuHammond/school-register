@extends('layout', ['title' => 'My School Register | Add Studetns'])
@section('content')

<!-- NavBar -->
<x-navbar />

<div class="container pt-5" style="margin-left: auto; margin-right: auto;">
<x-alert-message/>
<p><h3 class="align-center">
@php
    if(!isset($student))
        echo 'Add New Student';
    else
        echo 'Update Data';
@endphp
</h3><hr></p>

<div class="container">
  <div class="row">

    <form method="POST" action="/add-new-student" enctype="multipart/form-data" class="row g-2">
        @csrf <!--  prevents cross site scripting attacks -->

        @php
            if(isset($student)){
                echo '<input type="hidden" name="_method" value="PUT">';
            }else{
                echo '<input type="hidden" name="_method" value="POST">';
            }
        @endphp

        <input type="hidden" name="id" value="{{isset($student)? $student->id : ''}}">
        <div class="col-12 mt-3">
            <label for="studentid" class="form-label">Student ID</label>
            <input type="text" class="form-control" name="student_id" value="{{ isset($student) ? $student->student_id : old('student_id')}}" id="studentid">

            @error('student_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-12 mt-4">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fullname" value="{{isset($student)? $student->fullname : old('fullname')}}" id="fullname">
            @error('full_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-4 mt-4">
            <label for="studentclass" class="form-label">Class</label>
            <input type="text" class="form-control" name="pupil_class" value="{{isset($student)? $student->pupil_class : old('pupil_class')}}" id="studentclass">
            @error('pupil_class')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-4 mt-4">
            <label for="gender" class="form-label">Gender</label>
            <select id="gender" name="gender" class="form-select">
            <option>Female</option>
            <option>Male</option>
            </select>
            @error('gender')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-4 mt-4">
            <label for="date_of_birth" class="form-label">Date Of Birth</label>
            <input type="date" class="form-control" name="date_of_birth" value="{{ isset($student)? $student->date_of_birth : old('date_of_birth') }}" id="date_of_birth">
            @error('date_of_birth')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-12 mt-3">
            <label for="place_of_residence" class="form-label">Place Of Residence</label>
            <input type="text" class="form-control" name="place_of_residence" value="{{isset($student)? $student->place_of_residence : old('place_of_residence')}}" id="place_of_residence">
            @error('place_of_residence')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-12 mt-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{isset($student)? $student->email : old('email')}}" id="email">
            @error('email')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-12 mt-3">
            <label for="religion" class="form-label">Religion</label>
            <input type="text" class="form-control" name="religion" value="{{isset($student)? $student->religion : old('religion')}}" id="religion">
            @error('religion')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-12 mt-3">
            <label for="profile_image" class="form-label">Profile Image</label>
            <input type="file" accept="image/*" class="form-control" name="profile_image" value="{{isset($student)? $student->profile_image : old('profile_image')}}" id="profile_image">
            @error('profile_image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <img src="{{(isset($student))? asset('storage/'.$student->profile_image):''}}" style="width: 20%; height: 20%;" alt="">

        <div class="mt-5 mb-6">
            @php
                if(isset($student))
                {
                    echo '<button class="btn btn-lg btn-success btn-btn-outline-success" type="submit">Update</button>';
                }else
                {
                    echo '<button class="btn btn-lg btn-success btn-btn-outline-success" type="submit">Add New Student</button>';
                }
            @endphp
            <a href="/student-list" class="btn btn-lg btn-primary">View Students</a>
        </div>

    </form>

  </div>
</div>

</div>

@endsection
