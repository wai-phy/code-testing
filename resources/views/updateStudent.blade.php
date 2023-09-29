<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css link  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-5 offset-3 bg-info rounded">
            <a class="btn btn-dark mt-2" href="{{ route('register#List')}}">Back</a>
            <div class="login-form p-5">
                <h2 class="my-3">Student Registration Form</h2>
                <form action="{{ route('student#UpdateData')}}" method="post">
                    @csrf
                    
                  
                   
                    <div class="form-group">
                        <label>Student Name</label>
                        <input value="{{$updateStudent->name}}" required class="form-control" type="text" name="name" placeholder="Student Name">
                        <input type="hidden" value="{{$updateStudent->id}}" name="id">
                        
                    </div>
                    <div class="form-group">
                        <label>Father Name</label>
                        <input value="{{$updateStudent->father_name}}" required class="form-control" type="text" name="fatherName" placeholder="Father Name">
                        
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input value="{{$updateStudent->phone}}" required class="form-control" type="number" name="phone" placeholder="Phone ....">
                      
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea required name="address" id="" class="form-control" cols="30" rows="3" placeholder="Address ......">{{$updateStudent->address}}</textarea>
            
                    </div>
                  
                    <div class="form-group">
                        <label>Grade</label>
                        <input value="{{$updateStudent->grade}}" required class="form-control" type="number" name="grade" placeholder="Grade ... ">
            
                    </div>
                    
                    
                    <div class="form-group mt-3">
                        <button class="btn btn-success form-control" type="submit">Update Student</button>
                    </div>
                    
                </form>
                
                </div>
            </div>
        </div>
    </div>
</div>              
</body>
{{-- js bootstrap link  --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>