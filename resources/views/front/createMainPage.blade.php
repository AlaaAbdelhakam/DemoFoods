
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
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Main Page </a>
                                </li>
                                <li class="breadcrumb-item active">  Change Main Page Content
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
                                    <h4 class="card-title" id="basic-layout-form">Make New Main Page </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
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
                                        <form class="form"
                                              action="{{route('insertMainPage')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            {{-- <div class="form-group">
                                                <label> صوره الماركة </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> --}}

                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i> Your Main Page </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> main_page_title_first
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('main_page_title_first')}}"
                                                                   name="main_page_title_first">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> slogan_first
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('slogan_first')}}"
                                                                   name="slogan_first">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                    <div class="form-group">
                                                    <label for="">img_first</label>
                                                    <input type="file" name="img_first" class="form-control" placeholder="ارفق صورة">
                                                </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> main_page_title_second
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('main_page_title_second')}}"
                                                                   name="main_page_title_second">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> slogan_second
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('slogan_second')}}"
                                                                   name="slogan_second">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                    <div class="form-group">
                                                    <label for="">img_second</label>
                                                    <input type="file" name="img_second" class="form-control" placeholder="ارفق صورة">
                                                </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> main_page_title_third
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('main_page_title_third')}}"
                                                                   name="main_page_title_third">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> slogan_third
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('slogan_third')}}"
                                                                   name="slogan_third">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                    <div class="form-group">
                                                    <label for="">img_third</label>
                                                    <input type="file" name="img_third" class="form-control" placeholder="ارفق صورة">
                                                </div>





