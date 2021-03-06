@extends('backend.layouts.app')

@section('title', 'Add view')

@section('content')
    {{ html()->form('POST', route('view.store'))->class('form-horizontal')->open() }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        View Managment
                        <small class="text-muted">Add view</small>
                    </h4>
                </div><!--col-->
            </div><!--row-->

            <hr>

            <div class="row mt-4">
                <div class="col">
                    <div class="form-group row">
                        {{ html()->label('view_ID')
                            ->class('col-md-1 form-control-label')
                            ->for('view_id') }}

                        <div class="col-md-3">
                            {{ html()->input('number','view_id')
                                ->class('form-control')
                                ->placeholder('view_id')
                                ->attribute('min', 1)
                                ->required()
                                ->autofocus() }}
                        </div><!--col-->
                    </div><!--form-group-->

                    <div class="form-group row">
                        {{ html()->label('Name')
                            ->class('col-md-1 form-control-label')
                            ->for('name') }}

                        <div class="col-md-3">
                            {{ html()->text('name')
                                ->class('form-control')
                                ->placeholder('name')
                                ->required() }}
                        </div><!--col-->
                    </div><!--form-group-->
                </div><!--col-->
            </div><!--row-->
        </div><!--card-body-->

        <div class="card-footer">
            <div class="row">
                <div class="col">
                    {{ form_cancel(route('view.index'), 'Cancel') }}
                </div><!--col-->

                <div class="col text-right">
                    {{ form_submit('Submit') }}
                </div><!--col-->
            </div><!--row-->
        </div><!--card-footer-->
    </div><!--card-->
    {{ html()->form()->close() }}
@endsection

@push('after-scripts')

    <script>

    </script>

@endpush
