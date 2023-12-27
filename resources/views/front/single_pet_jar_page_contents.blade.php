
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
                                <li class="breadcrumb-item active">  Change single_pet_jar_page_contents
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
                                    <h4 class="card-title" id="basic-layout-form">single_pet_jar_page_contents </h4>
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
                                              action="{{route('insert_single_pet_jar_page_contents')}}"
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

                                                <h4 class="form-section"><i class="ft-home"></i> insert_single_pet_jar_page_contents </h4>
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
                                                            <label for="projectinput1"> PJitem
                                                                 </label>
                                                            <input type="text" 
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('PJitem')}}"
                                                                   name="PJitem">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> PJbrand
                                                                 </label>
                                                            <input type="text" 
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('PJbrand')}}"
                                                                   name="PJbrand">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                               
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> PJcasepack
                                                                 </label>
                                                            <input type="text" 
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('PJcasepack')}}"
                                                                   name="PJcasepack">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> PJorigin
                                                                 </label>
                                                            <input type="text" 
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('PJorigin')}}"
                                                                   name="PJorigin">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                  


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> PJingridients
                                                             </label>
                                                        <input type="text" 
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('PJingridients')}}"
                                                               name="PJingridients">
                                                        @error("name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> PJsealedshelflife
                                                             </label>
                                                        <input type="text" 
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('PJsealedshelflife')}}"
                                                               name="PJsealedshelflife">
                                                        @error("name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                    
            




                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> PJstorage
                                                         </label>
                                                    <input type="text" 
                                                           class="form-control"
                                                           placeholder="  "
                                                           value="{{old('PJstorage')}}"
                                                           name="PJstorage">
                                                    @error("name")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> PJattributes
                                                         </label>
                                                    <input type="text" 
                                                           class="form-control"
                                                           placeholder="  "
                                                           value="{{old('PJattributes')}}"
                                                           name="PJattributes">
                                                    @error("name")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                
                   






                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> PJdrainedweight
                                                     </label>
                                                <input type="text" 
                                                       class="form-control"
                                                       placeholder="  "
                                                       value="{{old('PJdrainedweight')}}"
                                                       name="PJdrainedweight">
                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> PJgrosscaseweight
                                                     </label>
                                                <input type="text" 
                                                       class="form-control"
                                                       placeholder="  "
                                                       value="{{old('PJgrosscaseweight')}}"
                                                       name="PJgrosscaseweight">
                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
            





                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1"> PJcasedimensions
                                                 </label>
                                            <input type="text" 
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('PJcasedimensions')}}"
                                                   name="PJcasedimensions">
                                            @error("name")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1"> PJcasecube
                                                 </label>
                                            <input type="text" 
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('PJcasecube')}}"
                                                   name="PJcasecube">
                                            @error("name")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                        
                




                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput1"> PJtihi
                                             </label>
                                        <input type="text" 
                                               class="form-control"
                                               placeholder="  "
                                               value="{{old('PJtihi')}}"
                                               name="PJtihi">
                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput1"> PJallergens
                                             </label>
                                        <input type="text" 
                                               class="form-control"
                                               placeholder="  "
                                               value="{{old('PJallergens')}}"
                                               name="PJallergens">
                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                <div class="form-group">
                                <label for="">img_PJfirst</label>
                                <input type="file" name="img_PJfirst" class="form-control" placeholder="ارفق صورة">
                            </div>


                
            <div class="form-group">
                            <label for="">img_PJsecond</label>
                            <input type="file" name="img_PJsecond" class="form-control" placeholder="ارفق صورة">
                        </div>

                    </div>
                    <div class="col-md-6">

        <div class="form-group">
                        <label for="">img_PJthird</label>
                        <input type="file" name="img_PJthird" class="form-control" placeholder="ارفق صورة">
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