@extends('layouts.app')

@section('content')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            @php
                $id = auth()->id();
                @endphp

                <div class="container px-4 py-5" id="featured-3">
                    <h2 class="pb-2 border-bottom">Управляйте своими проектами</h2>
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-2">
                        @if(!empty($id))
                        <div class="feature col">
                            <div class="feature-icon bg-primary bg-gradient">
                                <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
                            </div>
                            <h2>К списку проектов</h2>
                            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                            <a href="{{route('projects.index')}}" class="icon-link">
                                Call to action
                                <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                            </a>
                        </div>
                            <div class="feature col">
                                <div class="feature-icon bg-primary bg-gradient">
                                    <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
                                </div>
                                <h2>Создать новый проект</h2>
                                <p></p>
                                <a href="{{route('projects.create')}}" class="icon-link">
                                    Call to action
                                    <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                                </a>
                            </div>
                            @else
                            <div class="feature col">
                                <div class="feature-icon bg-primary bg-gradient">
                                    <svg class="bi" width="1em" height="1em"><use xlink:href="#collection"></use></svg>
                                </div>
                                <h2>Зарегестрируйтесь!</h2>
                                <p>Зарегестрировавшись, вы получите доступ к функционалу приожения</p>
                                <a href="{{ route('register') }}" class="icon-link">
                                    Зарегистрироваться
                                    <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                                </a>
                            </div>
                            <div class="feature col">
                                <div class="feature-icon bg-primary bg-gradient">
                                    <svg class="bi" width="1em" height="1em"><use xlink:href="#people-circle"></use></svg>
                                </div>
                                <h2>Или войдите в свой аккаунт</h2>
                                <p>Авторизируйтесь чтобы посмотреть свои задачи  и проекты</p>
                                <a href="{{ route('login') }}" class="icon-link">
                                    Войти
                                    <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
                                </a>
                            </div>
                        @endif


                    </div>
                </div>

                </div>
@endsection


