<header>{{ Lang::get('Dictionary.header') }}
    @csrf
    
    <!-- English default -->
    <a href="{{ route('setLocale', 'en') }}">
        <img src="https://cdn-icons-png.flaticon.com/256/2626/2626476.png" alt="English" width = "40" length="40" style="float:left">
    </a>
    
    <!-- Arabic -->
    <a href="{{ route('setLocale', 'ar') }}">
        <img src="https://upload.wikimedia.org/wikipedia/commons/1/17/HS-%D8%B6-_Arabic.png" alt="Arabic" width = "40" length="40" style="float:left">
    </a>

</header>
