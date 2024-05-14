<header>   
    @csrf
    <!-- English default -->
    <section id="language">
        <!-- English default -->
        <a href="{{ route('setLocale', 'en') }}" >
            <img src="https://cdn-icons-png.flaticon.com/256/2626/2626476.png" alt="English" width="40" height="40">
        </a>

        <!-- Arabic -->
        <a href="{{ route('setLocale', 'ar') }}">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/17/HS-%D8%B6-_Arabic.png" alt="Arabic" width="40" height="40">
        </a>
    </section>
    {{ Lang::get('Dictionary.header') }}

</header>
