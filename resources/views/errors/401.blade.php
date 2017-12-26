@extends('layouts.error')
@section('title', '401 - Not Authorized')

@section('page-content')
    <app-page-error title="Unauthorized">
        @lang('You need to be logged in to see this page.')

        @component('components.button-login', ['large' => true])
            @slot('attributes')
                slot="links"
                class="link-effect-4"
            @endslot
        @endcomponent

    </app-page-error>
@endsection