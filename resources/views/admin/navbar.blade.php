<nav class="navbar navbar-light align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="background: rgb(255,255,255);">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#" style="padding: 0px 0px;width: 100%;background: #fe7fe7;">
            <div class="sidebar-brand-icon rotate-n-15"><img style="height: 37px;width: 36.8125px;" src="{{ asset('panelAssets/img/circle-cropped.png') }}"></div>
            <div class="sidebar-brand-text mx-3">
                <h1 class="text-capitalize" style="margin-bottom: 0px;color: rgb(255,255,255);">BnBMS</h1>
            </div>
        </a>
        <ul class="navbar-nav text-change" id="accordionSidebar">
            <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt" style="color: rgb(133,135,150);"></i><span style="color: rgb(133,135,150);">&nbsp;Dashboard</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('admin.service')}}"><i class="fas fa-chart-area" style="color: rgb(133,135,150);"></i><span style="color: rgb(133,135,150);">&nbsp;Service Management</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('admin.employee')}}"><i class="fas fa-table" style="color: rgb(133,135,150);"></i><span style="color: rgb(133,135,150);">Employee Management</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('admin.appointment')}}"><i class="fas fa-table" style="color: rgb(133,135,150);"></i><span style="color: rgb(133,135,150);">Appointment</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('admin.walkin')}}"><i class="fas fa-table" style="color: rgb(133,135,150);"></i><span style="color: rgb(133,135,150);">Walk-In</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('admin.invoice_appointment')}}"><i class="fas fa-table" style="color: rgb(133,135,150);"></i><span style="color: rgb(133,135,150);">Invoice Appointment</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('admin.invoice_walkin')}}"><i class="fas fa-table" style="color: rgb(133,135,150);"></i><span style="color: rgb(133,135,150);">Invoice Walkin</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('admin.report')}}"><i class="fas fa-table" style="color: rgb(133,135,150);"></i><span style="color: rgb(133,135,150);">Reports</span></a></li>
{{--            <li class="nav-item"><a class="nav-link" href="{{route('admin.inv_item')}}"><i class="fas fa-table" style="color: rgb(133,135,150);"></i><span style="color: rgb(133,135,150);">Inventory-Item List</span></a></li>--}}
{{--            <li class="nav-item"><a class="nav-link" href="{{route('admin.inv_stock')}}"><i class="fas fa-table" style="color: rgb(133,135,150);"></i><span style="color: rgb(133,135,150);">Inventory-Stocks</span></a></li>--}}
        </ul>
    </div>
</nav>
