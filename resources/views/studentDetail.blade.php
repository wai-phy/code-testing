<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css link  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- fontawesome link  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-5 offset-3 bg-info rounded">
            <a class="btn btn-dark mt-2" href="{{ route('register#List')}}">Back</a>
            <div class="login-form p-5">
                <h2 class="mt-5 mb-3 fs-2"><b>Student Registration Data</b></h2>
                <hr>
                <form action="" method="post">
                   <h3 class="my-3"><i class="fa-solid fa-user-graduate me-3"></i>{{$registerDetail->name}}</h3>
                   <h3 class="my-3"><i class="fa-solid fa-user-tie me-3"></i>{{$registerDetail->father_name}}</h3>
                   <h3 class="my-3"><i class="fa-solid fa-graduation-cap me-3"></i>{{$registerDetail->grade}}</h3>
                   <h3 class="my-3"><i class="fa-solid fa-phone me-3"></i>{{$registerDetail->phone}}</h3>
                   <h3 class="my-3"><i class="fa-solid fa-map-location-dot me-3"></i>{{$registerDetail->address}}</h3>
                </form>
                    <a href="{{ route('student#Update',$registerDetail->id)}}">
                        <button class="btn btn-dark">Edit Registration Form</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>              
</body>
{{-- js bootstrap link  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>