<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset('storage/users/'.Auth::user()->foto) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ Auth::user()->name ?? ''}}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="{{ route('home') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                {{-- <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span> --}}
              </a>
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Entradas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{ route('dizimos.index') }}">
                    <i class="fa fa-circle-o"></i> Dízimos
                  </a>
                </li>
                <li>
                  <a href="{{ route('ofertas.index') }}">
                    <i class="fa fa-circle-o"></i> Ofertas
                  </a>
                </li>
                <li>
                  <a href="{{ route('historics.index') }}">
                    <i class="fa fa-circle-o"></i> Histórico de lançamento
                  </a>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Saídas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="{{ route('dizimos.index') }}">
                    <i class="fa fa-circle-o"></i> Lançar Saídas
                  </a>
                </li>
                <li>
                  <a href="{{ route('historics.index') }}">
                    <i class="fa fa-circle-o"></i> Histórico de Saídas
                  </a>
                </li>
              </ul>
            </li>
            {{-- <li>
              <a href="#">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-yellow">12</small>
                  <small class="label pull-right bg-green">16</small>
                  <small class="label pull-right bg-red">5</small>
                </span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level One
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li class="treeview">
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li> --}}
            <li><a href="#"><i class="fa fa-book"></i> <span>Documentação</span></a></li>
            <li class="header">CONFIGURAÇÕES</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i> <span> Usuários</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> Lista de Usuários</a></li>
              <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i> Lista de Perfis</a></li>
              <li><a href="{{ route('permissions.index') }}"><i class="fa fa-circle-o"></i> Lista de Permissões</a></li>
              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>