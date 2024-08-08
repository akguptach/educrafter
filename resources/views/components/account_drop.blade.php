<?php $website = \App\Models\Website::select('currency')->where('website_type','Educrafter')->first(); ?>
<li class="nav-item dropdown user-dropdown">
    <a class="nav-link" href="{{route('student.profile')}}" >
        <?php echo Auth::user()->first_name.' '.Auth::user()->last_name;?>
    </a>
</li>
<li class="nav-item dropdown user-dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php //echo Auth::user()->first_name.' '.Auth::user()->last_name;?>
        Account
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink" style="z-index:9999">
        <?php /*<li class="px-3 user-amount">
        <p class="mb-0">Wallet Amount: <span>{{$website->currency}} 00.00</span></p>
        <p class="mb-0">Free Credit: <span>{{$website->currency}} 0</span></p>
        </li>
        <li><hr class="dropdown-divider mt-0"></li>
        <li><a class="dropdown-item fs-7" href="{{route('student.profile')}}"> <?= Auth::user()->email;?></a></li>
		<li><a class="dropdown-item fs-7" href="{{route('order.transactions')}}">View Order(s)</a></li>
        <li><a class="dropdown-item fs-7" href="{{route('order.statements')}}">View Transaction(s)</a></li>
        <li><a class="dropdown-item fs-7" href="{{route('student.profile')}}">My Profile</a></li>
		<li><a class="dropdown-item fs-7" href="{{route('student.changepass')}}">Change Password</a></li>
        <li><a class="dropdown-item fs-7" href="{{route('order.refer_friend')}}">Refer A Friend</a></li>
        <li><hr class="dropdown-divider"></li>*/ ?>
        <li><a class="dropdown-item fs-7" href="{{route('logout')}}">Logout</a></li>
    </ul>
</li>  