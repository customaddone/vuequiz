@extends('layouts.layouts')

@section('content')
    @component('components.navbar')
    @endcomponent

　　 <div class="uk-container">
        <div class="uk-section-xsmall">
            <div class="uk-card uk-card-default uk-border-rounded">
                <div class="uk-card-header">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <h3 class="uk-card-title uk-margin-remove-bottom">Laravel</h3>
                            <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body">
                    <input name="addvalue" class="uk-input uk-width-2-3"　type="text" placeholder="・Add Task">
                    <button name="addbutton" class="uk-button uk-button-primary uk-float-right uk-border-rounded">ADD</button>
                </div>
                <div>
                    <ul class="uk-list uk-list-striped" uk-accordion>
                        <li class="">
                            <a uk-icon="icon: pencil; ratio: 1.5" class="uk-margin-left uk-logo uk-float-right">
                            <a uk-icon="icon: trash; ratio: 1.5" class="uk-margin-left uk-logo uk-float-right">
                            <a class="uk-accordion-title" href="#">・Item 1</a>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
