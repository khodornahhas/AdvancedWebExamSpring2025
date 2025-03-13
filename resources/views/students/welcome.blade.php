@extends('layout.app')
@section('content')
<div class="container mx-auto">

<h1 class="text-center" style="color: var(--color-blue-300);">Welcome To My Laravel App!</h1>

<h3 class="text-center">Manage Students and Courses easily</h3>

<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"> Manage Courses</button>
<button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Manage Students</button>
</div>

<div id="Content"> 

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $('#search').on('keyup', function(){
        let value = $(this).val();
        $.ajax({
            type: 'GET',
            url: "{{ URL::to('search') }}",
            data: { 'search': value },
            success: function(data) {
                $('#Content').html(data);
            }
        });
    });
});
</script>
@endsection