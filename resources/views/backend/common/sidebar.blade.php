<div class="wrapper">
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div class="">
                <img src="{{ asset('backend/images/logo_ecore.png') }}" class="logo-icon-2" alt="" />
            </div>
            <div>
                <h4 class="logo-text">ECore TechServ</h4>
            </div>
            <a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
            </a>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a class="" href="{{ url('/dashboard') }}">
                    <div class="parent-icon icon-color-1"> <i class="bx bx-comment-edit"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
           
            <li>
                <a class="" href="{{ url('/admincontacts') }}">
                    <div class="parent-icon icon-color-2"><i class="bx bx-grid-alt"></i>
                    </div>
                    <div class="menu-title">Contacts</div>
                </a>
            </li>



            <li>
                <a class="" href="{{ url('/adminshowtokens') }}">
                    <div class="parent-icon icon-color-2"><i class="bx bx-grid-alt"></i>
                    </div>
                    <div class="menu-title">Show Tokens</div>
                </a>
            </li>


            <li>
                <a class="" href="{{ url('/admintokens') }}">
                    <div class="parent-icon icon-color-2"><i class="bx bx-grid-alt"></i>
                    </div>
                    <div class="menu-title">Create Token</div>
                </a>
            </li>

            <li>
                <a class="" href="{{ url('adminstaffs') }}">
                    <div class="parent-icon icon-color-2"><i class="bx bx-grid-alt"></i>
                    </div>
                    <div class="menu-title">Staffs</div>
                </a>
            </li>
        </ul>
    </div>
</div>
