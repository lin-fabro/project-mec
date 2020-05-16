@extends('layouts.app')
    @section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
       <td width="40%" align="right"><label>Select File for Upload</label>&nbsp;<span class="text-muted">(.xls, .xslx)</span></td>
       <td width="30">
        <input type="file" name="select_file" />
       </td>
       <td width="30%" align="left">
        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
       </td>
      </tr>
     </table>
    </div>
   </form>

   <form method="post" enctype="multipart/form-data" action="{{ url('/import_excel/publish') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="30%" align="center">
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
        <th>Finish</th>
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
        <td>{{ $row->finish }}</td>
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
  @endsection