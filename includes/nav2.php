 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="index2.php" class="nav-link">Home</a>
     </li>
   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
     <!-- Messages Dropdown Menu -->
     <li class="nav-item dropdown">
       <button type="button" class="btn btn-primary btn-sm mt-1">Buy Crypto</button>
       <button type="button" class="btn btn-primary btn-sm mt-1">Sell Crypto</button>
       <button type="button" class="btn btn-primary btn-sm mt-1">Deposit Cash</button>
       <button type="button" class="btn btn-primary btn-sm mt-1">Withdraw Cash</button>

     </li>
     <li class="nav-item dropdown">
       <button type="button" class="btn btn-outline-primary btn-sm ml-1 mt-1">Exchange Crypto</button>
     </li>
     <!-- Notifications Dropdown Menu -->
     <li class="nav-item dropdown">
       <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="far fa-user-circle text-primary" style="font-size: 16px;"></i>
         <span class="">Sanz</span>
       </a>
       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <div class="image my-lg-3">
           <p class="mt-2"><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></p>
         </div>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fa fa-cog"></i> Settings
         </a>
         <div class="dropdown-divider"></div>
         <a href="transactions2.php" class="dropdown-item">
           <i class="fa fa-dollar-sign"></i> Transaction
         </a>
         <div class="dropdown-divider"></div>
         <a href="#" class="dropdown-item">
           <i class="fa fa-info-circle"></i>Help
         </a>
         <div class="dropdown-divider"></div>
         <a href="reset-password.php" class="dropdown-item dropdown-footer text-info"><b><i class="fa fa-key" aria-hidden="true"></i>Reset Password</b></a>
         <a href="logout.php" class="dropdown-item dropdown-footer text-danger"><b><i class="fa fa-sign-out-alt"></i> Signout</b></a>

       </div>

     </li>
   </ul>
 </nav>
 <!-- /.navbar -->