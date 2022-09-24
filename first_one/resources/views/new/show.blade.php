<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
     <link rel="stylesheet" href="{{url('css/stayle.css')}}"><!--{{url('css/stayle.css')}} -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
     crossorigin="anonymous">
     <title>oneOFdata</title>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
     integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</head>
  <body class="body"  >


    <div class="position-relative  ">
        <nav >
            <a class="p-2"href="{{route('index')}}">home</a>
            <a class="p-2" href="{{route('new.index')}}">data</a>


        </nav>
    </div>
    <div class=" text-center mt-5 haed   " >
        <h1  >Our Tea​m</h1>
        <p class=" text-center m-auto flex-column">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="container ">
      <input class="form-check-input" type="checkbox" role="switch" id="checkbox" checked >show

    </div>
    <div class="container mt-5  ">
        <div class="row g-2" id="corde">

        <div class="col-lg-4 col-md-6"  >
                <div class="p-3 border bg-light cord" >
                    <img class="img-fluid"  src="{{url('imges/1.jpg')}}" alt="imge">
                    <h5 class="text-black-50">{{$dataOne['title']}}</h5>
                    <h3 >{{$dataOne['name']}} </h3>
                    <h6 class="fw-lighter">{{$dataOne['sub']}}</h6>

                      <ul class="d-flex mt-4 list-unstyled  gap-1 " >
                        <li>
                            <i class="material-icons" >facebook</i>
                        </li>
                        <li>
                            <a class="d-block text-light" href="https://www.instagram.com/">
                            <img src="{{url('imges/instegram.png')}}" class="img-fluid" alt=""></i>
                        </a>
                      </ul>
                </div>
              </div>
        </div>
      </div>
      <div class=" text-center mt-5 text-white">
        <h5 class="fw-light ">Images from <a href=""><span class="text-decoration-underline text-white">Freepik</span></a></h5>
      </div>
      <div class="text-center footer mt-5 " id="footer">
        <h6 class="fw-light text-white  "> <a href="">
          <span class="text-decoration-underline span">Website Templates</span></a> created with <a href="">
          <span class="text-decoration-underline span ">Website Builder Software.</span></a>
        </h6>
      </div>
  </body>
    <script src="{{url('js/myscripts.js')}}"></script>
</html>
