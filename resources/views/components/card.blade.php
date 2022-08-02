@props(['CardTitle'])
<div  style="margin-left: auto; margin-right: auto;" {{ $attributes->merge(['class'=>'card w-75']) }} >
    <h3 class="text-center pt-3"> {{ $CardTitle }} </h3>
    <hr>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>
