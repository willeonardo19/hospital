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

        <!-- search form (Optional)->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <! /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
                @if(Auth::user()->type =='admin' )
                <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
                <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
                <li class="treeview">
                    <a href="#"><i class='fa fa-user'></i> <span> Admin </span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('personal.index') }}">Personal</a></li>
                        <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
                    </ul>
                </li>
                @endif
                @if(Auth::user()->type =='admin' || Auth::user()->type =='doctor')
                <li class="treeview">
                    <a href="#"><i class='fa fa-male'></i> <span> Consulta </span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <!--li><a href="{{ route('consultas.index') }}">Generar Consulta</a></li-->
                        <li><a href="{{ url('admin/consulta') }}">Consultas Pendientes</a></li>
                        <li><a href="{{url('admin/historial')}}">Historial de  Consulta</a></li>
                    </ul>
                </li>
            

                @endif
                @if(Auth::user()->type =='admin' || Auth::user()->type =='secretaria')
                <li class="treeview">
                    <a href="#"><i class='fa fa-male'></i> <span> Pacientes </span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('pacientes.index') }}">Registro de Pacientes</a></li>
                        <li><a href="{{ route('consultas.index') }}">Generar Consulta</a></li>
                        
                    </ul>
                </li>
            

                @endif
                @if(Auth::user()->type =='admin' || Auth::user()->type =='doctor')
                <li class="treeview">
                    <!--a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a-->
                    <a href="#"><i class='fa fa-user-md'></i> <span> Medicos </span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                        <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    </ul>
                </li>
                @endif
                @if(Auth::user()->type =='admin' || Auth::user()->type =='enfermera')
                <li class="treeview">
                    <a href="#"><i class='fa fa-female'></i> <span> Enfermeras </span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">Calendario</a></li>
                        <li><a href="{{url('admin/preconsulta')}}">Pre Consulta</a></li>
                    </ul>
                </li>
                @endif
                @if(Auth::user()->type =='admin' || Auth::user()->type =='laboratorio')
                <li class="treeview">
                    <a href="#"><i class='fa fa-flask'></i> <span> Laboratorio </span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('laboratorio.index') }}">Exámenes de Laboratorio</a></li>
                        <li><a href="{{ route('examen.index') }}">Listado de Exámenes</a></li>
                        

                    </ul>
                </li>
                @endif
                @if(Auth::user()->type =='admin' || Auth::user()->type =='administracion')

                <li class="treeview">
                    <a href="#"><i class='fa fa-file'></i> <span> Administración </span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                        <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    </ul>
                </li>
                 @endif
                @if(Auth::user()->type =='admin' || Auth::user()->type =='administracion')
                <li class="treeview">
                    <a href="#"><i class='fa fa-bar-chart'></i> <span> Reportes </span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                        <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    </ul>
                </li>
                 @endif
                
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
