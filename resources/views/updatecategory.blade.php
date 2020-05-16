<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Import Excel File in Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

    <div class="container">
   <h3 align="center">Import Excel File</h3>
    <br />
   @if(count($errors) > 0)
    <div class="alert alert-danger">
     Upload Validation Error<br><br>
     <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif

   @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/import') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%" align="right"><label>Select File for Upload</label></td>
       <td width="30">
        <input type="file" name="select_file" />
       </td>
       <td width="30%" align="left">
        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
       </td>
      </tr>
      <tr>
       <td width="40%" align="right"></td>
       <td width="30"><span class="text-muted">.xls, .xslx</span></td>
       <td width="30%" align="left"></td>
      </tr>
     </table>
    </div>
   </form>

   <form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/publish') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="30%" align="left">
       <span class="text-muted">Kindly verify records. If there are no issues proceed with publish.</span>
        <input type="submit" name="upload" class="btn btn-primary" value="Publish">
       </td>
      </tr>
     </table>
    </div>
   </form>

   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Products Info</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
       <th>Process Flag</th>
       <th>Series Number</th>
       <th>Product Code</th>
        <th>Product Name</th>
        <th>Note</th>
        <th>Size</th>
        <th>Box/Carton</th>
        <th>Item Weight</th>
        <th>Shipping Weight</th>
        <th>Item Dimenstion</th>
        <th>Shippping Dimension</th>
        <th>Features & Benefits</th>
        <th>Color</th>
        <th>Material</th>
        <th>Includes</th>
        <th>Category Code One</th>
        <th>Category Name One</th>
        <th>Category Code Two</th>
        <th>Category Name Two</th>
        <th>Category Code Three</th>
        <th>Category Name Three</th>
       </tr>
       @foreach($data as $row)
       <tr>
       <td>{{ $row->process_flag }}</td>
       <td>{{ $row->series_number }}</td>
        <td>{{ $row->product_code }}</td>
        <td>{{ $row->product_name }}</td>
        <td>{{ $row->note }}</td>
        <td>{{ $row->size }}</td>
        <td>{{ $row->box_carton }}</td>
        <td>{{ $row->item_weight }}</td>
        <td>{{ $row->shipping_weight }}</td>
        <td>{{ $row->item_dimension }}</td>
        <td>{{ $row->shipping_dimension }}</td>
        <td>{{ $row->features_benefits }}</td>
        <td>{{ $row->color }}</td>
        <td>{{ $row->material }}</td>
        <td>{{ $row->includes }}</td>
        <td>{{ $row->category_code_one }}</td>
        <td>{{ $row->category_name_one }}</td>
        <td>{{ $row->category_code_two }}</td>
        <td>{{ $row->category_name_two }}</td>
        <td>{{ $row->category_code_three }}</td>
        <td>{{ $row->category_name_three }}</td>
       </tr>
       @endforeach
      </table>
     </div>
    </div>
   </div>
  </div>

    </body>
</html>
