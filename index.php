<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900');
    html, body {
      height:100%;
      width: 100%;
      margin: 0;
      color: white;
      background: black;
      font-family: "Source Sans Pro";
      font-weight: 400;
      font-style: normal;
      text-align: center;
    }
    body {
      background:
      linear-gradient(
        rgba(0, 21, 104, 0.4),
        rgba(0, 0, 0, 0.7),
        rgba(0, 21, 104, 0.4)
      ),
      url('https://libertyjs.com/wp-content/uploads/2019/02/439.jpg');
      background-size: cover;
      background-position: center;
    }
    .overlay {
      width:100%;
      height:100%;
      mix-blend-mode: multiply;
      position: absolute;
      background: rgba(0, 36, 178, 0.5);
    }
    .center {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    img {
	  align-self: center;
	  max-width: 280px;
      width: 70%;
    }
	p {
	  margin: 0.5em;
	}
    .dates {
      font-size: 44px;
    }
    .venue {
      font-size: 30px;
    }
  </style>
  <title>LibertyJS - Philadelphia JavaScript Conference</title>
</head>
<body>
    <div class="center">
      <img src="https://libertyjs.com/wp-content/uploads/2019/02/logo-Dark-BG.png" alt="Liberty JS Logo">

      <p class="dates">October 24-25, 2019</p>
      <p class="venue">National Museum of American Jewish History</p>
      <p class="venue"> Philadelphia, PA</p>
    </div>
	<div class="overlay"></div>
</body>
</html>
