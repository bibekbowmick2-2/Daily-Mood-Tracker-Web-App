<nav style="background-color: #4a90e2; padding: 16px 30px; display: flex; justify-content: space-between; align-items: center; color: white;">
  <div style="font-size: 20px; font-weight: bold;">
    MyApp
  </div>
  <ul style="list-style: none; display: flex; gap: 20px; margin: 0; padding: 0;">
    <li><a href="/" style="color: white; text-decoration: none; font-weight: 500;">Home</a></li>
    @guest
    <li><a href="/login" style="color: white; text-decoration: none; font-weight: 500;">Login</a></li>
    <li><a href="/register" style="color: white; text-decoration: none; font-weight: 500;">Register</a></li>
    @endguest


    @auth
    <li><a href="/welcome" style="color: white; text-decoration: none; font-weight: 500;">Home</a></li>
    <li><a href="/about" style="color: white; text-decoration: none; font-weight: 500;">Mood History Page </a></li>
    <li><a href="/contact" style="color: white; text-decoration: none; font-weight: 500;">Weekly Mood Summary </a></li>
    <li><a href="/logout" style="color: white; text-decoration: none; font-weight: 500;">Logout</a></li>
    @endauth
  </ul>
</nav>
