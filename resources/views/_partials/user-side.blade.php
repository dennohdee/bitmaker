<li>
    <a class="{{ (request()->is('home')) ? 'active' : '' }}" href="{{ route('home') }}">
        <i class="fa big-icon fa-home icon-wrap"></i>
        <span class="mini-click-non">Home</span>
    </a>
</li>

<li>
    <a class="{{ (request()->is('investments')) ? 'active' : '' }}" href="{{ route('investments') }}">
        <i class="fa big-icon fa-institution icon-wrap"></i> 
        <span class="mini-click-non">Investments</span>
    </a>
</li>

<li>
    <a class="{{ (request()->is('wallet')) ? 'active' : '' }}" href="{{ route('wallet') }}">
        <i class="fa big-icon fa-suitcase icon-wrap"></i> 
        <span class="mini-click-non">Wallet</span>
    </a>
</li>

<li>
    <a class="{{ (request()->is('deposit-history')) ? 'active' : '' }}" href="{{ route('deposit-history') }}">
        <i class="fa fa-history icon-wrap"></i> 
        <span class="mini-click-non">Deposit History</span>
    </a>
</li>

<li>
    <a class="{{ (request()->is('withdraw-history')) ? 'active' : '' }}" href="{{ route('withdraw-history') }}">
        <i class="fa fa-history icon-wrap"></i> 
        <span class="mini-click-non">Withdraw History</span>
    </a>
</li>

<li>
    <a class="{{ (request()->is('')) ? 'active' : '' }}" href="#">
        <i class="fa fa-user icon-wrap"></i> 
        <span class="mini-click-non">My Account</span>
    </a>
</li>

<li>
    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out icon-wrap"></i> 
        <span class="mini-click-non">Logout</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>
<style>
    .sidebar-nav .metismenu li .active {
        color: 
    #f8f9fa;
    text-decoration: none;
    background:
    #e12503;
}
</style>