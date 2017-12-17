@extends('layouts.master')

@section('title', 'Ore Calculator')

@section('content')
    <div class="nk-gap-4"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ore-table :ores="{{ $ores->toJson() }}"></ore-table>
            </div>
            <div class="nk-gap-6"></div>
        </div>
    </div>
    <div class="nk-gap-4"></div>
@endsection