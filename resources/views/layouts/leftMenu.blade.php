<style>
   .nav-category {
   padding-top: 10%;
   margin-bottom: -3%; font-size: 19px;
   }
   .brand-logo{
   opacity: .8;
   margin-left: 17%;
   width: 57%;"
   }
   .brand-link {
   background: #0458b1;
   }
   .sidebar{
   min-height: calc(100vh - 63px);
   /* background: linear-gradient(to top, #5768f3, #1c45ef); */
   background: linear-gradient(to top, #778189, #0458b1);
   }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #778189 !important;">
   <!-- Brand Logo -->
   <a href="/" class="brand-link">
      <img src="{{ asset('vendors/dist/img/white-8.png') }}" alt="Logo" class="navbar-brand brand-logo">
      <span class="brand-text font-weight-light"></span>
      <ul class="nav">
         <li class="nav-item nav-category">AZD SYSTEME</li>
      </ul>
   </a>
   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- 
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="{{ asset('vendors/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image') }}">
         </div>
         <div class="info">
            <a href="#" class="d-block">Majida Farid</a>
         </div>
      </div>
      --}}
      <!-- SidebarSearch Form -->
      {{-- 
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
      --}}
      <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
               <a href="{{route('employes')}}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                     Employés
                     {{-- <span class="right badge badge-danger">New</span> --}}
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('categories')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                     Catégories Projets
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('projets')}}" class="nav-link">
                  <i class="nav-icon fa-brands fa-product-hunt"></i>
                  <p>
                     Projets
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('categoriesProduits')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                     Catégories Produits
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('stock')}}" class="nav-link">
                  <i class="nav-icon fa-solid fa-cubes"></i>
                  <p>
                     Stock
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('fournisseurs')}}" class="nav-link">
                  <i class="nav-icon fa-solid fa-cart-shopping"></i>
                  <p>
                     Fournisseurs
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('devis')}}" class="nav-link">
                  <i class="nav-icon fa-solid fa-file-signature"></i>
                  <p>
                     Demandes Devis
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('clientsFideles')}}" class="nav-link">
                  <i class="nav-icon fa-solid fa-user"></i>
                  <p>
                     Clients Fidèles
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('prestations')}}" class="nav-link">
                  <i class="nav-icon fa-solid fa-file-powerpoint"></i>
                  <p>
                     Préstations
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <a href="{{route('actualites')}}" class="nav-link">
                  <i class="nav-icon fa-brands fa-neos"></i>
                  <p>
                     Actualités
                  </p>
               </a>
            </li>
            <li class="nav-item">
               <form action="{{route('logout.perform')}}" method="post" id="logoutForm"> @csrf </form>
               <a class="nav-link" onclick="document.getElementById('logoutForm').submit();">
                  <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
                  <p>
                     Logout
                  </p>
               </a>
            </li>
            {{-- 
            <li class="nav-item menu-open">
               <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                     Lorem ipsum
                     <i class="right fas fa-angle-left"></i>
                  </p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>lorem ipsum</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Lorem ipsum</p>
                     </a>
                  </li>
               </ul>
            </li>
            --}}
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>