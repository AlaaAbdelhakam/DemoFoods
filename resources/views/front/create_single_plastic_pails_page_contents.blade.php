
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
                                <li class="breadcrumb-item active">  Change single_plastic_pails_page_contents
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
                                    <h4 class="card-title" id="basic-layout-form">single_plastic_pails_page_contents </h4>
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
                                              action="{{route('insert_single_plastic_pails_page_contents_page')}}"
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

                                                <h4 class="form-section"><i class="ft-home"></i> insert_SinglePlasticPailsPageContent_page </h4>
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
                                                            <label for="projectinput1"> PPailsitem
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('PPailsitem')}}"
                                                                   name="PPailsitem">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> PPailsbrand
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('PPailsbrand')}}"
                                                                   name="PPailsbrand">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> PPailscasepack
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('PPailscasepack')}}"
                                                                   name="PPailscasepack">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> PPailsorigin
                                                                 </label>
                                                            <input type="text"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('PPailsorigin')}}"
                                                                   name="PPailsorigin">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>




                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> PPailsingridients
                                                             </label>
                                                        <input type="text"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('PPailsingridients')}}"
                                                               name="PPailsingridients">
                                                        @error("name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> PPailssealedshelflife
                                                             </label>
                                                        <input type="text"
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('PPailssealedshelflife')}}"
                                                               name="PPailssealedshelflife">
                                                        @error("name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>







                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> PPailsstorage
                                                         </label>
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="  "
                                                           value="{{old('PPailsstorage')}}"
                                                           name="PPailsstorage">
                                                    @error("name")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> PPailsattributes
                                                         </label>
                                                    <input type="text"
                                                           class="form-control"
                                                           placeholder="  "
                                                           value="{{old('PPailsattributes')}}"
                                                           name="PPailsattributes">
                                                    @error("name")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>









                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> PPailsdrainedweight
                                                     </label>
                                                <input type="text"
                                                       class="form-control"
                                                       placeholder="  "
                                                       value="{{old('PPailsdrainedweight')}}"
                                                       name="PPailsdrainedweight">
                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> PPailsgrosscaseweight
                                                     </label>
                                                <input type="text"
                                                       class="form-control"
                                                       placeholder="  "
                                                       value="{{old('PPailsgrosscaseweight')}}"
                                                       name="PPailsgrosscaseweight">
                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>






                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1"> PPailscasedimensions
                                                 </label>
                                            <input type="text"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('PPailscasedimensions')}}"
                                                   name="PPailscasedimensions">
                                            @error("name")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1"> PPailscasecube
                                                 </label>
                                            <input type="text"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('PPailscasecube')}}"
                                                   name="PPailscasecube">
                                            @error("name")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>







                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput1"> PPailstihi
                                             </label>
                                        <input type="text"
                                               class="form-control"
                                               placeholder="  "
                                               value="{{old('PPailstihi')}}"
                                               name="PPailstihi">
                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput1"> PPailsallergens
                                             </label>
                                        <input type="text"
                                               class="form-control"
                                               placeholder="  "
                                               value="{{old('PPailsallergens')}}"
                                               name="PPailsallergens">
                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                <div class="form-group">
                                <label for="">img_PPailsfirst</label>
                                <input type="file" name="img_PPailsfirst" class="form-control" placeholder="ارفق صورة">
                            </div>



            <div class="form-group">
                            <label for="">img_PPailssecond</label>
                            <input type="file" name="img_PPailssecond" class="form-control" placeholder="ارفق صورة">
                        </div>

                    </div>
                    <div class="col-md-6">

        <div class="form-group">
                        <label for="">img_PPailsthird</label>
                        <input type="file" name="img_PPailsthird" class="form-control" placeholder="ارفق صورة">
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
