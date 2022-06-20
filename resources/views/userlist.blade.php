@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">使用者名單，歡迎 {{ Auth::user()->name }}</div>

                    <div class="card-body">

                        <div class="alert  alert-success " role="alert">
                            <div class="top-name d-flex justify-content-between   border border-success  border-bottom-0 "
                                style="text-align: center;font-size:20px">

                                <div class="id w-100 " style="border-right: 1px solid #6c757d;">

                                    編號
                                </div>
                                <div class="name w-100" style="border-right: 1px solid #6c757d;">

                                    名子

                                </div>
                                <div class="email w-100 ">

                                    Email

                                </div>
                            </div>

                            <div class=" border border-success  border-bottom-0"style="text-align: center;font-size:20px;">


                                @foreach ($users as $user)
                                    @if (Auth::user()->id == $user->id)
                                        <div class="id  w-100 d-flex justify-content-between">
                                            <div class="name w-100  "
                                                style="border-right: 1px solid #6c757d; background-color:red;">
                                                {{ $user->id }}
                                            </div>
                                            <div class="name  w-100  "
                                                style="border-right: 1px solid #6c757d; background-color:red;">
                                                {{ $user->name }}
                                            </div>
                                            <div class="name  w-100  " style=" background-color:red;">
                                                {{ $user->email }}
                                            </div>
                                        </div>
                                    @else
                                        <div class="id  w-100 d-flex justify-content-between">
                                            <div class="name w-100  "
                                                style="border-bottom: 1px solid #6c757d;border-right: 1px solid #6c757d;">

                                                {{ $user->id }}
                                            </div>
                                            <div class="name  w-100 "
                                                style="border-bottom: 1px solid #6c757d;border-right: 1px solid #6c757d;">

                                                {{ $user->name }}
                                            </div>
                                            <div class="name  w-100 " style="border-bottom: 1px solid #6c757d;">

                                                {{ $user->email }}
                                            </div>
                                        </div>
                                    @endif
                                @endforeach





                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
