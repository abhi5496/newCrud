<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update User Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Update User Data</h1>
                <Form action="{{route('update.user', $data->id)}}" method="POST" >
                    @csrf
                    @method('PUT')
                        <div class="mb-3">
                            <lebel class="form-lebel">Name</lebel>
                            <input type ="text" value="{{$data->name}}" class="form-control" name="username">
                        </div>
                        <div class="mb-3">
                            <lebel class="form-lebel">Email</lebel>
                            <input type ="text"  value="{{$data->email}}" class="form-control" name="useremail">
                        </div>
                        <div class="mb-3">
                            <lebel class="form-lebel">Age</lebel>
                            <input type ="text" value="{{$data->age}}" class="form-control" name="userage">
                        </div>
                        <div class="mb-3">
                            <lebel class="form-lebel">City</lebel>
                            <input type ="text" value="{{$data->city}}" class="form-control" name="usercity">
                        </div>
                        <button type ="submit" class="btn btn-primary">Update</button>
                    </Form>
            </div>
        </div>
    </div> 
</body>
</html>