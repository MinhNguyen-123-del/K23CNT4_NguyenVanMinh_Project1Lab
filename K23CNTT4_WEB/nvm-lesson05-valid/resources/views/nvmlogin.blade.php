<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nvm Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('nvmlogin.nvmSubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h1>Nguyen Van Minh</h1>
                </div>
                <div class="card-body">
                    <div class="mb-3 form-group">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <input type="email" class="form-control" id="email"  value="{{ old('email') }}" placeholder="name@example.com">
                     
                     @error('email')
                         <span class="text-danger">{{$message}} </span>
                     @enderror
                    </div>
                     <div class="mb-3 form-group">
                        <label for="pass" class="col-sm-2 col-form-label">Pass</label>
                        <input type="password" class="form-control" id="pass" value="123456a@" placeholder="Nhập mật khẩu">
                        @error('pass')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                     </div>
                </div>
           </div>
           <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </section>
</body>
</html>