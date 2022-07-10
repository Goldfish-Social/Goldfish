<form method="GET" action="/i/home">
<!-- search icon for mobile -->
<div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>
<div class="header_search"><i class="uil-search-alt"></i>
    <input value="{{ request('search') }}" name="search" type="text" class="form-control" placeholder="Search for things.." autocomplete="off">
</div>
</form>