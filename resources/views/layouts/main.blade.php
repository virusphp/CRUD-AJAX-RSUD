  <html>
      <head>
       <title>CRUD dengan AJAX Laravel</title>  
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 
      </head>
    <body>
      <div class="container">
        <div class="panel panel-primary">
          <div class="panel-heading">CRUD dengan Ajax
            <button id="btn_add" name="btn_add" class="btn btn-default pull-right">Add New Product</button>
          </div>
          <div class="panel-body"> 
                @yield('content')
          </div>
        </div>
        <!-- Include MODEL -->
        @include('ajax.model')
      </div>
        <meta name="_token" content="{!! csrf_token() !!}" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="{{asset('js/ajaxku.js')}}"></script>
    </body>
  </html>