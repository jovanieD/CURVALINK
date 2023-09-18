@extends('layouts.error')

@section('content')
<div class="">
    <div class="text-center ">
        <h1><i style="color: #ffc107" class="fas fa-exclamation-triangle"></i> Oops! Page not found <span class=" text-warning">!</span></h1>
        <p class="zoom-area">The page you requested was not found.</p>
        <section class="error-container">
            <span class="four"><span class="screen-reader-text">4</span></span>
            <span class="zero"><span class="screen-reader-text">0</span></span>
            <span class="four"><span class="screen-reader-text">4</span></span>
        </section>
        <div class="link-container">
            <a href="/" class="btn-grad-error">Back to Home</a>
        </div>
    </div>
</div>
@endsection
