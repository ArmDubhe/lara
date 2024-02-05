
<!--
    <nav>
        <ul>
            <li><a href="{{ route('r-home') }}">Home</a></li>
            <li><a href="{{ route('r-about') }}">About</a></li>
            <li><a href="{{ route('r-faq') }}">FAQ</a></li>
        </ul>
    </nav>

    https://alvarotrigo.com/blog/hamburger-menu-css/
    https://codepen.io/alvarotrigo/pen/MWEJEWG
-->
<section class="top-nav">
    <div>Logo Here</div>
    <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
        <div class='menu-button'></div>
    </label>
    <ul class="menu">
      <li><a href="{{ route('r-home') }}">Home</a></li>
      <li><a href="{{ route('r-about') }}">About</a></li>
      <li><a href="{{ route('r-faq') }}">FAQ</a></li>
    </ul>
</section>