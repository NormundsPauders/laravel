@extends('layouts/layout')
@section('title','Kontakti')
@section('asideLeft')
    <p>Galerija:</p>
@stop
@section('content')
    <div class="col-md-12 title">
        <h3>Galerija</h3>
    </div>
    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="col-lg-3 col-md-6 col-xs-12 maingallery">
            <a href="{{ url('/') }}/images/orginal/20180907_145517.jpg" data-lightbox="gallery1" data-title="Galerija1" >
                <img src="{{ url('/') }}/images/thumb/20180907_145517.jpg" class="img-responsive gallery"/>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12 maingallery">
            <a href="{{ url('/') }}/images/orginal/20180907_151238.jpg" data-lightbox="gallery1" data-title="Galerija2">
                <img src="{{ url('/') }}/images/thumb/20180907_151238.jpg" class="img-responsive gallery"/>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12 maingallery">
            <a href="{{ url('/') }}/images/orginal/20181018_102948.jpg" data-lightbox="gallery1" data-title="Galerija3">
                <img src="{{ url('/') }}/images/thumb/20181018_102948.jpg" class="img-responsive gallery"/>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-xs-12 maingallery">
            <a href="{{ url('/') }}images/orginal/bitip01.jpg" data-lightbox="gallery1" data-title="Galerija4">
                <img src="{{ url('/') }}/images/thumb/itip01.JPG" class="img-responsive gallery"/>
            </a>
        </div>
    </div>
    </div>
@stop

