<header>
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <span class="guitar-icon">
               <img src="../images/electric-guitar.svg">
               <div><h1>Guitar(t)ists</h1></div>
            </span>
         </div>
         <div class="col-md-6">
            <div class="user-info">
               <?php if (isset($_SESSION) && isset($_SESSION['user'])): ?>
                  <div>
                     <a href="me"><?= $_SESSION['user']['full_name'] ?></a>
                     <span>
                        <a href="logout">
                            <img src="images/logout.svg" id="logout" alt="logout" title="Log out" />
                        </a>
                     </span>
                  </div>
               <?php else: ?>
                  <div>
                     <a href="/login">Log in</a>&nbsp;&nbsp;|
                     <a href="/register">Register</a>
                  </div>
               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</header>