<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale-1">
    <title>ContactBook</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
     <nav class="navbar navbar-expand-sm bg-dark">

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-light" href="/">Contacts</a>
        </li>
    </ul>
     </nav>
     @if($message = Session::get('success'))
         <div class = "alert alert-success alert-block">
             <strong>{{ $message }}</strong>
         </div>
     @endif

     <div class="container">
         <div class="row justify-center-center">
             <div class="col-sm-8">
                 <div class="card mt-3 p-3">
                     <h3 class="text-muted">Contact Edit #{{ $product->name }}</h3>
                     <form method="POST" action="/product/{{$product->id}}/update" enctype="multipart/form-data">
                         @csrf
                         @method('PUT')
                         <div class="form-group">
                             <label>Image</label>
                             <input type="file" name="image" class="form-control">
                             @if($errors->has ("image"))
                                 <span class="text-danger">{{ $errors->first('image') }} </span>
                             @endif
                         </div>
                         <div class="form-group">
                             <label>Name</label>
                             <input type="text" name="name"
                                    class="form-control"
                                    value="{{old('name',$product->name)}}"
                             />
                             @if($errors->has ("name"))
                                 <span class="text-danger">{{ $errors->first('name') }} </span>
                               @endif
                         </div>
                         <div class="form-group">
                             <label>Phone no</label>
                             <input type="text" id="phone"  name="phoneno" class="form-control" rows="4"
                             {{old("phoneno",$product->phoneno)}}"
                             />
                             @if($errors->has ("phoneno"))
                                 <span class="text-danger">{{ $errors->first('phoneno') }} </span>
                             @endif
                         </div>
                         <div class="form-group">
                             <label>Email</label>
                             <input type="email" id="email"  name="email" class="form-control" rows="4"    />
                             @if($errors->has ("email"))
                                 <span class="text-danger">{{ $errors->first('email') }} </span>
                             @endif
                         </div>
                         <button type="Submit" class="btn btn-dark">Submit</button>
                     </form>
                 </div>
             </div>

         </div>
     </div>
</body>
</html>
