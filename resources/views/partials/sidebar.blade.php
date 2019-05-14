@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>
            
            @can('users_manage')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.permissions.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.users.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="{{ $request->segment(1) == 'laboratorios' ? 'active' : '' }}">
                <a href="{{ route('admin.laboratorios.index') }}">
                    <i class="fa fa-book"></i>
                    <span class="title">Gestion de Laboratorios</span>
                </a>
            </li>

            <li class="{{ $request->segment(1) == 'materias' ? 'active' : '' }}">
                <a href="{{ route('admin.materias.index') }}">
                    <i class="fa fa-book"></i>
                    <span class="title">Gestion de Materias</span>
                </a>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">Gestion de Grupos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'gruposLaboratorio' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.gruposLaboratorio.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Grupos de Laboratorio
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'gruposMateria' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.gruposMateria.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">Grupos de Materia
                            </span>
                        </a>
                    </li>
                
                </ul>
            </li>


            <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span class="title">Asignaciones</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
    
                        <li class="{{ $request->segment(2) == 'asignaciones' ? 'active active-sub' : '' }}">
                            <a href="{{ route('admin.asignaciones.index') }}">
                                <i class="fa fa-briefcase"></i>
                                <span class="title">Aux/Est - Grupos                                 </span>
                            </a>
                        </li>
                        <li class="{{ $request->segment(2) == 'gruposMateria' ? 'active active-sub' : '' }}">
                            <a href="{{ route('admin.gruposMateria.index') }}">
                                <i class="fa fa-briefcase"></i>
                                <span class="title">Otros
                                </span>
                            </a>
                        </li>
                    
                    </ul>
                </li>
            @endcan

            @role('docente')
            <li class="{{ $request->segment(1) == 'materias' ? 'active' : '' }}">
                <a href="{{ route('docmaterias.index') }}">
                    <i class="fa fa-book"></i>
                    <span class="title">Materias Docente</span>
                </a>
            </li>
            @endrole
            
            @role('auxiliar')
            <li class="{{ $request->segment(1) == 'materias' ? 'active' : '' }}">
                <a href="{{ route('auxmaterias.index') }}">
                    <i class="fa fa-book"></i>
                    <span class="title">Materias Auxiliar</span>
                </a>
            </li>
            @endrole
            
            
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Cambiar Contrasenia</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!}
