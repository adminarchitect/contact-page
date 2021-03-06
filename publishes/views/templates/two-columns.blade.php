@extends('contacts::layout')

@section('contacts.content')
    <div class="contacts__title">Contact Us</div>

    @include('contacts::header')

    <div class="row">
        <div class="col-lg-4">
            @if (($departments = $contacts->departments()) && $departments->count())
                <div>
                    <h4>Departments</h4>

                    <div class="text-left">
                        @each('contacts::department', $departments, 'department')
                    </div>
                </div>
            @endif
        </div>
        <div class="col-lg-8" id="contacts__map"></div>
    </div>
@append

@include('contacts::js')