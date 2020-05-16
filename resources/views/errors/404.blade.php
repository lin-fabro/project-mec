@extends('layouts.layout', ['search_action' => $search_action ?? ''])
    @section('content')
    <style>

    .full-height {
        height: 50vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .code {
        border-right: 2px solid;
        font-size: 26px;
        padding: 0 15px 0 15px;
        text-align: center;
    }

    .message {
        font-size: 18px;
        text-align: center;
    }

    </style>
    <div class="flex-center position-ref full-height">
        <div class="code">
            404            </div>

        <div class="message" style="padding: 10px;">
            The page you are looking for is not available.            </div>
    </div>

    @endsection