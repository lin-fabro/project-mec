@extends('layouts.app')

@section('content')

@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif

<div class="container">
<br />
     &nbsp;
     <form method="get" enctype="multipart/form-data" action="/inquiry/list/export">
        {{ csrf_field() }}
        <div class="panel panel-default">
        <table>
        <tr>
            <td>
            <h3 class="panel-title">Orders and Inquiries list</h3>
            </td>
            <td>
            &nbsp;
            @if($data_count > 0)
            <input type="submit" name="download" class="btn btn-primary" value="Export into Excel file">
            @endif
            </td>
        </tr>
        </table>
        </div>
     </form>
    <div class="panel-body">
     <div class="table-responsive">

     @if($data_count > 0)
      <table class="table table-bordered table-striped">
       <tr>
       <th>Date</th>
       <th>Name</th>
        <th>Company</th>
        <th>Email</th>
        <th>Contact No</th>
        <th>Inquiry</th>

        <th>
            <form method="post" enctype="multipart/form-data" action="/inquiry/list/delete">
                {{ csrf_field() }}
                <input type="submit" name="upload" class="btn btn-primary" value="Delete All">
            </form>
        </th>
       </tr>
       @foreach($data as $row)
       <tr>
        <td>{{ $row->created_at }}</td>
        <td>{{ $row->first_name }}</td>
        <td>{{ $row->company }}</td>
        <td>{{ $row->email }}</td>
        <td>{{ $row->contact_no }}</td>
        <td>{{ $row->inquiry }}</td>
        <td>
        <form method="post" enctype="multipart/form-data" action="/inquiry/list/{{ $row->id }}">
            {{ csrf_field() }}
            @method('delete')
            <input type="submit" name="upload" class="btn btn-primary" value="Delete">
        </form>
        </td>
       </tr>
       @endforeach
      </table>

      @endif
     </div>
    </div>
   </div>
</div>
@endsection