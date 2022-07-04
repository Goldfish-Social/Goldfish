<ul>
    <li class="{{ (request()->is('i/account/settings')) ? 'uk-active' : '' }}"><a href="/i/account/settings"> <i class="uil-cog"></i> General </a></li>
    <li class="{{ (request()->is('i/account/settings/profile')) ? 'uk-active' : '' }}"><a href="/i/account/settings/profile"> <i class="uil-user"></i> Profile </a></li>
    <li class="{{ (request()->is('i/account/settings/password')) ? 'uk-active' : '' }}"><a href="/i/account/settings/password"> <i class="uil-unlock-alt"></i> Password </a></li>
    <li class="{{ (request()->is('i/account/settings/avatar')) ? 'uk-active' : '' }}"><a href="/i/account/settings/avatar"> <i class="uil-scenery"></i> Avatar & Cover</a></li>
    <li class="{{ (request()->is('i/account/settings/security')) ? 'uk-active' : '' }}"><a href="/i/account/settings/security"> <i class="uil-shield-check"></i> Security</a></li>
    <li class="{{ (request()->is('i/account/settings/sessions')) ? 'uk-active' : '' }}"><a href="/i/account/settings/sessions"> <i class="uil-history"></i> Manage Sessions</a></li>
    <li class="{{ (request()->is('i/account/settings/danger')) ? 'uk-active' : '' }}"><a href="/i/account/settings/danger"> <i class="uil-trash-alt"></i> Delete account</a></li>
</ul>