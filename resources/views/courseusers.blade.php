<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">
        {{-- <h1>Courses for {{ $user->name }}</h1> --}}
        
    <h1>ALL USERS OF THE COURSE</h1>
    <h2> Course: {{ $course->name}} at Users nito: </h2>
        
        @foreach($course->users as $user)
            <h2>Name:{{ $user->name }} Email:({{ $user->email }})</h2>
            <h3>Course: </h3>{{ $course->name }} 
            <h3>Course Description: </h3>{{ $course->description }}
        @endforeach

       
    </div>

</body>
</html>