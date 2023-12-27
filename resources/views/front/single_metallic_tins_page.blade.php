
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
                                <li class="breadcrumb-item active">  Change single_metallic_tins_page_contents
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
                                    <h4 class="card-title" id="basic-layout-form">single_metallic_tins_page_contents </h4>
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
                                              action="{{route('insert_single_metallic_tins_page_contents')}}"
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

                                                <h4 class="form-section"><i class="ft-home"></i> insert_single_metallic_tins_page_contents </h4>
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
                                                            <label for="projectinput1">MTitem
                                                                 </label>
                                                            <input type="text" 
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('MTitem')}}"
                                                                   name="MTitem">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> MTbrand
                                                                 </label>
                                                            <input type="text" 
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('MTbrand')}}"
                                                                   name="MTbrand">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                               
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> MTcasepack
                                                                 </label>
                                                            <input type="text" 
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('MTcasepack')}}"
                                                                   name="MTcasepack">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> MTorigin
                                                                 </label>
                                                            <input type="text" 
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('MTorigin')}}"
                                                                   name="MTorigin">
                                                            @error("name")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                  


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> MTingridients
                                                             </label>
                                                        <input type="text" 
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('MTingridients')}}"
                                                               name="MTingridients">
                                                        @error("name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> MTsealedshelflife
                                                             </label>
                                                        <input type="text" 
                                                               class="form-control"
                                                               placeholder="  "
                                                               value="{{old('MTsealedshelflife')}}"
                                                               name="MTsealedshelflife">
                                                        @error("name")
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                    
            




                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> MTstorage
                                                         </label>
                                                    <input type="text" 
                                                           class="form-control"
                                                           placeholder="  "
                                                           value="{{old('MTstorage')}}"
                                                           name="MTstorage">
                                                    @error("name")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="projectinput1"> MTattributes
                                                         </label>
                                                    <input type="text" 
                                                           class="form-control"
                                                           placeholder="  "
                                                           value="{{old('MTattributes')}}"
                                                           name="MTattributes">
                                                    @error("name")
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                
                   






                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> MTdrainedweight
                                                     </label>
                                                <input type="text" 
                                                       class="form-control"
                                                       placeholder="  "
                                                       value="{{old('MTdrainedweight')}}"
                                                       name="MTdrainedweight">
                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput1"> MTgrosscaseweight
                                                     </label>
                                                <input type="text" 
                                                       class="form-control"
                                                       placeholder="  "
                                                       value="{{old('MTgrosscaseweight')}}"
                                                       name="MTgrosscaseweight">
                                                @error("name")
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
            





                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1"> MTcasedimensions
                                                 </label>
                                            <input type="text" 
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('MTcasedimensions')}}"
                                                   name="MTcasedimensions">
                                            @error("name")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1"> MTcasecube
                                                 </label>
                                            <input type="text" 
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('MTcasecube')}}"
                                                   name="MTcasecube">
                                            @error("name")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                        
                




                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput1"> MTtihi
                                             </label>
                                        <input type="text" 
                                               class="form-control"
                                               placeholder="  "
                                               value="{{old('MTtihi')}}"
                                               name="MTtihi">
                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="projectinput1"> MTallergens
                                             </label>
                                        <input type="text" 
                                               class="form-control"
                                               placeholder="  "
                                               value="{{old('MTallergens')}}"
                                               name="MTallergens">
                                        @error("name")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                <div class="form-group">
                                <label for="">img_MTfirst</label>
                                <input type="file" name="img_MTfirst" class="form-control" placeholder="ارفق صورة">
                            </div>


                
            <div class="form-group">
                            <label for="">img_MTsecond</label>
                            <input type="file" name="img_MTsecond" class="form-control" placeholder="ارفق صورة">
                        </div>

                    </div>
                    <div class="col-md-6">

        <div class="form-group">
                        <label for="">img_MTthird</label>
                        <input type="file" name="img_MTthird" class="form-control" placeholder="ارفق صورة">
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
                                {{-- @error('jawharacategories_id')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror --}}
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