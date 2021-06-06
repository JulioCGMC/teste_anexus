@extends('layouts.app')
@section('content')
    @include('layouts.header')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-8 mx-md-0 mx-1 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg sm:mx-4">
                <div class="d-flex justify-content-center">
                    <div class="card text-white bg-inherit">
                        <!-- Nav tabs -->
                        <div class="card-header pb-0 px-0">
                            <ul class="nav nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold active" data-toggle="tab" href="#signup">Cadastrar-se</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link font-weight-bold" data-toggle="tab" href="#signin">Logar-se</a>
                                </li>
                            </ul>
                        </div>
        
                        <div class="card-body mx-md-5">
                            <div class="tab-content">
                                @include('home._signup_form')
                                @include('home._signin_form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
