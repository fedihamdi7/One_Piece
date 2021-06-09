
<div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img src="../storage/images/user_avatar/{{ Auth::user()->image }} " alt="logo" />
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
            <a href="{{route('home')}}">Home</a>
          </div>
          <div class="sidebar__link ">
          <i class="fa fa-desktop" axria-hidden="true"></i>

            <a href="responsable">Dashboard</a>
          </div>

          <div class="sidebar__link ">
            <i class="fa fa-dropbox" aria-hidden="true"></i>

            <a href=" {{route('sidebarClub')}} ">My Club</a>
          </div>

          <div class="sidebar__link ">
          <i class="fa fa-picture-o" aria-hidden="true"></i>
            <a href=" {{ route('changelogo')}} ">Change Logo</a>
          </div>

          {{-- <div class="sidebar__link ">
            <i class="fa fa-user-secret" aria-hidden="true"></i>
            <a href="event">Events</a>
          </div> --}}

          <div class="sidebar__link">
          <i class="fa fa-users" aria-hidden="true"></i>
            <a href="{{route('teams.index')}}">Team</a>
          </div>
          <div class="sidebar__link ">
          <i class="fa fa-paint-brush" aria-hidden="true"></i>
            <a href="{{route('ClubTheme')}}">Change Theme</a>
          </div>
          <div class="sidebar__link">
          <i class="fa fa-comment-o" aria-hidden="true"></i>
            <a href="{{route('posts')}}">Post</a>
          </div>
          <div class="sidebar__link">
          <i class="fa fa-address-card-o" aria-hidden="true"></i>
          <a href="{{ route('aboutus')}}">About Us</a>
         </div>
          <div class="sidebar__link">
            <i class="fa fa-calendar" aria-hidden="true"></i>
              <a href="{{ route('event_list.index')}}"> Events List</a>
            </div>
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        Log out
        </a>
          </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
