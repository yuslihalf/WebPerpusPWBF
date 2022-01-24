<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('image/AdminLTELogo.png') }}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminPerpus</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('image/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          
          <a href="#" class="d-block" >{{ Auth::user()->email }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">  
          
            <a href="/my_blankpage" class="nav-link"> 
                
                <i class="nav-icon fa fa-home"></i>
                <p>
                  Homes                
                </p>
            </a>
          </li>
          

          
          <li class="nav-item has-treeview">
             <a href="#" class="nav-link ">  
           
              
               <i class="fas fa-marker"></i>
               <p>
               
                  Data Master
                 <i class="fas fa-angle-left right"></i>                
               </p>
             </a>
             <ul class="nav nav-treeview">  
             @can('isPegawai')
               <li class="nav-item">    
              
                 <a href="/jenisbuku" class="nav-link ">
               
                   <i class="far fa-circle nav-icon"></i>
                   <p>Jenis Buku</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="/penerbit" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Penerbit</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="/pegawai" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Pegawai</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="/asal" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Asal</p>
                 </a>
               </li> 
               <li class="nav-item">
                 <a href="/buku" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Buku</p>
                 </a>
               </li>      
               <li class="nav-item">
                 <a href="/bahasa" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Bahasa</p>
                 </a>
               </li>
               @endcan    
               <li class="nav-item">
                 <a href="/eksemplar_buku" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Eksemplar Buku</p>
                 </a>
               </li>           
             </ul>
          </li>
          
          @can('isPegawai')
          <li class="nav-item has-treeview">
             <a href="#" class="nav-link ">  
              

               <i class="fas fa-stamp"></i>
               <p>
                 Transaksi
                 <i class="fas fa-angle-left right"></i>                
               </p>
             </a>
             <ul class="nav nav-treeview">  

               <li class="nav-item">    
               
                 <a href="/penerimaan" class="nav-link ">
               
                   <i class="far fa-circle nav-icon"></i>
                   <p>Penerimaan Buku</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="/peminjaman" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Peminjaman Buku</p>
                 </a>
               </li> 
               <li class="nav-item">
                 <a href="/pengembalian" class="nav-link">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Pengembalian Buku</p>
                 </a>
               </li>               
             </ul>
          </li>
          @endcan

          
          <li class="nav-item has-treeview">
             <a href="#" class="nav-link ">  
                 

               <i class="fas fa-calendar-alt"></i>
               <p>
                 Data History
                 <i class="fas fa-angle-left right"></i>                
               </p>
             </a>
             <ul class="nav nav-treeview">  

               <li class="nav-item">    
              
                 <a href="/historyPeminjaman" class="nav-link ">
               
                   <i class="far fa-circle nav-icon"></i>
                   <p>Peminjaman Buku</p>
                 </a>
               </li>
                            
             </ul>
          </li>

          
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>