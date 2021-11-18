<style>
  #sidebar .app-brand a:hover{
    border:0;
    outline: none;
    color: white;
  }
</style>
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand" style="background-color:#5d85d5;">
        
          <img style="width: 170px; height:70px;"  src="{{asset('logo/lib.png')}}" alt="">
        
      </div>
      <!-- begin sidebar scrollbar -->
      <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">

        <li  class="has-sub" >
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Book"
                  aria-expanded="false" aria-controls="Book">
                  <span class="nav-text">Book</span> <b class="caret"></b>
                </a>
                <ul  class="collapse"  id="Book">
                  <div class="sub-menu">

                    <li >
                      <a href="{{ route('create.book') }}">Create Book</a>
                    </li>

                     <li >
                      <a href="{{ route('view.book') }}">Manage book</a>
                    </li>
                  </div>
                </ul>
              </li>

            

             
              {{-- <hr class="separator" /> --}}

            {{-- <li  class="has-sub" >
                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components2"
                  aria-expanded="false" aria-controls="components2">
                  <span class="nav-text">Dashboard</span> <b class="caret"></b>
                </a>
              </li>
                <ul  class="collapse"  id="components2">
                  <div class="sub-menu">

                    <li >
                      <a  href="">Book Count</a>
                    </li>

                    <li >
                      <a  href=""> Subscription Count</a>
                    </li>

                  </div>
                </ul>
              </li> --}}

             

              
              
              
              
  
    </ul>
      </div>



    </div>
  </aside>
