
<div id="sidebar">
    <div class="sidebar__title">
      <div class="sidebar__img">
        {{-- <img src="images/user_profile_image/" alt="logo" /> --}}
        <h1>Clubix</h1>
      </div>
      <i
        onclick="closeSidebar()"
        class="fa fa-times"
        id="sidebarIcon"
        aria-hidden="true"
      ></i>
    </div>

    <div class="sidebar__menu">
    <!-- active_menu_link -->
      <div class="sidebar__link">
        <i class="fa fa-home"></i>
        
         <a href="admin">dashboard</a>
      </div>
      <h2>Users</h2>
      <div class="sidebar__link">
        <i class="fa fa-building-o"></i>
        <a href="userlist">Users List</a>
      </div>

      <div class="sidebar__link ">
        <i class="fa fa-user-secret" aria-hidden="true"></i>
        <a href="add_user">Add User</a>
      </div>
      
      <div class="sidebar__link ">
        <i class="fa fa-wrench"></i>
        <a href="request">Pending Requests</a>
      </div>
      
      <div class="sidebar__logout">
        <i class="fa fa-power-off"></i>
        <a href="../includes/logout.php">Log out</a>
      </div>
    </div>
 