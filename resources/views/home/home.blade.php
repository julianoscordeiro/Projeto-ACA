@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-12">
            <div class="card">
                <div class="card "></div>

                <div class="card-body fundoContent ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas imperdiet non tellus et lobortis. Duis neque arcu, tempor sed ornare non, aliquam vel tellus. Aliquam placerat lobortis elit eget aliquam. Praesent lacinia sagittis leo, eu porta ex blandit eget. Duis semper sit amet nulla eget luctus. Ut dignissim dolor accumsan massa sodales maximus. Donec pretium urna at dapibus faucibus. Mauris molestie fermentum leo, vel facilisis neque iaculis in. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam lorem justo, varius non fringilla at, eleifend et metus. In felis elit, dictum mattis nisi eget, accumsan efficitur dui. Etiam diam nulla, faucibus at iaculis sit amet, luctus et turpis.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
