<div class="nk-sidebar" data-content="sidebarMenuGloabl">
  <div class="nk-sidebar-bar">
    <div class="nk-apps-brand">
      @persist('navKeeaddfdfsoddadingLoadsdading2')
      <a wire:navigate.hover href="/admin" class="logo-link">
          <img class="logo-light logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
              alt="logo" />
          <img class="logo-dark logo-img" src="{{ get_image_url(get_setting('site_logo')) }}"
              alt="logo-dark" />
      </a>
      @endpersist
    </div>
    <div class="nk-sidebar-element">
      <div class="nk-sidebar-body">
        <div class="nk-sidebar-content" data-simplebar="init">
          <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
              <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
              <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden;">
                  <div class="simplebar-content" style="padding: 0px;">
                    <div class="nk-sidebar-menu">
                      <ul class="nk-menu apps-menu">
                        <li class="nk-menu-item">
                          <a href="javascript:void(0);" class="nk-menu-link nk-menu-switch" data-target="navPharmacy">
                            <span class="nk-menu-icon">
                              <em class="icon ni ni-capsule"></em>
                            </span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="javascript:void(0);" class="nk-menu-link nk-menu-switch" data-target="navHospital">
                            <span class="nk-menu-icon">
                              <em class="icon ni ni-plus-medi"></em>
                            </span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="javascript:void(0);" class="nk-menu-link nk-menu-switch" data-target="navDashboards">
                            <span class="nk-menu-icon">
                              <em class="icon ni ni-dashboard"></em>
                            </span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="javascript:void(0);" class="nk-menu-link nk-menu-switch" data-target="navApps">
                            <span class="nk-menu-icon">
                              <em class="icon ni ni-menu-circled"></em>
                            </span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="javascript:void(0);" class="nk-menu-link nk-menu-switch" data-target="navPages">
                            <span class="nk-menu-icon">
                              <em class="icon ni ni-files"></em>
                            </span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="javascript:void(0);" class="nk-menu-link nk-menu-switch" data-target="navMisc">
                            <span class="nk-menu-icon">
                              <em class="icon ni ni-server"></em>
                            </span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="javascript:void(0);" class="nk-menu-link nk-menu-switch" data-target="navError">
                            <span class="nk-menu-icon">
                              <em class="icon ni ni-alert-c"></em>
                            </span>
                          </a>
                        </li>
                        <li class="nk-menu-hr"></li>
                        <li class="nk-menu-item">
                          <a href="javascript:void(0);" class="nk-menu-link nk-menu-switch" data-target="navComponents">
                            <span class="nk-menu-icon">
                              <em class="icon ni ni-layers"></em>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="nk-sidebar-footer">
                      <ul class="nk-menu nk-menu-md apps-menu">
                        <li class="nk-menu-item">
                          <a href="javascript:void(0);" class="nk-menu-link" aria-label="Settings" data-bs-original-title="Settings">
                            <span class="nk-menu-icon">
                              <em class="icon ni ni-setting"></em>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 794px;"></div>
          </div>
          <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
          </div>
          <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
          </div>
        </div>
        <div class="nk-sidebar-profile nk-sidebar-profile-fixed">
          <a href="javascript:void(0);" class="toggle" data-target="profileDD">
            <div class="user-avatar">
              <span>AB</span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-md m-1 nk-sidebar-profile-dropdown" data-content="profileDD">
            <div class="dropdown-inner user-card-wrap d-none d-md-block">
              <div class="user-card">
                <div class="user-avatar">
                  <span>AB</span>
                </div>
                <div class="user-info">
                  <span class="lead-text">Abu Bin Ishtiyak</span>
                  <span class="sub-text text-soft">info@softnio.com</span>
                </div>
              </div>
            </div>
            <div class="dropdown-inner">
              <ul class="link-list">
                <li>
                  <a href="/demo7/user-profile-regular.html">
                    <em class="icon ni ni-user-alt"></em>
                    <span>View Profile</span>
                  </a>
                </li>
                <li>
                  <a href="/demo7/user-profile-setting.html">
                    <em class="icon ni ni-setting-alt"></em>
                    <span>Account Setting</span>
                  </a>
                </li>
                <li>
                  <a href="/demo7/user-profile-activity.html">
                    <em class="icon ni ni-activity-alt"></em>
                    <span>Login Activity</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="dropdown-inner">
              <ul class="link-list">
                <li>
                  <a href="javascript:void(0);">
                    <em class="icon ni ni-signout"></em>
                    <span>Sign out</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="nk-sidebar-main is-light">
    <div class="nk-sidebar-inner" data-simplebar="init">
      <div class="simplebar-wrapper" style="margin: -24px -28px -32px;">
        <div class="simplebar-height-auto-observer-wrapper">
          <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
          <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
              <div class="simplebar-content" style="padding: 24px 28px 32px;">
                <div class="nk-menu-content" data-content="navPharmacy">
                  <h5 class="title">Pharmacy</h5>
                  <ul class="nk-menu">
                    <li class="nk-menu-item">
                      <a href="/demo7/pharmacy/index.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-dashboard-fill"></em>
                        </span>
                        <span class="nk-menu-text">Dashboard</span>
                      </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-users-fill"></em>
                        </span>
                        <span class="nk-menu-text">Customer</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/add-customer.html" class="nk-menu-link">
                            <span class="nk-menu-text">Add Customer</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/customer.html" class="nk-menu-link">
                            <span class="nk-menu-text">Customer List</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/customer-ledger.html" class="nk-menu-link">
                            <span class="nk-menu-text">Customer Ledger</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-capsule-fill"></em>
                        </span>
                        <span class="nk-menu-text">Medicine</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/add-medicine.html" class="nk-menu-link">
                            <span class="nk-menu-text">Add Medicine</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/medicine-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">Medicine List</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/medicine-details.html" class="nk-menu-link">
                            <span class="nk-menu-text">Medicine Details</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-home-fill"></em>
                        </span>
                        <span class="nk-menu-text">Manufacturer</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/manufacturer.html" class="nk-menu-link">
                            <span class="nk-menu-text">Manufacturer List</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/manufacturer-ledger.html" class="nk-menu-link">
                            <span class="nk-menu-text">Manufacturer Ledger</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-repeat"></em>
                        </span>
                        <span class="nk-menu-text">Return</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/add-wastage-return.html" class="nk-menu-link">
                            <span class="nk-menu-text">Add Wastage Return</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/wastage-return.html" class="nk-menu-link">
                            <span class="nk-menu-text">Wastage Return List</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/add-manufacturer-return.html" class="nk-menu-link">
                            <span class="nk-menu-text">Add Manufacture Return</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/manufacturer-return.html" class="nk-menu-link">
                            <span class="nk-menu-text">Manufacturer Return List</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-user-circle-fill"></em>
                        </span>
                        <span class="nk-menu-text">Human resource</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/member.html" class="nk-menu-link">
                            <span class="nk-menu-text">Member</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/members-profile-regular.html" class="nk-menu-link">
                            <span class="nk-menu-text">Members Profile</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/attendence.html" class="nk-menu-link">
                            <span class="nk-menu-text">Attendence</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/salary.html" class="nk-menu-link">
                            <span class="nk-menu-text">Salary</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-coin-alt-fill"></em>
                        </span>
                        <span class="nk-menu-text">Finance</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/income-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">Income</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/expense-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">Expence</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/invoice-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">Invoice List</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/invoice-details.html" class="nk-menu-link">
                            <span class="nk-menu-text">Invoice Details</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-activity-round-fill"></em>
                        </span>
                        <span class="nk-menu-text">Report</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/sales-report.html" class="nk-menu-link">
                            <span class="nk-menu-text">Sales Report</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/purchase-report.html" class="nk-menu-link">
                            <span class="nk-menu-text">Purchase Report</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pharmacy/stock-report.html" class="nk-menu-link">
                            <span class="nk-menu-text">Stock Report</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pharmacy/support.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-msg-fill"></em>
                        </span>
                        <span class="nk-menu-text">Support</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pharmacy/general-settings.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-setting-fill"></em>
                        </span>
                        <span class="nk-menu-text">Setting</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="nk-menu-content" data-content="navHospital">
                  <h5 class="title">Hospital Manegment</h5>
                  <ul class="nk-menu">
                    <li class="nk-menu-item">
                      <a href="/demo7/hospital/index.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-dashboard-fill"></em>
                        </span>
                        <span class="nk-menu-text">Dashboard</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/hospital/appointment.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-note-add-fill"></em>
                        </span>
                        <span class="nk-menu-text">Appointment List</span>
                      </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-users-fill"></em>
                        </span>
                        <span class="nk-menu-text">Patient</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/patient-add.html" class="nk-menu-link">
                            <span class="nk-menu-text">Add Patient</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/patient-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">IPD / OPD Patients</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/patient-profile.html" class="nk-menu-link">
                            <span class="nk-menu-text">Patient Profile</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-plus-medi-fill"></em>
                        </span>
                        <span class="nk-menu-text">Doctors / Nurses</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/doctor-nurse-add.html" class="nk-menu-link">
                            <span class="nk-menu-text">Add Doctor / Nurses</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/doctor-nurse-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">Doctors / Nurses</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-coin-alt-fill"></em>
                        </span>
                        <span class="nk-menu-text">Finance</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/income-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">Income</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/expense-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">Expense</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/invoice-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">Invoice List</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/invoice-details.html" class="nk-menu-link">
                            <span class="nk-menu-text">Invoice Details</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-activity-round-fill"></em>
                        </span>
                        <span class="nk-menu-text">Monitor Hospital</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/birth-report.html" class="nk-menu-link">
                            <span class="nk-menu-text">Birth Report</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/blood-bank.html" class="nk-menu-link">
                            <span class="nk-menu-text">Blood Bank</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/inventory-items.html" class="nk-menu-link">
                            <span class="nk-menu-text">Inventory Items Reports</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-panel-fill"></em>
                        </span>
                        <span class="nk-menu-text">Misc Pages</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/bed-group.html" class="nk-menu-link">
                            <span class="nk-menu-text">Bed Group</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/bed-allotment.html" class="nk-menu-link">
                            <span class="nk-menu-text">Bed Allotment</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/department.html" class="nk-menu-link">
                            <span class="nk-menu-text">Department</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/hospital/death-report.html" class="nk-menu-link">
                            <span class="nk-menu-text">Death Report</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/hospital/user-profile.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-user-fill"></em>
                        </span>
                        <span class="nk-menu-text">User Profile</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/hospital/settings.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-setting-fill"></em>
                        </span>
                        <span class="nk-menu-text">Setting</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="nk-menu-content menu-active" data-content="navDashboards">
                  <h5 class="title">Dashboards</h5>
                  <ul class="nk-menu">
                    <li class="nk-menu-item">
                      <a href="/demo7/index.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-dashboard-fill"></em>
                        </span>
                        <span class="nk-menu-text">Default Dashboard</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/index-ecommerce.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-bag-fill"></em>
                        </span>
                        <span class="nk-menu-text">Ecommerce Dashboard</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/index-sales.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-bag-fill"></em>
                        </span>
                        <span class="nk-menu-text">Sales Dashboard</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/index-analytics.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-growth-fill"></em>
                        </span>
                        <span class="nk-menu-text">Analytics Dashboard</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="nk-menu-content" data-content="navApps">
                  <h5 class="title">Apps</h5>
                  <ul class="nk-menu">
                    <li class="nk-menu-item">
                      <a href="/demo7/apps-inbox.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-inbox-fill"></em>
                        </span>
                        <span class="nk-menu-text">Mailbox</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/apps-messages.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-chat-fill"></em>
                        </span>
                        <span class="nk-menu-text">Messages</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/apps-file-manager.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-folder-fill"></em>
                        </span>
                        <span class="nk-menu-text">File Manager</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/apps-chats.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-chat-circle-fill"></em>
                        </span>
                        <span class="nk-menu-text">Chats</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/apps-calendar.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-calender-date-fill"></em>
                        </span>
                        <span class="nk-menu-text">Calendar</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/apps-kanban.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-template-fill"></em>
                        </span>
                        <span class="nk-menu-text">Kanban Board</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="nk-menu-content" data-content="navPages">
                  <h5 class="title">Pages</h5>
                  <ul class="nk-menu">
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-tile-thumb-fill"></em>
                        </span>
                        <span class="nk-menu-text">Projects</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/project-card.html" class="nk-menu-link">
                            <span class="nk-menu-text">Project Cards</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/project-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">Project List</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-users-fill"></em>
                        </span>
                        <span class="nk-menu-text">User Manage</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/user-list-regular.html" class="nk-menu-link">
                            <span class="nk-menu-text">User List - Regular</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/user-list-compact.html" class="nk-menu-link">
                            <span class="nk-menu-text">User List - Compact</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/user-details-regular.html" class="nk-menu-link">
                            <span class="nk-menu-text">User Details - Regular</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/user-profile-regular.html" class="nk-menu-link">
                            <span class="nk-menu-text">User Profile - Regular</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/user-card.html" class="nk-menu-link">
                            <span class="nk-menu-text">User Contact - Card</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-user-list-fill"></em>
                        </span>
                        <span class="nk-menu-text">Customers</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/customer-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">Customer List</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/customer-details.html" class="nk-menu-link">
                            <span class="nk-menu-text">Customer Details</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-cart-fill"></em>
                        </span>
                        <span class="nk-menu-text">Ecommerce Pages</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/products.html" class="nk-menu-link">
                            <span class="nk-menu-text">Product List</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/orders-regular.html" class="nk-menu-link">
                            <span class="nk-menu-text">Order List - Regular</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/orders-sales.html" class="nk-menu-link">
                            <span class="nk-menu-text">Order List - Sales</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/invoice-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">Invoices List</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/invoice-details.html" class="nk-menu-link">
                            <span class="nk-menu-text">Invoice Details</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-list-fill"></em>
                        </span>
                        <span class="nk-menu-text">Products</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/product-list.html" class="nk-menu-link">
                            <span class="nk-menu-text">Product List</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/product-card.html" class="nk-menu-link">
                            <span class="nk-menu-text">Product Card</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/product-details.html" class="nk-menu-link">
                            <span class="nk-menu-text">Product Details</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pricing-table.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-view-col-fill"></em>
                        </span>
                        <span class="nk-menu-text">Pricing Table</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/gallery.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-img-fill"></em>
                        </span>
                        <span class="nk-menu-text">Image Gallery</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/_blank.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-file-fill"></em>
                        </span>
                        <span class="nk-menu-text">Blank / Startup</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pages/faqs.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-file-fill"></em>
                        </span>
                        <span class="nk-menu-text">Faqs / Help</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pages/terms-policy.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-file-fill"></em>
                        </span>
                        <span class="nk-menu-text">Terms / Policy</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pages/regular-v1.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-file-fill"></em>
                        </span>
                        <span class="nk-menu-text">Regular Page - v1</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pages/regular-v2.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-file-fill"></em>
                        </span>
                        <span class="nk-menu-text">Regular Page - v2</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="nk-menu-content" data-content="navMisc">
                  <h5 class="title">Misc Pages</h5>
                  <ul class="nk-menu">
                    <li class="nk-menu-item">
                      <a href="/demo7/pages/auths/auth-login.html" class="nk-menu-link" target="_blank">
                        <span class="nk-menu-text">Login / Signin</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pages/auths/auth-register.html" class="nk-menu-link" target="_blank">
                        <span class="nk-menu-text">Register / Signup</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pages/auths/auth-reset.html" class="nk-menu-link" target="_blank">
                        <span class="nk-menu-text">Forgot Password</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pages/auths/auth-success.html" class="nk-menu-link" target="_blank">
                        <span class="nk-menu-text">Success / Confirm</span>
                      </a>
                    </li>
                    <li class="nk-menu-item no-icon">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-text">Classic Version - v2</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/pages/auths/auth-login-v2.html" class="nk-menu-link" target="_blank">
                            <span class="nk-menu-text">Login / Signin</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pages/auths/auth-register-v2.html" class="nk-menu-link" target="_blank">
                            <span class="nk-menu-text">Register / Signup</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pages/auths/auth-reset-v2.html" class="nk-menu-link" target="_blank">
                            <span class="nk-menu-text">Forgot Password</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pages/auths/auth-success-v2.html" class="nk-menu-link" target="_blank">
                            <span class="nk-menu-text">Success / Confirm</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item no-icon">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-text">No Slider Version - v3</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/pages/auths/auth-login-v3.html" class="nk-menu-link" target="_blank">
                            <span class="nk-menu-text">Login / Signin</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pages/auths/auth-register-v3.html" class="nk-menu-link" target="_blank">
                            <span class="nk-menu-text">Register / Signup</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pages/auths/auth-reset-v3.html" class="nk-menu-link" target="_blank">
                            <span class="nk-menu-text">Forgot Password</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/pages/auths/auth-success-v3.html" class="nk-menu-link" target="_blank">
                            <span class="nk-menu-text">Success / Confirm</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="nk-menu-content" data-content="navError">
                  <h5 class="title">Error Pages</h5>
                  <ul class="nk-menu">
                    <li class="nk-menu-item">
                      <a href="/demo7/pages/errors/404-classic.html" target="_blank" class="nk-menu-link">
                        <span class="nk-menu-text">404 Classic</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pages/errors/504-classic.html" target="_blank" class="nk-menu-link">
                        <span class="nk-menu-text">504 Classic</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pages/errors/404-s1.html" target="_blank" class="nk-menu-link">
                        <span class="nk-menu-text">404 Modern</span>
                      </a>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/pages/errors/504-s1.html" target="_blank" class="nk-menu-link">
                        <span class="nk-menu-text">504 Modern</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="nk-menu-content" data-content="navComponents">
                  <h5 class="title">Components</h5>
                  <ul class="nk-menu">
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-layers-fill"></em>
                        </span>
                        <span class="nk-menu-text">Ui Elements</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/components.html" class="nk-menu-link">
                            <span class="nk-menu-text">Component List</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/alerts.html" class="nk-menu-link">
                            <span class="nk-menu-text">Alerts</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/accordions.html" class="nk-menu-link">
                            <span class="nk-menu-text">Accordions</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/avatar.html" class="nk-menu-link">
                            <span class="nk-menu-text">Avatar</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/badges.html" class="nk-menu-link">
                            <span class="nk-menu-text">Badges</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/buttons.html" class="nk-menu-link">
                            <span class="nk-menu-text">Buttons</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/buttons-group.html" class="nk-menu-link">
                            <span class="nk-menu-text">Button Group</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/breadcrumb.html" class="nk-menu-link">
                            <span class="nk-menu-text">Breadcrumb</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/cards.html" class="nk-menu-link">
                            <span class="nk-menu-text">Cards</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/carousel.html" class="nk-menu-link">
                            <span class="nk-menu-text">Carousel</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/list-dropdown.html" class="nk-menu-link">
                            <span class="nk-menu-text">List Dropdown</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/modals.html" class="nk-menu-link">
                            <span class="nk-menu-text">Modals</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/pagination.html" class="nk-menu-link">
                            <span class="nk-menu-text">Pagination</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/popover.html" class="nk-menu-link">
                            <span class="nk-menu-text">Popovers</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/progress.html" class="nk-menu-link">
                            <span class="nk-menu-text">Progress</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/preloader.html" class="nk-menu-link">
                            <span class="nk-menu-text">Preloader</span>
                            <span class="nk-menu-badge">New</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/placeholders.html" class="nk-menu-link">
                            <span class="nk-menu-text">Placeholders</span>
                            <span class="nk-menu-badge">New</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/spinner.html" class="nk-menu-link">
                            <span class="nk-menu-text">Spinner</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/tabs.html" class="nk-menu-link">
                            <span class="nk-menu-text">Tabs</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/toast.html" class="nk-menu-link">
                            <span class="nk-menu-text">Toasts</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/tooltip.html" class="nk-menu-link">
                            <span class="nk-menu-text">Tooltip</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/elements/typography.html" class="nk-menu-link">
                            <span class="nk-menu-text">Typography</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-text">Utilities</span>
                          </a>
                          <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                              <a href="/demo7/components/elements/util-border.html" class="nk-menu-link">
                                <span class="nk-menu-text">Border</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/elements/util-colors.html" class="nk-menu-link">
                                <span class="nk-menu-text">Colors</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/elements/util-display.html" class="nk-menu-link">
                                <span class="nk-menu-text">Display</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/elements/util-embeded.html" class="nk-menu-link">
                                <span class="nk-menu-text">Embeded</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/elements/util-flex.html" class="nk-menu-link">
                                <span class="nk-menu-text">Flex</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/elements/util-text.html" class="nk-menu-link">
                                <span class="nk-menu-text">Text</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/elements/util-sizing.html" class="nk-menu-link">
                                <span class="nk-menu-text">Sizing</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/elements/util-spacing.html" class="nk-menu-link">
                                <span class="nk-menu-text">Spacing</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/elements/util-others.html" class="nk-menu-link">
                                <span class="nk-menu-text">Others</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-dot-box-fill"></em>
                        </span>
                        <span class="nk-menu-text">Crafted Icons</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/components/misc/svg-icons.html" class="nk-menu-link">
                            <span class="nk-menu-text">SVG Icon - Exclusive</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/misc/nioicon.html" class="nk-menu-link">
                            <span class="nk-menu-text">Nioicon - HandCrafted</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/components/misc/icons.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-menu-circled"></em>
                        </span>
                        <span class="nk-menu-text">Icon Libraries</span>
                      </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-table-view-fill"></em>
                        </span>
                        <span class="nk-menu-text">Tables</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/components/tables/table-basic.html" class="nk-menu-link">
                            <span class="nk-menu-text">Basic Tables</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/tables/table-special.html" class="nk-menu-link">
                            <span class="nk-menu-text">Special Tables</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/tables/table-datatable.html" class="nk-menu-link">
                            <span class="nk-menu-text">DataTables</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-todo-fill"></em>
                        </span>
                        <span class="nk-menu-text">Forms</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/components/forms/form-elements.html" class="nk-menu-link">
                            <span class="nk-menu-text">Form Elements</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/forms/checkbox-radio.html" class="nk-menu-link">
                            <span class="nk-menu-text">Checkbox Radio</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/forms/advanced-controls.html" class="nk-menu-link">
                            <span class="nk-menu-text">Advanced Controls</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/forms/input-group.html" class="nk-menu-link">
                            <span class="nk-menu-text">Input Group</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/forms/form-upload.html" class="nk-menu-link">
                            <span class="nk-menu-text">Form Upload</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/forms/datetime-picker.html" class="nk-menu-link">
                            <span class="nk-menu-text">Date &amp; Time Picker</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/forms/number-spinner.html" class="nk-menu-link">
                            <span class="nk-menu-text">Number Spinner</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/forms/nouislider.html" class="nk-menu-link">
                            <span class="nk-menu-text">noUiSlider</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/forms/form-layouts.html" class="nk-menu-link">
                            <span class="nk-menu-text">Form Layouts</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/forms/form-validation.html" class="nk-menu-link">
                            <span class="nk-menu-text">Form Validation</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-text">Wizard</span>
                          </a>
                          <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                              <a href="/demo7/components/forms/form-wizard.html" class="nk-menu-link">
                                <span class="nk-menu-text">Basic Demo</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/forms/wizard/create-project.html" class="nk-menu-link">
                                <span class="nk-menu-text">Create Project</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/forms/wizard/create-profile.html" class="nk-menu-link">
                                <span class="nk-menu-text">Create Profile</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/forms/wizard/two-factor-auth.html" class="nk-menu-link">
                                <span class="nk-menu-text">Two Factor Auth</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a target="_blank" href="/demo7/components/forms/wizard/survey-v1.html" class="nk-menu-link">
                                <span class="nk-menu-text">Survey</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a target="_blank" href="/demo7/components/forms/wizard/survey-v2.html" class="nk-menu-link">
                                <span class="nk-menu-text">Survey v2</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nk-menu-item">
                          <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-text">Rich Editor</span>
                          </a>
                          <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                              <a href="/demo7/components/forms/form-summernote.html" class="nk-menu-link">
                                <span class="nk-menu-text">Summernote</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/forms/form-quill.html" class="nk-menu-link">
                                <span class="nk-menu-text">Quill</span>
                              </a>
                            </li>
                            <li class="nk-menu-item">
                              <a href="/demo7/components/forms/form-tinymce.html" class="nk-menu-link">
                                <span class="nk-menu-text">Tinymce</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-pie-fill"></em>
                        </span>
                        <span class="nk-menu-text">Charts</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/components/charts/chartjs.html" class="nk-menu-link">
                            <span class="nk-menu-text">Chart JS</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/charts/knob.html" class="nk-menu-link">
                            <span class="nk-menu-text">Knob JS</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-puzzle"></em>
                        </span>
                        <span class="nk-menu-text">Widgets</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/components/widgets/cards.html" class="nk-menu-link">
                            <span class="nk-menu-text">Card Widgets</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/widgets/charts.html" class="nk-menu-link">
                            <span class="nk-menu-text">Chart Widgets</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/widgets/ratings.html" class="nk-menu-link">
                            <span class="nk-menu-text">Rating Widgets</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                      <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-block-over"></em>
                        </span>
                        <span class="nk-menu-text">Miscellaneous</span>
                      </a>
                      <ul class="nk-menu-sub">
                        <li class="nk-menu-item">
                          <a href="/demo7/components/misc/slick-sliders.html" class="nk-menu-link">
                            <span class="nk-menu-text">Slick Slider</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/misc/toastr.html" class="nk-menu-link">
                            <span class="nk-menu-text">Toastr</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/misc/sweet-alert.html" class="nk-menu-link">
                            <span class="nk-menu-text">Sweet Alert</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/misc/js-tree.html" class="nk-menu-link">
                            <span class="nk-menu-text">jsTree</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/misc/dual-listbox.html" class="nk-menu-link">
                            <span class="nk-menu-text">Dual Listbox</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/misc/dragula.html" class="nk-menu-link">
                            <span class="nk-menu-text">Dragula</span>
                          </a>
                        </li>
                        <li class="nk-menu-item">
                          <a href="/demo7/components/misc/map.html" class="nk-menu-link">
                            <span class="nk-menu-text">Google Map</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nk-menu-item">
                      <a href="/demo7/email-templates.html" class="nk-menu-link">
                        <span class="nk-menu-icon">
                          <em class="icon ni ni-template-fill"></em>
                        </span>
                        <span class="nk-menu-text">Email Template</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="simplebar-placeholder" style="width: auto; height: 251px;"></div>
      </div>
      <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
        <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
      </div>
      <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
        <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
      </div>
    </div>
  </div>
</div>