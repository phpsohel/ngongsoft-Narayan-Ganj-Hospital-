       <aside class="main-sidebar sidebar-light-primary elevation-4">
           <div class="sidebar">
               <div class="mt-3 pb-3 mb-3  text-center">
                   <div class="image">
                       @php
                       $general_setting = App\Models\Generalsetting::first();
                       @endphp
                       @if (!empty($general_setting))
                       <img style="max-width: 230px;height: 100px;" src="{{ asset('image/'. $general_setting->site_logo ?? '') }}" class="elevation-2" alt="{{ $general_setting->site_title ?? '' }}">

                       @else
                       <img style="max-width: 230px ;height: 100px;" src="{{ asset('image/no_image.jpg') }}" class="elevation-2" alt="{{ $general_setting->site_title ?? '' }}">
                       @endif
                   </div>
                   <div class="info">
                       {{-- <a href="#" class="d-block">{{ Auth()->user()->name ?? ''}}</a> --}}
                   </div>
               </div>
               <div class="form-inline">
                   <div class="input-group" data-widget="sidebar-search">
                       <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                       <div class="input-group-append">
                           <button class="btn btn-sidebar">
                               <i class="fas fa-search fa-fw"></i>
                           </button>
                       </div>
                   </div>
               </div>
               <nav class="mt-2">
                   <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                       @role('admin||Super-Admin')
                       <li class="nav-item border-bottom">
                           <a href="{{ route('index') }}" class="nav-link">
                               <i class="fa-solid fa-house"></i>
                               <p>Dashboard</p>
                           </a>
                       </li>
                       <li class="nav-item border-bottom">
                           <a href="{{ route('garments.index') }}" class="nav-link">
                               <i class="fa-regular fa-building"></i>
                               <p>Garments</p>
                           </a>
                       </li>
                       <li class="nav-item border-bottom">
                           <a href="{{ route('workers.index') }}" class="nav-link">
                               <i class="fa-regular fa-user"></i>
                               <p>Workers</p>
                           </a>
                       </li>
                       <li class="nav-item border-bottom">
                           <a href="{{ route('services.index') }}" class="nav-link">
                               <i class="fa-regular fa-building"></i>
                               <p>Services</p>
                           </a>
                       </li>

                       <li class="nav-item border-bottom">
                           <a href="{{ route('service-providers.index') }}" class="nav-link">
                               <i class="fa-brands fa-usps"></i>
                               <p>Service Provider</p>
                           </a>
                       </li>

                       {{-- <li class="nav-item border-bottom">
                           <a href="" class="nav-link">
                               <i class="fa-solid fa-user"></i>
                               <p>Member <i class="fas fa-angle-left right"></i></p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item border-bottom fa-carret">
                                   <a href="{{ route('member.request_list') }}" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p> Request List</p>
                       </a>
                       </li>
                       <li class="nav-item border-bottom fa-carret">
                           <a href="{{ route('member.index') }}" class="nav-link">
                               <i class="far fa-circle nav-icon"></i>
                               <p>Member List</p>
                           </a>
                       </li>
                       <li class="nav-item border-bottom">
                           <a href="{{ route('member.reject_list') }}" class="nav-link">
                               <i class="far fa-circle nav-icon"></i>
                               <p> Rejected List</p>
                           </a>
                       </li>
                   </ul>
                   </li> --}}
                   <li class="nav-item border-bottom">
                       <a href="{{ route('follows.index') }}" class="nav-link">

                           <i class="fa-regular fa-building"></i>
                           <p>Follow Up</p>
                       </a>
                   </li>

                   <li class="nav-item border-bottom">
                       <a href="{{ route('refferals.index') }}" class="nav-link">
                           <i class="fa-solid fa-hotel"></i>
                           <p>Refferal</p>
                       </a>
                   </li>

                   <li class="nav-item border-bottom">
                       <a href="{{ route('satelites.index') }}" class="nav-link">

                           <i class="fa-regular fa-building"></i>
                           <p>Satelite Corner Schedule</p>
                       </a>
                   </li>
                   <li class="nav-item border-bottom">
                       <a href="{{ route('sms') }}" class="nav-link">
                           <i class="fa-solid fa-sms"></i>
                           <p>Send SMS</p>
                       </a>
                   </li>


                   {{-- <li class="nav-item border-bottom">

                       <a href="{{route('member.report')}}" class="nav-link">
                           <i class="fa-solid fa-hotel"></i>
                           <p>Member Report</p>
                       </a>
                   </li> --}}
                   {{-- <li class="nav-item border-bottom">
                       <a href="" class="nav-link">
                           <i class="far fa-bell"></i>
                           <p>Send Notification</p>
                       </a>
                   </li> --}}

                   {{-- <li class="nav-item border-bottom">
                       <a href="{{route('member.report')}}" class="nav-link">
                           <i class="fa thin fa-gear"></i>
                           <p>Settings <i class="fas fa-angle-left right"></i></p>
                       </a>
                       <ul class="nav nav-treeview">
                           <li class="nav-item border-bottom fa-carret">

                               <a href="{{ route('user') }}" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Users</p>
                               </a>
                           </li>
                           <li class="nav-item border-bottom fa-carret">

                               <a href="{{ route('role.index') }}" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>Role Permission</p>
                               </a>
                           </li>
                           {{-- <li class="nav-item border-bottom">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Send Notification</p>
                            </a>
                        </li> --}}

                           {{-- <li class="nav-item border-bottom">
                               <a href="{{ route('setting.index') }}" class="nav-link">
                                   <i class="far fa-circle nav-icon"></i>
                                   <p>General Settings</p>
                               </a>
                           </li>
                       </ul>
                   </li> --}}
                   @else

                   {{-- <li class="nav-item border-bottom">
                       <a href="{{ route('index') }}" class="nav-link">
                           <i class="fa-solid fa-house"></i>
                           <p>Dashboard</p>
                       </a>
                   </li>
                   <li class="nav-item border-bottom">
                       <a href="{{route('member.index')}}" class="nav-link">
                           <i class="fa-solid fa-user"></i>
                           <p>Member</p>
                       </a>
                   </li> --}}
                   @endrole
                   </ul>
               </nav>
           </div>
       </aside>
