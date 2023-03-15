@extends('/layout/theme')
@section('topic', 'ทดสอบการทำงาน Component')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ชื่อเพลง</th>
                            <th>ศิลปิน</th>
                        </tr>
                    </thead>
                    <tbody>
                        <x-productdetail :id="50042380254"/>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

