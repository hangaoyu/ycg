<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('/admin/about') }}"><i class='fa fa-link'></i> <span>基本信息</span></a></li>
            <li><a href="{{ url('/admin/investor') }}"><i class='fa fa-link'></i> <span>投资页信息</span></a></li>
            <li><a href="{{ url('/admin/dynamic') }}"><i class='fa fa-link'></i> <span>融资信息</span></a></li>
            <li ><a href="{{ url('/admin/project') }}"><i class='fa fa-link'></i> <span>孵化项目</span></a></li>
            <li><a href="{{ url('/admin/carousel') }}"><i class='fa fa-link'></i> <span>图片管理</span></a></li>
            <li><a href="{{ url('/admin/teacher') }}"><i class='fa fa-link'></i> <span>导师管理</span></a></li>
            <li><a href="{{ url('/admin/area') }}"><i class='fa fa-link'></i> <span>创业空间</span></a></li>
            <li><a href="{{ url('/admin/event') }}"><i class='fa fa-link'></i> <span>大事记</span></a></li>
            <li><a href="{{ url('/admin/publicwelfare') }}"><i class='fa fa-link'></i> <span>公益活动</span></a></li>
            <li><a href="{{ url('/admin/activity') }}"><i class='fa fa-link'></i> <span>创业活动</span></a></li>
            {{--<li class="treeview">--}}
                {{--<a href="#"><i class='fa fa-link'></i> 信息管理</span> <i class="fa fa-angle-left pull-right"></i></a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="{{ url('/admin/teacher') }}">导师管理</a></li>--}}
                    {{--<li><a href="#">活动轮播图</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
