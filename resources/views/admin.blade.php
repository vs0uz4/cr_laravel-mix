@extends('layouts.app')

@push('styles')
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Page</div>

                    <div class="panel-body">
                        <p>You are in admin page!</p>
                        <p class="admin-features">
                            Here, you will administer:
                            <dl class="dl-horizontal">
                                <dt>Users</dt>
                                <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet consequatur magni optio quaerat veniam voluptatibus. Alias asperiores cumque deleniti earum harum incidunt, ipsam iure maxime mollitia omnis placeat reiciendis suscipit!</dd>

                                <dt>Roles</dt>
                                <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolor inventore omnis recusandae. Adipisci aliquid beatae, eos id illum, maxime minus molestiae, numquam odio odit officia ratione rerum sequi voluptatem.</dd>

                                <dt>Permissions</dt>
                                <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores delectus dicta dolore ex exercitationem iste, iusto molestias nemo neque odio officia omnis possimus quas sequi similique vitae. Ea, eligendi!</dd>
                            </dl>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('/js/admin.js') }}"></script>
@endpush