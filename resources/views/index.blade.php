@extends('layout', ['title' => 'My School Register | Login'])

@section('content')
<!-- NavBar -->
<x-navbar />


<div class="container pt-5" style="margin-left: auto; margin-right: auto;">
    <x-alert-message/>

    <div class="">
        <!-- Sign In Form  -->
        <x-signin-form />
    </div>

</div>

<script>
    // (() => {
    //     'use strict'

    //     // Fetch all the forms we want to apply custom Bootstrap validation styles to
    //     const forms = document.querySelectorAll('.needs-validation')

    //     // Loop over them and prevent submission
    //     Array.from(forms).forEach(form => {
    //         form.addEventListener('submit', event => {
    //             if (!form.checkValidity()) {
    //                 event.preventDefault()
    //                 event.stopPropagation()
    //             } else
    //                 console.log("Yesss")

    //             form.classList.add('was-validated')
    //         }, false)
    //     })
    // })()
</script>

@endsection
