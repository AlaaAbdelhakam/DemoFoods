    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class="nav-item active"><a href=""><span class="menu-title"
                            data-i18n="nav.add_on_drag_drop.main">Dashboard </span></a>
                </li>

                {{-- <li class="nav-item  open ">
                    <a href=""><i class="la la-home"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">لغات الموقع </span>
                        <span class="badge badge badge-info badge-pill float-right mr-2"></span>
                    </a>
                    <ul class="menu-content">
                        <li class="active"><a class="menu-item" href="" data-i18n="nav.dash.ecommerce"> عرض
                                الكل </a>
                        </li>
                        <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                                لغة جديده </a>
                        </li>
                    </ul>
                </li> --}}






                <li class="nav-item"><a href="">
                        @role('superadmin')
                            <span class="menu-title" data-i18n="nav.dash.main"> Menu </span>


                            <span class="badge badge badge-danger badge-pill float-right mr-2">
                                {{-- {{ \App\Models\Brand::count() }} --}}
                            </span>
                        @endrole
                    </a>
                    <ul class="menu-content">
                        {{-- <li class="active"> --}}
                        {{-- <a class="menu-item" href="{{ route('admin.brands') }}"data-i18n="nav.dash.ecommerce">  </a> --}}
                        {{-- @role('superadmin')
                            <li class="active"><a class="menu-item" href="{{ route('admin.carmodel') }}"
                                    data-i18n="nav.dash.ecommerce"> موديلات السيارات </a>
                            </li> --}}
                        {{-- @endrole --}}
                        {{-- @role('superadmin') --}}

                        {{-- <li><a class="menu-item" href="{{ route('admin.carmodel.create') }}"
                                    data-i18n="nav.dash.crypto">اضافة موديل جديد
                                </a>
                            </li> --}}
                        {{-- @role('superadmin') --}}
                        {{-- </li> --}}
                        {{-- <li class="active"><a class="menu-item" href="{{ route('admin.cars') }}"
                            data-i18n="nav.dash.crypto">السيارة </a>
                    </li>
                    <li><a class="menu-item" href="{{ route('admin.cars.create') }}" data-i18n="nav.dash.crypto">أضافة
                            سيارة
                        </a>
                    </li>
                    </li> --}}


                        <li class="nav-item"><a href="">
                                <span class="menu-title" data-i18n="nav.dash.main">categories </span>
                                {{-- <span
                              class="badge badge badge-danger badge-pill float-right mr-2">
                         {{ \App\Models\Category::count() }}
                          </span>  --}}
                            </a>
                            <ul class="menu-content">
                                <li class="active"><a class="menu-item" href="{{ route('admin.category') }}"
                                        data-i18n="nav.dash.ecommerce"> show all </a>
                                </li>
                                <li><a class="menu-item" href="{{ route('admin.category.create') }}"
                                        data-i18n="nav.dash.crypto">add new
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item"><a href="">
                                <span class="menu-title" data-i18n="nav.dash.main">products </span>
                                <span class="badge badge badge-danger badge-pill float-right mr-2">
                                    {{-- {{ \App\Models\Category::child()->count()}} --}}
                            </a>
                            <ul class="menu-content">
                                <li class="active"><a class="menu-item" href="{{ route('admin.product') }}"
                                        data-i18n="nav.dash.ecommerce"> show all </a>
                                </li>
                                <li><a class="menu-item" href="{{ route('admin.product.create') }}"
                                        data-i18n="nav.dash.crypto">add new
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="active"><a class="menu-item" href=""
                                data-i18n="nav.dash.ecommerce">single_glass_jar_page </a>
                        </li>
                        {{-- @endrole
                        @role('superadmin') --}}

                        <li><a class="menu-item" href="{{ route('create_single_glass_jar_page') }}"
                                data-i18n="nav.dash.crypto">
                                create new
                            </a>
                        </li>
                </li>
                <li class="active"><a class="menu-item" href=""
                        data-i18n="nav.dash.ecommerce">single_metallic_tins_page </a>
                </li>
                {{-- @endrole
                        @role('superadmin') --}}

                <li><a class="menu-item" href="{{ route('create_single_metallic_tins_page_contents') }}"
                        data-i18n="nav.dash.crypto">
                        create new
                    </a>
                </li>
                </li>
                <li class="active"><a class="menu-item" href=""
                        data-i18n="nav.dash.ecommerce">single_pet_jar_page_contents </a>
                </li>
                {{-- @endrole
                        @role('superadmin') --}}

                <li><a class="menu-item" href="{{ route('create_single_pet_jar_page_contents') }}"
                        data-i18n="nav.dash.crypto">
                        create new
                    </a>
                </li>
                </li>
                <li class="active"><a class="menu-item" href=""
                        data-i18n="nav.dash.ecommerce">single_plastic_barrels_page_contents </a>
                </li>
                {{-- @endrole
                        @role('superadmin') --}}

                <li><a class="menu-item" href="{{ route('create_single_plastic_barrels_page_content') }}"
                        data-i18n="nav.dash.crypto">
                        create new
                    </a>
                </li>
                </li>
                <li class="active"><a class="menu-item" href=""
                        data-i18n="nav.dash.ecommerce">single_plastic_pails_page_contents </a>
                </li>
                {{-- @endrole
                        @role('superadmin') --}}

                <li><a class="menu-item" href="{{ route('create_single_plastic_pails_page_contents') }}"
                        data-i18n="nav.dash.crypto">
                        create new
                    </a>
                </li>
                </li>
                <li class="active"><a class="menu-item" href=""
                        data-i18n="nav.dash.ecommerce">single_plastic_pouch_page_contents </a>
                </li>
                {{-- @endrole
                        @role('superadmin') --}}

                <li><a class="menu-item" href="{{ route('create_single_plastic_pouch_page_contents') }}"
                        data-i18n="nav.dash.crypto">
                        create new
                    </a>
                </li>
                </li>






                <li class="active"><a class="menu-item" href="" data-i18n="nav.dash.ecommerce"> Main Page content
                    </a>
                </li>
                {{-- @endrole --}}
                {{-- @role('superadmin') --}}

                <li><a class="menu-item" href="{{ route('createMainPage') }}" data-i18n="nav.dash.crypto">
                        Update Content
                    </a>
                </li>
                </li>

                {{-- <li class="active"><a class="menu-item" href="{{ route('admin.company') }}"
                            data-i18n="nav.dash.ecommerce">الشركة المتعامل معها </a>
                    </li> --}}
                {{-- @endrole --}}
                {{-- @role('superadmin') --}}

                {{-- <li><a class="menu-item" href="{{ route('admin.company.create') }}" data-i18n="nav.dash.crypto">أضافة
                            شركة جديدة
                        </a>
                    </li>

                    </li>
                    <li class="active"><a class="menu-item" href="{{ route('admin.city') }}"
                            data-i18n="nav.dash.ecommerce"> المدينة </a>
                    </li> --}}
                {{-- @endrole --}}
                {{-- @role('superadmin') --}}

                {{-- <li><a class="menu-item" href="{{ route('admin.city.create') }}" data-i18n="nav.dash.crypto">أضافة
                            مدينة
                        </a>
                    </li> --}}
                {{-- @endrole --}}
                {{-- <li><a class="menu-item" href="{{ route('search.drivers') }}"
                    data-i18n="nav.dash.crypto">بحث سائق
                </a>
            </li> --}}
                <li class="active"><a class="menu-item" href="{{ route('admin.users') }}"
                        data-i18n="nav.dash.ecommerce"> users </a>
                </li>
                </li>
                <li><a class="menu-item" href="{{ route('admin.users.create') }}" data-i18n="nav.dash.crypto">
                        add new
                    </a>
                </li>
                {{-- @endrole --}}
            </ul>
            <li class="nav-item"><a href="">
                    <span class="menu-title" data-i18n="nav.dash.main"> News </span>
                    <span class="badge badge badge-danger badge-pill float-right mr-2">
                        {{-- {{ \App\Models\Tag::count() }} --}}
                    </span>
                </a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('category.index') }}"
                            data-i18n="nav.dash.ecommerce">categories
                        </a>
                    </li>
                    <li class="active"><a class="menu-item" href="{{ route('articles.index') }}"
                            data-i18n="nav.dash.crypto">News
                        </a>
                    </li>
                </ul>
            </li>

            {{-- <li class="nav-item"><a href="">
                    <span class="menu-title" data-i18n="nav.dash.main">اوامر الشغل</span>
                    <span class="badge badge badge-success badge-pill float-right mr-2"> </span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{ route('admin.trip') }}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    <li class="active"><a class="menu-item" href="{{ route('admin.trip.create') }}"
                            data-i18n="nav.dash.ecommerce"> اضافة امر شغل </a>
                    </li>

                </ul>
            </li> --}}
            {{-- @role('developer') --}}
            {{-- <li class="nav-item"><a href="">
                        <span class="menu-title" data-i18n="nav.dash.main">النتيجة </span>
                        <span class="badge badge badge-success badge-pill float-right mr-2"> </span>
                    </a>
                    <ul class="menu-content">
                        <li class="active"><a class="menu-item" href="{{ route('calender') }}" data-i18n="nav.dash.ecommerce"> عرض
                                 </a>
                        </li> --}}
            {{-- <li><a class="menu-item" href="{{ route('admin.attributes.create') }}"
                                data-i18n="nav.dash.crypto">أاضافة
                                جديدة </a>
                        </li> --}}
            {{-- </ul>
                </li> --}}

            {{-- <li class="nav-item"><a href="">
                        <span class="menu-title" data-i18n="nav.dash.main">تقارير </span>
                        <span class="badge badge badge-success badge-pill float-right mr-2"> </span>
                    </a>
                    <ul class="menu-content">
                        <li class="active"><a class="menu-item" href="" data-i18n="nav.dash.ecommerce"> عرض
                                الكل </a>
                        </li>
                        <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أاضافة
                                جديدة </a>
                        </li>
                    </ul>
                </li> --}}
            {{-- <li class="nav-item"><a href="{{ route('live_search') }}"> --}}
            {{-- <span class="menu-title" data-i18n="nav.dash.main">بحث سريع </span>
                <span class="badge badge badge-success badge-pill float-right mr-2"> </span> --}}
            {{-- </a>
                </li> --}}
            {{-- @auth --}}

            {{-- <li class="nav-item">
                <a href="{{ route('roles.index') }}">
                    <i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">roles </span>
                    <span class="badge badge badge-warning  badge-pill float-right mr-2"></span>
                </a>
                <ul class="menu-content">
                    <li class="active">
                        <a class="menu-item" href="{{ route('roles.index') }}" data-i18n="nav.dash.ecommerce">
                            عرض الكل </a>
                    </li> --}}
            {{-- <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                                طالب </a>
                        </li> --}}
            {{-- </ul>
            </li> --}}

            {{-- 
            <li class="nav-item">
                <a href="{{ route('permissions.index') }}"><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">permissions</span>
                    <span class="badge badge badge-danger  badge-pill float-right mr-2">0</span>
                </a>
                <ul class="menu-content">
                    <li class="active">
                        <a class="menu-item" href="{{ route('permissions.index') }}" data-i18n="nav.dash.ecommerce"> عرض
                            الكل </a>
                    </li> --}}
            {{-- <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة
                                طالب </a>
                        </li> --}}
            {{-- </ul>
            </li> --}}
            {{-- @endrole --}}
            {{-- @endauth --}}
            {{-- <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title"
                            data-i18n="nav.templates.main"> {{ __('admin/sidebar.settings') }}</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#" data-i18n="nav.templates.vert.main">
                                {{ __('admin/sidebar.shipping methods') }} </a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="{{ route('edit.shippings.methods', 'free') }}"
                                        data-i18n="nav.templates.vert.classic_menu">توصيل مجاني </a>
                                </li>
                                <li><a class="menu-item" href="{{ route('edit.shippings.methods', 'inner') }}">
                                        توصيل
                                        داخلي </a>
                                </li>
                                <li><a class="menu-item" href="{{ route('edit.shippings.methods', 'outer') }}"
                                        data-i18n="nav.templates.vert.compact_menu"> توصيل خارجي </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li> --}}

            </ul>


        </div>
    </div>
