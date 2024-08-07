
@extends('layout.main')   <!-- what so-ever surrounds the yield extends from the layout-->




@section('content')   <!--  the yield extends here-->

<!-- 3 rolls - Cool Fashion -->
@include('includes.fashion-section1')
<!-- lil fashion -->
@include('includes.fashion-section2')
<!-- vendor owners -->
@include('includes.fashion-section3')
<!-- Featured Products -->
@include('includes.fashion-section4')

@endsection



