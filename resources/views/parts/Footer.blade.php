<footer>
    <div class="container">
      <div class="wrapper">
        <a href="{% url 'index'%}" class="footer-logo">
          <h2 class="h2 logoh2">my blog </h2>
      </div>
      <div class="wrapper">
        <p class="footer-title">Quick Links</p>
        <ul>
         <li>
            <a href="{% url 'index'%}" class="footer-link">Home</a>
          </li>
          <li>
            <a href="{% url 'newPost'%}" class="footer-link">New Post</a>
          </li>
        </ul>
      </div>
    </div>
    <p class="copyright">
      &copy; Copyright 2024 <a href="#">My blog</a>
    </p>
</footer>