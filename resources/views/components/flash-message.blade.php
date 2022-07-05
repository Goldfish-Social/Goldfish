@if(session()->has('message'))
<li>
  <a href="#">
      <div class="drop_text">
          <p>
            {{session('message')}}
          </p>
      </div>
  </a>
</li>
@endif