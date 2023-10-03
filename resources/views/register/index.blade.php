<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="row justify-content-center">
      <div class="col-lg-4 pt-5 mt-4">
        <main class="form-registration w-100 m-auto">
          <h1 class="h3 mb-5 fw-normal text-center fw-bold" style="font-size: 60px">Registration</h1>
          <form action="/register" method="post">
            @csrf
            <div class="form mt-3">
              <input type="text" name="name" class="form-control fw-normal p-3 @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form mt-2">
              <input type="text" name="username" class="form-control fw-normal p-3 @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
              @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form mt-2">
              <input type="email" name="email" class="form-control fw-normal p-3 @error('email') is-invalid @enderror" id="email" placeholder="Email Address" required value="{{ old('email') }}">
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form mt-2">
              <input type="password" name="password" class="form-control fw-normal p-3 @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
              @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <button class="btn btn-info bg-opacity-50 w-100 mt-4 fw-semibold" type="submit">Register</button>
          </form>
          <a href="/login" class="d-block mt-2 text-decoration-none text-danger fw-semibold">Already registered?</a>
        </main>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
    
  
