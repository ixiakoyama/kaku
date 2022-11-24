@extends('parts.common')


@section('contents')
<div class="innertop-section1">
    @include("parts.header.section")
</div>
<div class="innertop-section2">
    @include("parts.company.company")
</div>
<div class="innertop-section3">
    @include("parts.project.project")
</div>

@endsection