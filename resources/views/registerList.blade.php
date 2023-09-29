<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- css link  --}}
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     {{-- fonatawesome cdn link  --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register List</title>
</head>
<body>
    <div class="container ">
            <div class="row">
                <div class="mt-5 col-3 offset-6">
                    <form class="form-header d-flex" action="{{route('register#List')}}" method="get">
                        <input class="form-control col" type="text" name="key" value="{{ request('key') }}"
                            placeholder="Search for student..." />
                        <button class="btn btn-info" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-7 offset-2">
                    <table class="table ">
                        <thead>
                          <tr>
                                <th>Student Name</th>
                                <th>Father Name</th>
                                <th>Grade</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>OPTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($studentData as $item)
                          <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->father_name}}</td>
                            <td>{{$item->grade}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->address}}</td>
                            <td>
                                <a href="{{ route('register#Delete',$item->id)}}">
                                    <i class="fa-solid fa-trash me-3"></i> 
                                </a>
                                <a href="{{ route('student#Detail',$item->id)}}">
                                 <i class="fa-solid fa-pen-to-square me-3"></i>
                                </a>
                            </td>
                      </tr>
                          @endforeach
                        </tbody>
                      </table> 
                      {{ $studentData->appends(request()->query())->links()}}
                      <a class="text-decoration-none btn btn-dark" href="{{route('register#Page')}}">To Register</a>
                </div>
            </div>
    </div>
</body>
{{-- js bootstrap link  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>