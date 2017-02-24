<!DOCTYPE html>
<html lang="en">
<head>
<title>Penggajian || SMK Assalaam Bandung</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{url('css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{url('css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{url('css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{url('css/matrix-media.css')}}" />
<link rel="stylesheet" href="{{url('css/uniform.css')}}" />
<link href="{{url('font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{url('css/jquery.gritter.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="/">Assalaam</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li>
          <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="icon-key"></i>&nbsp;Logout
          </a>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar"><a href="/" class="visible-phone"><i class="icon icon-home"></i> Home</a>
  <ul>
    <li>
      <a href="/jabatan"><i class="icon icon-briefcase"></i> <span>Jabatan</span></a> 
    </li>
    <li>
      <a href="/golongan"><i class="icon icon-group"></i> <span>Golongan</span></a>
    </li>
    <li>
      <a href="/katelembur"><i class="icon icon-cogs"></i> <span>Kategori Lembur</span></a>
    </li>
    <li>
      <a href="/pegawai"><i class="icon icon-user"></i> <span>Pegawai</span></a>
    </li>
    <li>
      <a href="/lempeg"><i class="icon icon-globe"></i> <span>Lembur Pegawai</span></a>
    </li>
    <li>
      <a href="/tunjangan"><i class="icon  icon-magnet"></i> <span>Tunjangan</span></a>
    </li>
    <li>
      <a href="/tunpeg"><i class="icon icon-list-alt"></i> <span>Tunjangan Pegawai</span></a>
    </li>
    <li>
      <a href="/gaji"><i class="icon icon-money"></i> <span>Penggajian</span></a>
    </li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="/" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

  <div class="container-fluid">
    <div class="row-fluid">
          @yield('content')
    </div>
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Matrix Admin. Ica Cahyani | SMK Assalaam Bandung </div>
</div>

<!--end-Footer-part-->

<script src="{{url('excanvas.min.js')}}"></script> 
<script src="{{url('js/jquery.min.js')}}"></script> 
<script src="{{url('js/jquery.ui.custom.js')}}"></script> 
<script src="{{url('js/bootstrap.min.js')}}"></script> 
<script src="{{url('js/jquery.flot.min.js')}}"></script> 
<script src="{{url('js/jquery.flot.resize.min.js')}}"></script> 
<script src="{{url('js/jquery.peity.min.js')}}"></script> 
<script src="{{url('js/fullcalendar.min.js')}}"></script> 
<script src="{{url('js/matrix.js')}}"></script> 
<script src="{{url('js/matrix.dashboard.js')}}"></script> 
<script src="{{url('js/jquery.gritter.min.js')}}"></script> 
<script src="{{url('js/matrix.interface.js')}}"></script> 
<script src="{{url('js/matrix.chat.js')}}"></script> 
<script src="{{url('js/jquery.validate.js')}}"></script> 
<script src="{{url('js/matrix.form_validation.js')}}"></script> 
<script src="{{url('js/jquery.wizard.js')}}"></script> 
<script src="{{url('js/jquery.uniform.js')}}"></script> 
<script src="{{url('js/select2.min.js')}}"></script> 
<script src="{{url('js/matrix.popover.js')}}"></script> 
<script src="{{url('js/jquery.dataTables.min.js')}}"></script> 
<script src="{{url('js/matrix.tables.js')}}"></script> 

<script>
    function myFunction() {
        document.getElementById("demo").innerHTML = "Sudah Terambil";
    }
</script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }
  
// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
