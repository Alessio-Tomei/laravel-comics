@extends('layouts.app')

@section('main')
    <main>
        <div class="jumbotron">
            <img src="{{asset('images/jumbotron.jpg')}}" alt="">
        </div>
        <div class="container">
            <section class="current-series">
                <p class="section-title">CURRENT SERIES</p>
                <div class="comics-container">
                    @foreach ($comicsArray as $comics)
                        <div class="comics-box">
                            <div class="img-container">
                                <img src="{{$comics['thumb']}}" alt="">
                            </div>
                            <p>{{$comics['series']}}</p>
                        </div>
                    @endforeach
                    {{-- <ComicsBox v-for="(comics, index) in comicsArray" :key="index" :comicsObj="comics"/>
                    <div class="comics-box">
                        <div class="img-container">
                            <img :src="comicsObj.thumb" alt="">
                        </div>
                        <p>{{comicsObj.series}}</p>
                    </div> --}}
                </div>
            </section>
        </div>
    </main>  
@endsection