
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
                                <li class="breadcrumb-item active">  Change single_glass_jar_page Content
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
                                    <h4 class="card-title" id="basic-layout-form">create_single_glass_jar_page </h4>
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
                                              action="{{route('insert_single_plastic_barrels_page_contents_page')}}"
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

                                                <h4 class="form-section"><i class="ft-home"></i> insert_single_plastic_barrels_page_contents_page </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> title
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('title')}}"
                                                                   name="title">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> description
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('description')}}"
                                                                   name="description">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>




                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> PBitem
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('PBitem')}}"
                                                                   name="PBitem">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> PBbrand
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('PBbrand')}}"
                                                                   name="PBbrand">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> PBcasepack
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('PBcasepack')}}"
                                                                   name="PBcasepack">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> PBorigin
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('PBorigin')}}"
                                                                   name="PBorigin">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>




                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> PBingridients
                                                             </label>
                                                        <input type="text"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('PBingridients')}}"
                                                               name="PBingridients">
                                                        @error("name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> PBsealedshelflife
                                                             </label>
                                                        <input type="text"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('PBsealedshelflife')}}"
                                                               name="PBsealedshelflife">
                                                        @error("name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>







                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> PBstorage
                                                         </label>
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="  "
                                                           value="{{old('PBstorage')}}"
                                                           name="PBstorage">
                                                    @error("name")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> PBattributes
                                                         </label>
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="  "
                                                           value="{{old('PBattributes')}}"
                                                           name="PBattributes">
                                                    @error("name")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>









                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> PBdrainedweight
                                                     </label>
                                                <input type="text"
                                                       class="form-control"
                                                       placeholder="  "
                                                       value="{{old('PBdrainedweight')}}"
                                                       name="PBdrainedweight">
                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> PBgrosscaseweight
                                                     </label>
                                                <input type="text"
                                                       class="form-control"
                                                       placeholder="  "
                                                       value="{{old('PBgrosscaseweight')}}"
                                                       name="PBgrosscaseweight">
                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>






                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1"> PBcasedimensions
                                                 </label>
                                            <input type="text"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('PBcasedimensions')}}"
                                                   name="PBcasedimensions">
                                            @error("name")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1"> PBcasecube
                                                 </label>
                                            <input type="text"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('PBcasecube')}}"
                                                   name="PBcasecube">
                                            @error("name")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>







                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput1"> PBtihi
                                             </label>
                                        <input type="text"
                                               class="form-control"
                                               placeholder="  "
                                               value="{{old('PBtihi')}}"
                                               name="PBtihi">
                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput1"> PBallergens
                                             </label>
                                        <input type="text"
                                               class="form-control"
                                               placeholder="  "
                                               value="{{old('PBallergens')}}"
                                               name="PBallergens">
                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                <div class="form-group">
                                <label for="">img_PBfirst</label>
                                <input type="file" name="img_PBfirst" class="form-control" placeholder="ارفق صورة">
                            </div>



            <div class="form-group">
                            <label for="">img_PBsecond</label>
                            <input type="file" name="img_PBsecond" class="form-control" placeholder="ارفق صورة">
                        </div>

                    </div>
                    <div class="col-md-6">

        <div class="form-group">
                        <label for="">img_PBthird</label>
                        <input type="file" name="img_PBthird" class="form-control" placeholder="ارفق صورة">
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="projectinput1"> choose product
                                </label>
                                <select name="jawharacproducts_id" class="select1 form-control">
                                    <optgroup label="من فضلك أختر الموديل ">
                                            @foreach ($models as $product)
                                                <option value="{{ $product->id }}">
                                                    {{ $product->title }}</option>
                                            @endforeach
                                    </optgroup>
                                </select>
                                @error('jawharacategories_id')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        </div>

                    </div>





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
