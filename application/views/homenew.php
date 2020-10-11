<?php echo $this->load->view('headnew'); ?>
<?php echo $this->load->view('menu_groupsnew'); ?>
<?php echo $this->load->view('navnew'); ?>

            
                  <!--begin::Entry-->
                  <div class="d-flex flex-column-fluid">
                     <!--begin::Container-->
                     <div class=" container ">
                        <!--begin::Dashboard-->
                        <!--begin::Row-->
                        <div class="row">
                           <div class="col-lg-6 col-xxl-4">
                              <!--begin::Mixed Widget 1-->
                              <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                                 <!--begin::Header-->
                                 <div class="card-header border-0 bg-danger py-5">
                                    <h3 class="card-title font-weight-bolder text-white">Sales Stat</h3>
                                    <div class="card-toolbar">
                                       <div class="dropdown dropdown-inline">
                                          <a href="#" class="btn btn-transparent-white btn-sm font-weight-bolder dropdown-toggle px-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Export
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                             <!--begin::Navigation-->
                                             <ul class="navi navi-hover">
                                                <li class="navi-header pb-1">
                                                   <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                                </li>
                                                <li class="navi-item">
                                                   <a href="#" class="navi-link">
                                                   <span class="navi-icon"><i class="flaticon2-shopping-cart-1"></i></span>
                                                   <span class="navi-text">Order</span>
                                                   </a>
                                                </li>
                                                <li class="navi-item">
                                                   <a href="#" class="navi-link">
                                                   <span class="navi-icon"><i class="flaticon2-calendar-8"></i></span>
                                                   <span class="navi-text">Event</span>
                                                   </a>
                                                </li>
                                                <li class="navi-item">
                                                   <a href="#" class="navi-link">
                                                   <span class="navi-icon"><i class="flaticon2-graph-1"></i></span>
                                                   <span class="navi-text">Report</span>
                                                   </a>
                                                </li>
                                                <li class="navi-item">
                                                   <a href="#" class="navi-link">
                                                   <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                                   <span class="navi-text">Post</span>
                                                   </a>
                                                </li>
                                                <li class="navi-item">
                                                   <a href="#" class="navi-link">
                                                   <span class="navi-icon"><i class="flaticon2-writing"></i></span>
                                                   <span class="navi-text">File</span>
                                                   </a>
                                                </li>
                                             </ul>
                                             <!--end::Navigation-->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end::Header-->
                                 <!--begin::Body-->
                                 <div class="card-body p-0 position-relative overflow-hidden">
                                    <!--begin::Chart-->
                                    <div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px"></div>
                                    <!--end::Chart-->
                                    <!--begin::Stats-->
                                    <div class="card-spacer mt-n25">
                                       <!--begin::Row-->
                                       <div class="row m-0">
                                          <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
                                             <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                <!--begin::Svg Icon | path:assets2/dist/assets/media/svg/icons/Media/Equalizer.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                   <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                      <rect x="0" y="0" width="24" height="24"/>
                                                      <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"/>
                                                      <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"/>
                                                      <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"/>
                                                      <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"/>
                                                   </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                             </span>
                                             <a href="#" class="text-warning font-weight-bold font-size-h6">
                                             Weekly Sales
                                             </a>
                                          </div>
                                          <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
                                             <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <!--begin::Svg Icon | path:assets2/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                   <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                      <polygon points="0 0 24 0 24 24 0 24"/>
                                                      <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                      <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                                   </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                             </span>
                                             <a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">
                                             New Users
                                             </a>
                                          </div>
                                       </div>
                                       <!--end::Row-->
                                       <!--begin::Row-->
                                       <div class="row m-0">
                                          <div class="col bg-light-danger px-6 py-8 rounded-xl mr-7">
                                             <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                <!--begin::Svg Icon | path:assets2/dist/assets/media/svg/icons/Design/Layers.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                   <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                      <polygon points="0 0 24 0 24 24 0 24"/>
                                                      <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"/>
                                                      <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"/>
                                                   </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                             </span>
                                             <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">
                                             Item Orders
                                             </a>
                                          </div>
                                          <div class="col bg-light-success px-6 py-8 rounded-xl">
                                             <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                <!--begin::Svg Icon | path:assets2/dist/assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                   <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                      <rect x="0" y="0" width="24" height="24"/>
                                                      <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3"/>
                                                      <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000"/>
                                                   </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                             </span>
                                             <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">
                                             Bug Reports
                                             </a>
                                          </div>
                                       </div>
                                       <!--end::Row-->
                                    </div>
                                    <!--end::Stats-->
                                 </div>
                                 <!--end::Body-->
                              </div>
                              <!--end::Mixed Widget 1-->
                           </div>
                           <div class="col-lg-4">
                              <!--begin::Mixed Widget 14-->
                              <div class="card card-custom card-stretch gutter-b">
                                 <!--begin::Header-->
                                 <div class="card-header border-0 pt-5">
                                    <h3 class="card-title font-weight-bolder ">Action Needed</h3>
                                    <div class="card-toolbar">
                                       <div class="dropdown dropdown-inline">
                                          <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="ki ki-bold-more-hor"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                             <!--begin::Navigation-->
                                             <ul class="navi navi-hover py-5">
                                                <li class="navi-item">
                                                   <a href="#" class="navi-link">
                                                   <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                                   <span class="navi-text">New Group</span>
                                                   </a>
                                                </li>
                                                <li class="navi-item">
                                                   <a href="#" class="navi-link">
                                                   <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                                   <span class="navi-text">Contacts</span>
                                                   </a>
                                                </li>
                                                <li class="navi-item">
                                                   <a href="#" class="navi-link">
                                                   <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                                   <span class="navi-text">Groups</span>
                                                   <span class="navi-link-badge">
                                                   <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                   </span>
                                                   </a>
                                                </li>
                                                <li class="navi-item">
                                                   <a href="#" class="navi-link">
                                                   <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                   <span class="navi-text">Calls</span>
                                                   </a>
                                                </li>
                                                <li class="navi-item">
                                                   <a href="#" class="navi-link">
                                                   <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                                   <span class="navi-text">Settings</span>
                                                   </a>
                                                </li>
                                                <li class="navi-separator my-3"></li>
                                                <li class="navi-item">
                                                   <a href="#" class="navi-link">
                                                   <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                                   <span class="navi-text">Help</span>
                                                   </a>
                                                </li>
                                                <li class="navi-item">
                                                   <a href="#" class="navi-link">
                                                   <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                   <span class="navi-text">Privacy</span>
                                                   <span class="navi-link-badge">
                                                   <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                   </span>
                                                   </a>
                                                </li>
                                             </ul>
                                             <!--end::Navigation-->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!--end::Header-->
                                 <!--begin::Body-->
                                 <div class="card-body d-flex flex-column">
                                    <div class="flex-grow-1">
                                       <div id="kt_mixed_widget_14_chart" style="height: 200px"></div>
                                    </div>
                                    <div class="pt-5">
                                       <p class="text-center font-weight-normal font-size-lg pb-7">
                                          Notes: Current sprint requires stakeholders<br/>
                                          to approve newly amended policies
                                       </p>
                                       <a href="#" class="btn btn-success btn-shadow-hover font-weight-bolder w-100 py-3">Generate Report</a>
                                    </div>
                                 </div>
                                 <!--end::Body-->
                              </div>
                              <!--end::Mixed Widget 14-->
                           </div>
                        <div class="col-lg-6 col-xxl-4">
                              <!--begin::Stats Widget 11-->
                              <div class="card card-custom card-stretch card-stretch-half gutter-b">
                                 <!--begin::Body-->
                                 <div class="card-body p-0">
                                    <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                       <span class="symbol  symbol-50 symbol-light-success mr-2">
                                          <span class="symbol-label">
                                             <span class="svg-icon svg-icon-xl svg-icon-success">
                                                <!--begin::Svg Icon | path:assets2/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                   <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                      <rect x="0" y="0" width="24" height="24"/>
                                                      <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                                      <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/>
                                                   </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                             </span>
                                          </span>
                                       </span>
                                       <div class="d-flex flex-column text-right">
                                          <span class="text-dark-75 font-weight-bolder font-size-h3">750$</span>
                                          <span class="text-muted font-weight-bold mt-2">Weekly Income</span>
                                       </div>
                                    </div>
                                    <div id="kt_stats_widget_11_chart" class="card-rounded-bottom" data-color="success" style="height: 150px"></div>
                                 </div>
                                 <!--end::Body-->
                              </div>
                              <!--end::Stats Widget 11-->
                              <!--begin::Stats Widget 12-->
                              <div class="card card-custom card-stretch card-stretch-half gutter-b">
                                 <!--begin::Body-->
                                 <div class="card-body p-0">
                                    <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                       <span class="symbol  symbol-50 symbol-light-primary mr-2">
                                          <span class="symbol-label">
                                             <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets2/dist/assets/media/svg/icons/Communication/Group.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                   <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                      <polygon points="0 0 24 0 24 24 0 24"/>
                                                      <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                      <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                                   </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                             </span>
                                          </span>
                                       </span>
                                       <div class="d-flex flex-column text-right">
                                          <span class="text-dark-75 font-weight-bolder font-size-h3">+6,5K</span>
                                          <span class="text-muted font-weight-bold mt-2">New Users</span>
                                       </div>
                                    </div>
                                    <div id="kt_stats_widget_12_chart" class="card-rounded-bottom" data-color="primary" style="height: 150px"></div>
                                 </div>
                                 <!--end::Body-->
                              </div>
                              <!--end::Stats Widget 12-->
                           </div>
                           
                        </div>
                        <!--end::Row-->
                        
                        <!--end::Dashboard-->
                     </div>
                     <!--end::Container-->
                  </div>
                  <!--end::Entry-->
               </div>
               <!--end::Content-->
               <!--begin::Footer-->
               <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
                  <!--begin::Container-->
                  <div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                     <!--begin::Copyright-->
                     <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">2020&copy;</span>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
                     </div>
                     <!--end::Copyright-->
                     <!--begin::Nav-->
                     <div class="nav nav-dark">
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
                     </div>
                     <!--end::Nav-->
                  </div>
                  <!--end::Container-->
               </div>
               <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
         </div>
         <!--end::Page-->
      </div>
      <!--end::Main-->
	  <!-- begin::User Panel-->
      <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
         <!--begin::Header-->
         <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">
               User Profile
            </h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
            </a>
         </div>
         <!--end::Header-->
         <!--begin::Content-->
         <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
               <div class="symbol symbol-100 mr-5">
                  <div class="symbol-label" style="background-image:url('assets2/dist/assets/media/users/300_21.jpg')"></div>
                  <i class="symbol-badge bg-success"></i>
               </div>
               <div class="d-flex flex-column">
                  <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                  James Jones
                  </a>
                  <div class="text-muted mt-1">
                     Application Developer
                  </div>
                  <div class="navi mt-2">
                     <a href="#" class="navi-item">
                        <span class="navi-link p-0 pb-2">
                           <span class="navi-icon mr-1">
                              <span class="svg-icon svg-icon-lg svg-icon-primary">
                                 <!--begin::Svg Icon | path:assets2/dist/assets/media/svg/icons/Communication/Mail-notification.svg-->
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <rect x="0" y="0" width="24" height="24"/>
                                       <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"/>
                                       <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
                                    </g>
                                 </svg>
                                 <!--end::Svg Icon-->
                              </span>
                           </span>
                           <span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
                        </span>
                     </a>
                     <a href="<?php echo base_url()?>welcome/logout" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                  </div>
               </div>
            </div>
            <!--end::Header-->
            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->
            
            <!--begin::Separator-->
            <div class="separator separator-dashed my-7"></div>
            <!--end::Separator-->
            
         </div>
         <!--end::Content-->
      </div>
      <!-- end::User Panel-->
	  
	  <?php echo $this->load->view('basic_jsnew'); ?>
   </body>
   <!--end::Body-->
</html>