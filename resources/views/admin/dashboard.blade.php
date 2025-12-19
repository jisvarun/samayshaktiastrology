@extends('admin.layouts.app')

@section('content')
    {{-- Page Title Start --}}
    <div class="flex justify-between items-center mb-6">
        <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Dashboard</h4>

        <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
            <div class="flex items-center gap-2">
                <a href="{{route('admin.dashboard')}}" class="text-sm font-medium text-slate-700 dark:text-slate-400">Samay Shakti Astrology</a>
            </div>

            <div class="flex items-center gap-2">
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Menu</a>
            </div>

            <div class="flex items-center gap-2">
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400"
                    aria-current="page">Dashboard</a>
            </div>
        </div>
    </div>
    {{-- Page Title End --}}

    <div class="grid 2xl:grid-cols-4 gap-6 mb-6">

        <div class="2xl:col-span-3">
            <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
                <div class="card">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-base mb-1 text-gray-600 dark:text-gray-400">Project Dashboard</h4>
                                <p class="font-normal text-sm text-gray-400 truncate dark:text-gray-500">New Task Assign</p>
                            </div>

                            <div>
                                <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown"
                                    data-fc-placement="left-start" type="button">
                                    <i class="mgc_more_1_fill text-xl"></i>
                                </button>

                                <div
                                    class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                        href="javascript:void(0)">
                                        <i class="mgc_add_circle_line"></i> Add
                                    </a>
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                        href="javascript:void(0)">
                                        <i class="mgc_edit_line"></i> Edit
                                    </a>
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="javascript:void(0)">
                                        <i class="mgc_copy_2_line"></i> Copy
                                    </a>
                                    <div class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"></div>
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-danger hover:bg-danger/5"
                                        href="javascript:void(0)">
                                        <i class="mgc_delete_line"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-end">
                            <div class="flex-grow">
                                <p class="text-[13px] text-gray-400 dark:text-gray-500 font-semibold"><i
                                        class="mgc_alarm_2_line"></i> 4 Hrs ago</p>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-base mb-1 text-gray-600 dark:text-gray-400">Admin Template</h4>
                                <p class="font-normal text-sm text-gray-400 truncate dark:text-gray-500">New Task Assign</p>
                            </div>
                            <div>
                                <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown"
                                    data-fc-placement="left-start" type="button">
                                    <i class="mgc_more_1_fill text-xl"></i>
                                </button>

                                <div
                                    class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                        href="javascript:void(0)">
                                        <i class="mgc_add_circle_line"></i> Add
                                    </a>
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                        href="javascript:void(0)">
                                        <i class="mgc_edit_line"></i> Edit
                                    </a>
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="javascript:void(0)">
                                        <i class="mgc_copy_2_line"></i> Copy
                                    </a>
                                    <div class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"></div>
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-danger hover:bg-danger/5"
                                        href="javascript:void(0)">
                                        <i class="mgc_delete_line"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-end">
                            <div class="flex-grow">
                                <p class="text-[13px] text-gray-400 dark:text-gray-500 font-semibold"><i
                                        class="mgc_alarm_2_line"></i> 3 Hrs ago</p>
                            </div>
                           
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-base mb-1 text-gray-600 dark:text-gray-400">Client Project</h4>
                                <p class="font-normal text-sm text-gray-400 truncate dark:text-gray-500">New Task Assign</p>
                            </div>
                            <div>
                                <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown"
                                    data-fc-placement="left-start" type="button">
                                    <i class="mgc_more_1_fill text-xl"></i>
                                </button>

                                <div
                                    class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                        href="javascript:void(0)">
                                        <i class="mgc_add_circle_line"></i> Add
                                    </a>
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                        href="javascript:void(0)">
                                        <i class="mgc_edit_line"></i> Edit
                                    </a>
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="javascript:void(0)">
                                        <i class="mgc_copy_2_line"></i> Copy
                                    </a>
                                    <div class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"></div>
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-danger hover:bg-danger/5"
                                        href="javascript:void(0)">
                                        <i class="mgc_delete_line"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-end">
                            <div class="flex-grow">
                                <p class="text-[13px] text-gray-400 dark:text-gray-500 font-semibold"><i
                                        class="mgc_alarm_2_line"></i> 5 Hrs ago</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="text-base mb-1 text-gray-600 dark:text-gray-400">Figma Design</h4>
                                <p class="font-normal text-sm text-gray-400 truncate dark:text-gray-500">New Task Assign
                                </p>
                            </div>
                            <div>
                                <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown"
                                    data-fc-placement="left-start" type="button">
                                    <i class="mgc_more_1_fill text-xl"></i>
                                </button>

                                <div
                                    class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                        href="javascript:void(0)">
                                        <i class="mgc_add_circle_line"></i> Add
                                    </a>
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                        href="javascript:void(0)">
                                        <i class="mgc_edit_line"></i> Edit
                                    </a>
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                        href="javascript:void(0)">
                                        <i class="mgc_copy_2_line"></i> Copy
                                    </a>
                                    <div class="h-px bg-gray-200 dark:bg-gray-700 my-2 -mx-2"></div>
                                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-danger hover:bg-danger/5"
                                        href="javascript:void(0)">
                                        <i class="mgc_delete_line"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-end">
                            <div class="flex-grow">
                                <p class="text-[13px] text-gray-400 dark:text-gray-500 font-semibold"><i
                                        class="mgc_alarm_2_line"></i> 1 Day ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div> {{-- Grid End --}}

    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
        <div class="col-span-1">
            <div class="card">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 me-3">
                            <div class="w-12 h-12 flex justify-center items-center rounded text-primary bg-primary/25">
                                <i class="mgc_document_2_line text-xl"></i>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h5 class="mb-1">Active Projects</h5>
                            <p>85</p>
                        </div>
                        <div>
                            <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown"
                                data-fc-placement="left-start" type="button">
                                <i class="mgc_more_2_fill text-xl"></i>
                            </button>

                            <div
                                class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                    href="javascript:void(0)">
                                    Today
                                </a>
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                    href="javascript:void(0)">
                                    Yesterday
                                </a>
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Last Week
                                </a>
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Last Month
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-1">
            <div class="card">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 me-3">
                            <div class="w-12 h-12 flex justify-center items-center rounded text-success bg-success/25">
                                <i class="mgc_group_line text-xl"></i>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h5 class="mb-1">Total Employees</h5>
                            <p>32</p>
                        </div>
                        <div>
                            <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown"
                                data-fc-placement="left-start" type="button">
                                <i class="mgc_more_2_fill text-xl"></i>
                            </button>

                            <div
                                class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                    href="javascript:void(0)">
                                    Today
                                </a>
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                    href="javascript:void(0)">
                                    Yesterday
                                </a>
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Last Week
                                </a>
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Last Month
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-1">
            <div class="card">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 me-3">
                            <div class="w-12 h-12 flex justify-center items-center rounded text-info bg-info/25">
                                <i class="mgc_star_line text-xl"></i>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h5 class="mb-1">Project Reviews</h5>
                            <p>40</p>
                        </div>
                        <div>
                            <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown"
                                data-fc-placement="left-start" type="button">
                                <i class="mgc_more_2_fill text-xl"></i>
                            </button>

                            <div
                                class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                    href="javascript:void(0)">
                                    Today
                                </a>
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                    href="javascript:void(0)">
                                    Yesterday
                                </a>
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Last Week
                                </a>
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Last Month
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-1">
            <div class="card">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 me-3">
                            <div class="w-12 h-12 flex justify-center items-center rounded text-warning bg-warning/25">
                                <i class="mgc_new_folder_line text-xl"></i>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <h5 class="mb-1">New Projects</h5>
                            <p>25</p>
                        </div>
                        <div>
                            <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown"
                                data-fc-placement="left-start" type="button">
                                <i class="mgc_more_2_fill text-xl"></i>
                            </button>

                            <div
                                class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                    href="javascript:void(0)">
                                    Today
                                </a>
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200"
                                    href="javascript:void(0)">
                                    Yesterday
                                </a>
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Last Week
                                </a>
                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                    href="javascript:void(0)">
                                    Last Month
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> {{-- Grid End --}}
@endsection