{{--


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> category_first_title_1
                                                             </label>
                                                        <input type="text"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('category_first_title_1')}}"
                                                               name="category_first_title_1">
                                                        @error("name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> category_first_description_1
                                                             </label>
                                                        <input type="text"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('category_first_description_1')}}"
                                                               name="category_first_description_1">
                                                        @error("name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>


                                <div class="form-group">
                                                <label for="">img_first_categoryone</label>
                                                <input type="file" name="img_first_categoryone" class="form-control" placeholder="ارفق صورة">
                                            </div>









                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> category_first_title_2
                                                         </label>
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="  "
                                                           value="{{old('category_first_title_2')}}"
                                                           name="category_first_title_2">
                                                    @error("name")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> category_first_description_2
                                                         </label>
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="  "
                                                           value="{{old('category_first_description_2')}}"
                                                           name="category_first_description_2">
                                                    @error("name")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>


                            <div class="form-group">
                                            <label for="">img_second_categoryone</label>
                                            <input type="file" name="img_second_categoryone" class="form-control" placeholder="ارفق صورة">
                                        </div>










                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> category_first_title_3
                                                     </label>
                                                <input type="text"
                                                       class="form-control"
                                                       placeholder="  "
                                                       value="{{old('category_first_title_3')}}"
                                                       name="category_first_title_3">
                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> category_first_description_3
                                                     </label>
                                                <input type="text"
                                                       class="form-control"
                                                       placeholder="  "
                                                       value="{{old('category_first_description_3')}}"
                                                       name="category_first_description_3">
                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>


                        <div class="form-group">
                                        <label for="">img_third_categoryone</label>
                                        <input type="file" name="img_third_categoryone" class="form-control" placeholder="ارفق صورة">
                                    </div>







                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1"> category_second_title_1
                                                 </label>
                                            <input type="text"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('category_second_title_1')}}"
                                                   name="category_second_title_1">
                                            @error("name")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1"> category_second_description_1
                                                 </label>
                                            <input type="text"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('category_second_description_1')}}"
                                                   name="category_second_description_1">
                                            @error("name")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>


                    <div class="form-group">
                                    <label for="">img_first_categorytwo</label>
                                    <input type="file" name="img_first_categorytwo" class="form-control" placeholder="ارفق صورة">
                                </div>








                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput1"> category_second_title_2
                                             </label>
                                        <input type="text"
                                               class="form-control"
                                               placeholder="  "
                                               value="{{old('category_second_title_2')}}"
                                               name="category_second_title_2">
                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput1"> category_second_description_2
                                             </label>
                                        <input type="text"
                                               class="form-control"
                                               placeholder="  "
                                               value="{{old('category_second_description_2')}}"
                                               name="category_second_description_2">
                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>


                <div class="form-group">
                                <label for="">img_second_categorytwo</label>
                                <input type="file" name="img_second_categorytwo" class="form-control" placeholder="ارفق صورة">
                            </div>









                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projectinput1"> category_second_title_3
                                         </label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder="  "
                                           value="{{old('category_second_title_3')}}"
                                           name="category_second_title_3">
                                    @error("name")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="projectinput1"> category_second_description_3
                                         </label>
                                    <input type="text"
                                           class="form-control"
                                           placeholder="  "
                                           value="{{old('category_second_description_3')}}"
                                           name="category_second_description_3">
                                    @error("name")
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>


            <div class="form-group">
                            <label for="">img_third_categorytwo</label>
                            <input type="file" name="img_third_categorytwo" class="form-control" placeholder="ارفق صورة">
                        </div>








                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="projectinput1"> category_third_title_1
                                     </label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="  "
                                       value="{{old('category_third_title_1')}}"
                                       name="category_third_title_1">
                                @error("name")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="projectinput1"> category_third_description_1
                                     </label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="  "
                                       value="{{old('category_third_description_1')}}"
                                       name="category_third_description_1">
                                @error("name")
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>


        <div class="form-group">
                        <label for="">img_first_categorythree</label>
                        <input type="file" name="img_first_categorythree" class="form-control" placeholder="ارفق صورة">
                    </div>








                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="projectinput1"> category_third_title_2
                                 </label>
                            <input type="text"
                                   class="form-control"
                                   placeholder="  "
                                   value="{{old('category_third_title_2')}}"
                                   name="category_third_title_2">
                            @error("name")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="projectinput1"> category_third_description_2
                                 </label>
                            <input type="text"
                                   class="form-control"
                                   placeholder="  "
                                   value="{{old('category_third_description_2')}}"
                                   name="category_third_description_2">
                            @error("name")
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


    <div class="form-group">
                    <label for="">img_second_categorythree</label>
                    <input type="file" name="img_second_categorythree" class="form-control" placeholder="ارفق صورة">
                </div>








                <div class="col-md-6">
                    <div class="form-group">
                        <label for="projectinput1"> category_third_title_3
                             </label>
                        <input type="text"
                               class="form-control"
                               placeholder="  "
                               value="{{old('category_third_title_3')}}"
                               name="category_third_title_3">
                        @error("name")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="projectinput1"> category_third_description_3
                             </label>
                        <input type="text"
                               class="form-control"
                               placeholder="  "
                               value="{{old('category_third_description_3')}}"
                               name="category_third_description_3">
                        @error("name")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>


<div class="form-group">
                <label for="">img_third_categorythree</label>
                <input type="file" name="img_third_categorythree" class="form-control" placeholder="ارفق صورة">
            </div>
 --}}




























                                                </div>

                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="form-group ml-1">
                                        <label for="">PDF</label>
                                        <form class="form"
                                        action="{{route('file.store')}}"
                                        method="POST"
                                        enctype="multipart/form-data">
                                      @csrf
                                      <div class="row ">
                                        <div class="col-md-7">
                                      <input type="file" name="catalogpdf" class="form-control" placeholder="ارفق صورة">

                                            <button type="submit" class="btn btn-primary mt-3">
                                                    <i class="la la-check-square-o"></i> submit
                                                </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-5"></div>
                                     </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

    @endsection

    {{-- @section('scripts')
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker2').datetimepicker({
                locale: 'en'
            });
        });
     </script>
    @endsection --}}
