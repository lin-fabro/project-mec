@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><a href="/import_excel/template" class="link">Download Import Template</a></p>
                    <p><a href="/import_excel" class="link">Import Excel </a></p>
                    <p><a href="/inquiry/list" class="link">Show Inquiries </a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
