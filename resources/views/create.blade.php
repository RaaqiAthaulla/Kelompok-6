@section('container')
<title>Add Movie | Veflix</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

@if(session('errors'))
    <div class="alert alert-danger">
        {{ session('errors') }}
    </div>

@endif
<body class="antialiased" style="background-color: background: #F1F1F1;
background: -webkit-linear-gradient(top right, #F1F1F1, #1766D6);
background: -moz-linear-gradient(top right, #F1F1F1, #1766D6);
background: linear-gradient(to bottom left, #F1F1F1, #1766D6)";>
<section class="vh-100">

    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                            <form method="POST" action="/dashboard" enctype="multipart/form-data">
                             @csrf
                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                            <!-- Name -->
                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control" id="title">
                                    </div>
                            </div>
                            <!-- Image -->
                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" class="form-control" id="image">
                                    </div>
                            </div>
                            <!-- Email Address -->
                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <label for="synopsis" class="form-label">Synopsis</label>
                                        <input type="text" name="synopsis" class="form-control" id="synopsis">
                                    </div>
                            </div>
        
                            <!-- Password -->
                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <label for="duration" class="form-label">Duration (Minutes)</label>
                                        <input type="text" name="duration" class="form-control" id="duration">
                                    </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <label for="genre" class="form-label">Genre</label>
                                        <input type="text" name="genre" class="form-control" id="genre">
                                    </div>
                            </div>
                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                    <div class="form-outline flex-fill mb-0">
                                        <label for="rating" class="form-label">Rating</label>
                                        <input type="text" name="rating" class="form-control" id="rating">
                                    </div>
                            </div>
            
                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <x-button class="btn btn-primary btn-lg  mx-4 mb-3 mb-lg-4" type="submit">
                                    {{ __('Add Movie') }}
                                </x-button>
                                <a href="/dashboard" class="btn btn-primary">Kembali</a>
                            </div>
                            </form>
                        </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2" style="background-color: ";    >          
                  <img src="../assets/logoveflix.png" class="img-fluid" alt="Sample image" style="margin-left: 60px">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
</body>

    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous">
        </script>