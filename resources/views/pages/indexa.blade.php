
@extends('layouts.app')

@section('content')
<div class="landing-page" style="background-image: url('https://cdn.cfr.org/sites/default/files/styles/open_graph_article/public/image/2019/08/Nigeria-Lagos-Victoria-Island-Urbanization.jpg?h=49d06cac'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; color: white; font-family: 'Arial', sans-serif;">
    <div style="max-width: 600px; padding: 20px; background: rgba(0, 0, 0, 0.7); border-radius: 10px;">
        <h1 class="display-4">Welcome to GDSC Mapoly Nigeria</h1>
        <p class="lead">Explore the exciting world of technology and innovation.</p>

        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="btn btn-danger mt-3">Logout</button>
        </form>

    </div>
</div>
@endsection