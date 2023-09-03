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

     <div class="container">
         <div class="text-right">
             <a href="product/create" class="btn btn-dark mt-2">New Contact</a>
         </div>

            <table class="table table-hover mt-2">
                   <thead>
                     <tr>
                       <th>Image</th>
                       <th>Name</th>
                       <th>Phone no</th>
                       <th>Email</th>
                       <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                        @foreach($contacts as $product)
                        <tr>
                            <td>
                                <img src="products/{{$product->image}}" class="rounded-circle"
                                     width="30" height="30"/>
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->phoneno }}</td>
                            <td>{{$product->email}}</td>
                            <td>
                                <a href="product/{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</td>
                        </tr>
                        @endforeach
                   </tbody>
            </table>
     </div>
</body>
</html>
