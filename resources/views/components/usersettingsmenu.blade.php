 <!-- Settings Menu -->
 <div class="col-lg-3 theiaStickySidebar">
     <div class="settings-widget">
         <div class="settings-menu">
             <ul>
                 <li>
                     <a href="{{ url('user-settings') }}" class="{{ Request::is('user-settings') ? 'active' : '' }}">
                         <i class="feather-user"></i> Profile
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-security') }}" class="{{ Request::is('user-security') ? 'active' : '' }}">
                         <i class="feather-shield"></i> Security
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-preferences') }}"
                         class="{{ Request::is('user-preferences') ? 'active' : '' }}">
                         <i class="feather-star"></i> Preferences
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-notifications') }}"
                         class="{{ Request::is('user-notifications') ? 'active' : '' }}">
                         <i class="feather-bell"></i> Notifications
                     </a>
                 </li>
                 <li>
                     <a href="{{ url('user-integration') }}"
                         class="{{ Request::is('user-integration') ? 'active' : '' }}">
                         <i class="feather-git-merge"></i> Integration
                     </a>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 <!-- /Settings Menu -->
