@extends('/layout/theme')

@section('topic', 'ทดสอบความต้องการ')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Laravel 9.x Blade Components Tutorial | Laravelia</div>
                    <div class="card-body">
                        <x-productdetail name="Watchana Haohan Component" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
