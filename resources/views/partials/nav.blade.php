<nav class="site-nav py-3 px-4 d-flex justify-content-between position-fixed w-100 bg-white">
    <a href="#" class="site-nav__item position-relative">
        <i class="fas fa-envelope"></i>
        <span
            class="site-nav__message-count position-absolute d-flex align-items-center justify-content-center">2</span>
    </a>
    <a href="#" class="site-nav__item position-relative"><i class="fas fa-cog"></i></a>
    <a href="{{ route('my-profile') }}" class="site-nav__item position-relative"><i class="fas fa-user"></i></a>
</nav>
<script>
    document.getElementsByTagName('body')[0].style.paddingBottom = `${document.querySelector('.site-nav').offsetHeight + 25}px`;
</script>
