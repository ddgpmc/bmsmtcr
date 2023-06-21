<div class="bg-gray-800 border-r-4 border-gray-900" id="sidebar-wrapper">
  <div class="flex items-center justify-center h-16 px-4 bg-gray-900">
    <img src="{{ URL::asset('images/logo.png')}}" class="w-40" alt="Logo">
  </div>
  <ul class="list-none p-0 mt-4">
    <li><a href="/dashboard" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white {{ (request()->is('dashboard*')) ? 'bg-gray-700' : '' }}"><i class="fa fa-home fa-lg mr-2"></i>Dashboard</a></li>
    <li><a href="/resident" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white {{ (request()->is('resident*')) ? 'bg-gray-700' : '' }}"><i class="fa fa-user-o fa-lg mr-2"></i>Resident Information</a></li>
    <li><a href="/blotter" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white {{ (request()->is('blotter*')) ? 'bg-gray-700' : '' }}"><i class="fa fa-folder fa-lg mr-2"></i>Blotters Record</a></li>
    <li><a href="/schedule" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white {{ (request()->is('schedule*')) ? 'bg-gray-700' : '' }}"><i class="fa fa-suitcase fa-lg mr-2"></i>Settlement Schedule</a></li>
    <li><a href="/ordinances" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white {{ (request()->is('userdashboard/ordinances*')) ? 'bg-gray-700' : '' }}"><i class="fa fa-info fa-lg mr-3"></i>Ordinances</a></li>
    <li><a href="/news" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white {{ (request()->is('news*')) ? 'bg-gray-700' : '' }}"><i class="fa fa-newspaper-o fa-md mr-2"></i>News & Updates</a></li>
    <li><a href="/certificate" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-700 hover:text-white {{ (request()->is('certificate*')) ? 'bg-gray-700' : '' }}"><i class="fa fa-certificate fa-lg mr-2"></i>Certificate Issuance</a></li>
    <li>
      <button id="dropdown-btn" class="dropdown-btn list-group-item list-group-item-action flex items-center hover:text-white py-2 px-4 text-gray-300 hover:bg-gray-700 bg-gray-800  {{ (request()->is('setting*')) ? 'active-page' : '' }}"><i class="fa fa-wrench fa-lg mr-2 icon-adjust"></i>Setting
        <span class="fa fa-caret-down align"></span>
      </button>
      <div class="dropdown-container list-group items-center {{ (request()->is('setting*')) ? 'active' : '' }} w-40 p-1" id="dropdown-btns">
        <a href="/setting/account" class="list-group-item list-group-item-action bg-light text-adjust {{ (request()->is('setting/account*')) ? 'active-page' : '' }}"><i class="fa fa-address-card fa-lg icon-adjust"></i>Account</a>
        <a href="/setting/maintenance" class="list-group-item list-group-item-action text-adjust {{ (request()->is('setting/maintenance*')) ? 'active-page' : '' }}"><i class="fa fa-cog fa-lg icon-adjust "></i> Barangay </a>
      </div>
    </li>
  </ul>
</div>
