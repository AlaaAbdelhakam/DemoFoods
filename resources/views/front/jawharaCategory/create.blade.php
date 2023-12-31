@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> categories </a>
                                </li>
                                <li class="breadcrumb-item active"> add category
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> add category </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{ route('admin.category.store') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf



                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i> </h4>
                                                <div class="row">
                                                    {{-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> 
                                                            </label>
                                                            <input type="number" id="capacity" class="form-control"
                                                                placeholder="  " value="{{ old('capacity') }}" name="capacity">
                                                            @error('capacity')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div> --}}

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> name                                                            </label>
                                                            <input type="text" id="title" class="form-control"
                                                                placeholder="  " value="{{ old('title') }}" name="title">
                                                            @error('plate_no')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> description                                                            </label>
                                                            <input type="text" id="description" class="form-control"
                                                                placeholder="  " value="{{ old('description') }}" name="description">
                                                            @error('plate_no')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label for="">image</label>
                                                    <input type="file" name="image" class="form-control" placeholder="ارفق صورة">
                                                </div>
                                                {{-- <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اختر الموديل
                                                            </label>
                                                            <select name="car_model_id" class="select1 form-control">
                                                                <optgroup label="من فضلك أختر الموديل ">
                                                                        @foreach ($models as $model)
                                                                            <option value="{{ $model->id }}">
                                                                                {{ $model->car_model_name }}</option>
                                                                        @endforeach
                                                                </optgroup>
                                                            </select>
                                                            @error('car_model_id')
                                                                <span class="text-danger"> {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> كود السيارة
                                                            </label>
                                                            <input type="text" id="car_code" class="form-control"
                                                                placeholder="  " value="{{ old('car_code') }}" name="car_code">
                                                            @error('car_code')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div> --}}
                                                {{-- <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> كمية استهلاك السولار لكل100 كم
                                                            </label>
                                                            <input type="number" id="expected_amount_of_solar_for_100Km" class="form-control"
                                                                placeholder="  " value="{{ old('expected_amount_of_solar_for_100Km') }}" name="expected_amount_of_solar_for_100Km">
                                                            @error('expected_amount_of_solar_for_100Km')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                    <i class="ft-x"></i> back
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> save
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@stop
