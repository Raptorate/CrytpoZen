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
       <button type="button" class="btn btn-primary btn-sm mt-1" onclick="location.href = './transaction_form.php';">Buy Crypto</button>
       <button type="button" class="btn btn-primary btn-sm mt-1" onclick="location.href = './transaction_form.php';">Sell Crypto</button>
       <button type="button" class="btn btn-primary btn-sm mt-1" onclick="location.href = './transaction_form.php';">Deposit Cash</button>
       <button type="button" class="btn btn-primary btn-sm mt-1" onclick="location.href = './transaction_form.php';">Withdraw Cash</button>

     </li>
     <li class="nav-item dropdown">
       <button type="button" class="btn btn-outline-primary btn-sm ml-1 mt-1" onclick="location.href = '../transaction_form.php';">Exchange Crypto</button>
     </li>
     <!-- Notifications Dropdown Menu -->
     <li class="nav-item dropdown">
       <a class="nav-link" data-toggle="dropdown" href="#">
         <i class="far fa-user-circle text-primary" style="font-size: 16px;"></i>
         <span class="">Hello </span>
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
         <a href="#" class="dropdown-item">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
             <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
           </svg>
           <i class="bi bi-telephone-forward"></i>LIVE
         </a>

         <div class="dropdown-divider"></div>
<<<<<<< HEAD
         <a href="reset-password.php" class="dropdown-item dropdown-footer text-info"><b><i class="fa fa-key" aria-hidden="true"></i>Reset Password</b></a>
=======
         <a href="reset-password.php" class="dropdown-item dropdown-footer text-info"><b><i class="fa fa-key" aria-hidden="true"></i> Reset Password</b></a>
>>>>>>> index2Issue
         <a href="logout.php" class="dropdown-item dropdown-footer text-danger"><b><i class="fa fa-sign-out-alt"></i> Signout</b></a>


       </div>

     </li>
   </ul>
 </nav>
 <!-- /.navbar -->