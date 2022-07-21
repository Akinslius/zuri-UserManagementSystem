<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User page</title>

<!-- bootstrap css link -->  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <div class="">
        <h1 class="text-center m-5">Insert your details</h1>

            <form action="{{url('/createuser')}}" method="post">
                @csrf
            <!-- name -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="name" class="form-label"><b>Name</b></label>
                <input type="text" name="name" class="form-control" placeholder="Enter your Name" required>

            </div>
            <!-- email-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="email" class="form-label"><b>Email</b></label>
                <input type="text" name="email" class="form-control" placeholder="Enter your Email Address" required>

            </div>

            <!--phone-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="phone" class="form-label"><b>Phone Number</b></label>
                <input type="tel" name="phone" class="form-control" placeholder="Enter your Phone Number" required>
        
            </div>
            <div class="text-center">
            <input type="submit" value="Create User" class="m-5 btn btn-info">
            </div>
            <div>
            <a href="/users" class="btn btn-success">Back</a>
            </div>
            
            </form>




        </div>
    </div>
    
</body>
</html>