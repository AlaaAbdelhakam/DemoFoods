@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Main </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.users') }}"> users </a>
                                </li>
                                <li class="breadcrumb-item active"> add new user
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
                                    <h4 class="card-title" id="basic-layout-form"> add user </h4>
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
                                        {!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}
                                        {{-- <form class="form"
                                              action="{{route('admin.users.store')}}"
                                              method="POST"
                                              enctype="multipart/form-data"> --}}
                                        @csrf


                                        {{-- <div class="form-group">
                                                <label> صوره القسم </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> --}}

                                        <div class="form-body">

                                            <h4 class="form-section"><i class="ft-home"></i> user details </h4>
                                            {{-- <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput2"> أختر النوع </label>
                                                            {{-- <select name="parent_id" class="select2 form-control">
                                                                <optgroup label="من فضلك أختر القسم ">
                                                                    @if ($categories && $categories->count() > 0)
                                                                        @foreach ($categories as $category)
                                                                            <option
                                                                                value="{{$category -> id }}">{{$category -> name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </optgroup>
                                                            </select> --}}
                                            {{-- @error('parent_id')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror 
                                                        </div>
                                                    </div>
                                                 </div> --}}

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> name
                                                        </label>
                                                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                                        {{-- <input type="text" id="name"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('name')}}"
                                                                   name="name"> --}}
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> username
                                                        </label>
                                                        <input type="text" id="username" class="form-control"
                                                            placeholder="  " value="{{ old('username') }}" name="username">
                                                        {{-- @error('name')
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> email
                                                        </label>
                                                        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                                                        {{-- <input type="text" id="email"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('email')}}"
                                                                   name="email"> --}}
                                                        {{-- @error('slug')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror --}}
                                                    </div>
                                                </div>



                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> password
                                                        </label>
                                                        {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                                                        {{-- <input type="password" id="password"
                                                                class="form-control"
                                                                placeholder="  "
                                                                value="{{old('password')}}"
                                                                name="password"> --}}
                                                        {{-- @error('slug')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> confirm password
                                                        </label>
                                                        {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                                                        {{-- <input type="password" id="password-confirm"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('password')}}"
                                                               name="password_confirmation"> --}}


                                                        {{-- @error('slug')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                                {{-- <div class="mb-3">
                                                    <label for="role" class="form-label">Role</label> --}}
                                                {{-- <select class="form-control" 
                                                        name="roles" required>
                                                        <option value="">Select role</option>
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->id }}"
                                                                {{ in_array($role->name, $userRole) 
                                                                    ? 'selected'
                                                                    : '' }}>{{ $role->name }}</option>
                                                        @endforeach
                                                    </select> 
                                                    @if ($errors->has('role'))
                                                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                                                    @endif --}}
                                                {{-- </div> --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <div class="mb-3"> --}}
                                                        <label for="role" class="form-label">Role</label>
                                                        {!! Form::select('roles[]', $roles, [], ['class' => 'form-control', 'multiple']) !!}
                                                        {{-- <select class="form-control" 
                                                        name="role" required>
                                                        <option value="">Select role</option>
                                                        @foreach ($roles as $role)
                                                            <option value="{{ $role->id }}"
                                                                {{ in_array($role->name, $userRole) 
                                                                    ? 'selected'
                                                                    : '' }}>{{ $role->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('role'))
                                                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                                                    @endif --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label for="projectinput1"> city
                                                        </label>
                                                        <select name="city_id" class="select1 form-control">
                                                            <optgroup label="من فضلك أختر المدينة ">
                                                                {{-- @if ($models && $models->count() > 0) --}}
                                                                @foreach ($cities as $city)
                                                                    <option value="{{ $city->id }}">
                                                                        {{ $city->city_name }}</option>
                                                                @endforeach
                                                                {{-- @endif --}}
                                                            </optgroup>
                                                        </select>
                                                        @error('city_id')
                                                            <span class="text-danger"> {{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" value="1"
                                                                   name="is_active"
                                                                   id="switcheryColor4"
                                                                   class="switchery" data-color="success"
                                                                   checked/>
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">الحالة </label>

                                                            @error('is_active')
                                                            <span class="text-danger">{{$message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div> --}}
                                    {{-- </div> --}}

                                    {{-- </div> --}}
                                    <div class="form-actions">
                                        <button type="button" class="btn btn-warning mr-1" onclick="history.back();">
                                            <i class="ft-x"></i> Go Back
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Add
                                        </button>
                                    </div>
                                    {{-- </form> --}}
                                    {!! Form::close() !!}

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
