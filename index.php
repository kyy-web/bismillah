<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" href="stylesheetP6.css">
  <link rel="stylesheet" href="responsive.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
  <div class="header">
    <div class="header-logo">Progate</div>
    <div class="header-list">
      <ul>
        <li>Library</li>
        <li>Exercise</li>
        <li>Media Social</li>
      </ul>
    </div>
  </div>
  <div class="main">
    <div class="copy-container">
      <h1 style="text-align: center;">PROGATE</h1>
      <h3 style="text-align: center; color: #96897f;">Platform Online untuk Belajar Coding</h3>
    </div>
    <div class="contents">
      <h3 class="section-title" style="text-align: center;">Library</h3>
      <div class="contents-item">
        <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/html.svg">
        <p>HTML & CSS</p>
      </div>
      <div class="contents-item">
        <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/php.svg">
        <p>PHP</p>
      </div>
      <div class="contents-item">
        <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/ruby.svg">
        <p>Ruby</p>
      </div>
      <div class="contents-item">
        <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/html/study/swift.svg">
        <p>Swift</p>
      </div>
    </div>
    <div class="formulir">
        <h3>Kritik dan Saran</h3>
    <form action="welcome.php" method="POST">
        <p>Username: <input type="text" name="nama" /></p>
        <p>E-mail: <input type="text" name="email" /></p>
        <label>Materi yang disuka:</label>
            <label><input type="radio" name="materi" value="HTMLCSS"/>HTML & CSS</label>
            <label><input type="radio" name="materi" value="PHP"/>PHP</label>
            <label><input type="radio" name="materi" value="Ruby"/>Ruby</label>
            <label><input type="radio" name="materi" value="Swift"/>Swift</label>
            <p>Kritik dan Saran: <input type="text" name="kritik" /></p>
            <input type="submit" name="submit" value="SUBMIT" />
    </form>
</div>
  <div class="footer">
    <div class="footer-logo">Progate</div>
    <div class="footer-list">
      <ul>
        <li>Library</li>
        <li>Excercise</li>
        <li>Media Social</li>
      </ul>
    </div>
  </div>
</body>

</html>