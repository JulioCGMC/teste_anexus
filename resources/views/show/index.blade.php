@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/tree.css') }}" rel="stylesheet">
@endpush
@php
    function getTreeData($root) {
        // Init and add root
        $html = "<li>
                <a href='#' data-toggle='tooltip' data-placement='top' data-html='true' title='Pontos individuais: ".$root->points."<br>Pontos totais: ".$root->getAllPoints()."'>
                    ".$root->user->name."
                </a>";
        if ($root->indicatedLeft != null) {
            $html .= "<ul>";
            // Get left child recursively
            $html .= getTreeData($root->indicatedLeft);
            if ($root->indicatedRight != null) {
                // Get right child recursively
                $html .= getTreeData($root->indicatedRight);
            }
            $html .= "</ul>";
        }
        // Close root
        $html .= "</li>";
        return $html;
    }
@endphp
@section('content')
    @include('layouts.header')
    <div class="relative items-top min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-top pb-4 sm:pt-0">
        <div class="text-white font-weight-bold h3">
            <div class="row mx-0 justify-content-around">
                <div class="col-md-3 border-primary-x border-primary-bottom">
                    <div class="mx-4 my-2">
                        Pontos do meu primeiro indicado: {{ $common->getLeftPoints() }}
                    </div>
                </div>
                <div class="col-md-3 border-primary-x border-primary-bottom">
                    <div class="my-2 text-md-center mx-md-0 mx-4">
                        Meus pontos: {{ $common->getAllPoints() }}
                    </div>
                </div>
                <div class="col-md-3 border-primary-x border-primary-bottom">
                    <div class="mx-4 my-2">
                        Pontos do meu segundo indicado: {{ $common->getRightPoints() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5"></div>
        <div class="d-flex justify-content-center">
            <div class="tree">
                <ul>{!! getTreeData($common) !!}</ul>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endpush