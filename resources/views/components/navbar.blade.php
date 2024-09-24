<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
/>
<nav class="navbar">
    <div class="nav-left">
        <a href="{{'/form'}}" class="nav-link">
            <i class="fas fa-arrow-left"></i>
            Form
        </a>
    </div>
    <div class="nav-center">
        <a href="{{'/'}}" class="nav-name">Asad Munir</a>
    </div>
    <div class="nav-right">
        <a href="/view" class="nav-link">
            View
            <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</nav>

<style>
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #333;
        color: white;
        font-family: Arial, sans-serif;
    }

    .nav-left, .nav-right, .nav-center {
        display: flex;
        align-items: center;
    }

    .nav-center {
        flex-grow: 1;
        justify-content: center;
    }

    .nav-link, .nav-name {
        color: white;
        text-decoration: none;
        font-size: 16px;
        padding: 10px;
        display: flex;
        align-items: center;
    }

    .nav-link i {
        margin-right: 5px;
    }

    .nav-name {
        font-size: 18px;
        font-weight: bold;
    }

    .nav-link:hover, .nav-name:hover {
        background-color: #555;
        border-radius: 5px;
    }
</style>
