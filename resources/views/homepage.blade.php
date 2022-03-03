@extends('layouts.general')

@section('title', 'Home')

@section('content')
    <div class="main_content container-fluid">
        <div class="container position-relative">
            <div class="current_series position-absolute">
                <p class="text-white">current series</p>
            </div>

            <div class="card_box d-flex justify-content-between flex-wrap">
                @foreach ($data as $card)
                    <div class="single_card">
                        <div class="card_img">
                            <img src="{{$card['thumb']}}" alt="">
                        </div>
                                
                        <div class="card_title">
                            <p class="text-white">{{ $card['series'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="load_more d-flex justify-content-center align-items-center">
                <div class="load_button">
                    <p class="text-white">load more</p>
                </div>   
            </div>
        </div>         
    </div>
@endsection

@section('infoLinks')
    @include('partials.infoLinks')
@endsection