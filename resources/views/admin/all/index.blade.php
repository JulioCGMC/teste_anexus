@extends('layouts.app')
@push('styles')
    <link href="{{ asset('css/tree.css') }}" rel="stylesheet">
@endpush
@php
    function getTreeData($root) {
        // Init and add root
        $html = "<li>
                <a href='".route('admin.show',$root->id)."' data-toggle='tooltip' data-placement='top' data-html='true' title='Pontos individuais: ".$root->points."<br>Pontos totais: ".$root->getAllPoints()."'>
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
        @for ($i = 0; $i < $roots->count(); $i=$i+2) 
            <div class="d-flex flex-wrap justify-content-center">
                <div class="col-md-6 d-flex justify-content-center border-primary-x border-primary-bottom">
                    <div class="tree my-4">
                        <ul>{!! getTreeData($roots[$i]) !!}</ul>
                    </div>
                </div>
                @if ($i+1 < $roots->count())
                    <div class="col-md-6 d-flex justify-content-center border-primary-x border-primary-bottom">
                        <div class="tree my-4">
                            <ul>{!! getTreeData($roots[$i+1]) !!}</ul>
                        </div>
                    </div>
                @endif
            </div>
        @endfor
    </div>
@endsection
@push('scripts')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endpush