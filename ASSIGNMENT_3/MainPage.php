<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Main.css">
</head>
<body>
    <section id="contact">
  <div class="contact-box">
    <div class="contact-links">
      <h2>FEEDBACK</h2>
      <div class="links">
        <div class="link">
          <a><img src="https://i.postimg.cc/m2mg2Hjm/linkedin.png" alt="linkedin"></a>
        </div>
        <div class="link">
          <a><img src="https://i.postimg.cc/YCV2QBJg/github.png" alt="github"></a>
        </div>
        <div class="link">
          <a><img src="https://i.postimg.cc/W4Znvrry/codepen.png" alt="codepen"></a>
        </div>
        <div class="link">
          <a><img src="https://i.postimg.cc/NjLfyjPB/email.png" alt="email"></a>
        </div>
      </div>
    </div>
    <div class="contact-form-wrapper">
      <form method="post" action="Mainphp.php">
        <div class="form-item">
          <input type="text" name="name" required>
          <label>Name:</label>
        </div>
        <div class="form-item">
          <input type="text" name="email" required>
          <label>Email:</label>
        </div>
        <div class="form-item">
          <textarea class="" name="feed" required></textarea>
          <label>Message:</label>
        </div>
        <button class="submit-btn">Send</button>  
      </form>
    </div>
  </div>
</section>
</body>
</html>