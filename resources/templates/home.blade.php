<html>
<head>

  <style>
  body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    color: #bfc5b0;
    display: table;
    font-weight: 100;
  }
  .container {
    text-align: center;
    display: table-cell;
    vertical-align: middle;
  }
  .content {
    text-align: center;
    display: inline-block;
  }
  .title {
    font-size: 96px;
    margin-bottom: 10px;
  }
  .quote {
    font-size: 25px;
    margin-bottom: 5px;
  }
  .quote-sm {
    font-size: 18px;
  }
  </style>

</head>
<body>
  <div class="container">
    <div class="content">
      <div class="title">It's Alive!</div>
      <div class="quote">Slim Skeleton with attitude.</div>
      <div class="quote-sm">{{ date('Y-m-d') }}</div>
    </div>
  </div>
</body>
</html>
