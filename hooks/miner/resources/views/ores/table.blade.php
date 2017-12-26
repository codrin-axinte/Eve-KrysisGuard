@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
                <div class="nk-box-3 bg-dark-1">
                    <h2 class="nk-title h3 text-center">
                        Mining Solution
                    </h2>
                    <div class="nk-gap-2"></div>
                    <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Volume</th>
                                    <th>Volume</th>
                                    <th>M3/Minute</th>
                                    <th>Full Cargo Amount</th>
                                    <th>Isk/Cargo</th>
                                    <th>Isk/Hour</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rows as $row)
                                <tr>
                                    <td>{{ $row['name'] }}</td>                    
                                    <td>{{ $row['volume'] }}</td>                    
                                    <td>{{ $row['price'] }}</td>                    
                                    <td>{{ $row['am'] }}</td>                    
                                    <td>{{ $row['fullCargoAmount'] }}</td>                    
                                    <td>{{ $row['iskPerCargo'] }}</td>
                                    <td class="text-main-1">{{ $row['iskPerHour'] }}</td>                                        
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>      
        </div>
    </div>    
</div>
<div class="nk-gap-4"></div>
@endsection