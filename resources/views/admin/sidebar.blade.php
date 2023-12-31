<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="{{ asset('admin/assets/img/logo.png') }}" class="header-logo" /> <span
            class="logo-name">Otika</span>
        </a>
      </div>
      <ul class="sidebar-menu">
  
        <li class="menu-header">Main</li>
  
        @role('admin')
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span class="text-danger">Adminstrator</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('admin.users.index') }}">Users </a></li>
            <li><a class="nav-link" href="">Roles </a></li>
            <li><a class="nav-link" href="">Permissions</a></li>
          </ul>
        </li>
        @endrole

        <li class="dropdown">
          <a href="{{ route('admin.dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
  
    

        <li class="dropdown">
          <a href="{{ route('admin.categories.index') }}" class="menu-toggle">
            <i data-feather="briefcase"></i>
            <span>Categories</span>
          </a>
          {{-- <ul class="dropdown-menu">
            <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
            <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
          </ul> --}}
        </li>
      
        {{-- <li class="dropdown active">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Apps</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="chat.html">Chat</a></li>
            <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
            <li class="active"><a class="nav-link" href="blog.html">Blog</a></li>
            <li><a class="nav-link" href="calendar.html">Calendar</a></li>
          </ul>
        </li> --}}
      
        <li class="dropdown">
          <a href="{{ route('admin.post.index') }}" class="menu-toggle"><i data-feather="mail"></i><span>Post</span></a>
        </li>

        <li class="dropdown">
          <a href="{{ route('admin.tag.index') }}" class="menu-toggle"><i data-feather="copy"></i><span>Tags</span></a>
        </li>
       
     
        {{-- <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>Basic
              Components</span></a>
    
              <ul class="dropdown-menu">
            <li><a class="nav-link" href="alert.html">Alert</a></li>
            <li><a class="nav-link" href="badge.html">Badge</a></li>
            <li><a class="nav-link" href="breadcrumb.html">Breadcrumb</a></li>
            <li><a class="nav-link" href="buttons.html">Buttons</a></li>
            <li><a class="nav-link" href="collapse.html">Collapse</a></li>
            <li><a class="nav-link" href="dropdown.html">Dropdown</a></li>
            <li><a class="nav-link" href="checkbox-and-radio.html">Checkbox &amp; Radios</a></li>
            <li><a class="nav-link" href="list-group.html">List Group</a></li>
            <li><a class="nav-link" href="media-object.html">Media Object</a></li>
            <li><a class="nav-link" href="navbar.html">Navbar</a></li>
            <li><a class="nav-link" href="pagination.html">Pagination</a></li>
            <li><a class="nav-link" href="popover.html">Popover</a></li>
            <li><a class="nav-link" href="progress.html">Progress</a></li>
            <li><a class="nav-link" href="tooltip.html">Tooltip</a></li>
            <li><a class="nav-link" href="flags.html">Flag</a></li>
            <li><a class="nav-link" href="typography.html">Typography</a></li>
              </ul>
        </li>
    
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="shopping-bag"></i><span>Advanced</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="avatar.html">Avatar</a></li>
            <li><a class="nav-link" href="card.html">Card</a></li>
            <li><a class="nav-link" href="modal.html">Modal</a></li>
            <li><a class="nav-link" href="sweet-alert.html">Sweet Alert</a></li>
            <li><a class="nav-link" href="toastr.html">Toastr</a></li>
            <li><a class="nav-link" href="empty-state.html">Empty State</a></li>
            <li><a class="nav-link" href="multiple-upload.html">Multiple Upload</a></li>
            <li><a class="nav-link" href="pricing.html">Pricing</a></li>
            <li><a class="nav-link" href="tabs.html">Tab</a></li>
          </ul>
        </li>

        <li><a class="nav-link" href="blank.html"><i data-feather="file"></i><span>Blank Page</span></a></li>
        <li class="menu-header">Otika</li>
      --}}
        {{-- <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layout"></i><span>Forms</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="basic-form.html">Basic Form</a></li>
            <li><a class="nav-link" href="forms-advanced-form.html">Advanced Form</a></li>
            <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
            <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
            <li><a class="nav-link" href="form-wizard.html">Form Wizard</a></li>
          </ul>
        </li>
     
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="grid"></i><span>Tables</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="basic-table.html">Basic Tables</a></li>
            <li><a class="nav-link" href="advance-table.html">Advanced Table</a></li>
            <li><a class="nav-link" href="datatables.html">Datatable</a></li>
            <li><a class="nav-link" href="export-table.html">Export Table</a></li>
            <li><a class="nav-link" href="editable-table.html">Editable Table</a></li>
          </ul>
        </li>
      
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="pie-chart"></i><span>Charts</span></a>
    
              <ul class="dropdown-menu">
            <li><a class="nav-link" href="chart-amchart.html">amChart</a></li>
            <li><a class="nav-link" href="chart-apexchart.html">apexchart</a></li>
            <li><a class="nav-link" href="chart-echart.html">eChart</a></li>
            <li><a class="nav-link" href="chart-chartjs.html">Chartjs</a></li>
            <li><a class="nav-link" href="chart-sparkline.html">Sparkline</a></li>
            <li><a class="nav-link" href="chart-morris.html">Morris</a></li>
              </ul>
        </li>
      
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="feather"></i><span>Icons</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="icon-font-awesome.html">Font Awesome</a></li>
            <li><a class="nav-link" href="icon-material.html">Material Design</a></li>
            <li><a class="nav-link" href="icon-ionicons.html">Ion Icons</a></li>
            <li><a class="nav-link" href="icon-feather.html">Feather Icons</a></li>
            <li><a class="nav-link" href="icon-weather-icon.html">Weather Icon</a></li>
          </ul>
        </li>
        <li class="menu-header">Media</li>
   
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="image"></i><span>Gallery</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="light-gallery.html">Light Gallery</a></li>
            <li><a href="gallery1.html">Gallery 2</a></li>
          </ul>
        </li> --}}
      
            </li>
          </ul>
        </li>
      </ul>
    </aside>
  </div>



  @section('js')




  @endsection