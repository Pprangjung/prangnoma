<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact me</title>
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style-yona.css" />
		<link rel="stylesheet" type="text/css" href="pater/pater.css" />
		<link rel="stylesheet" type="text/css" href="css/styForm.css">
</head>
<body>
	<div class="logoPrang"><a href="index.html">prangnoma</a></div>
	<div class="menu-section">
  <div class="menu-toggle">
    <div class="one"></div>
    <div class="two"></div>
    <div class="three"></div>
  </div>
  <nav>
		<ul role="navigation" class="hidden menu menu--yona">
			
					<a class="menu__item" href="index.html">
						<span class="menu__item-name">Portfolio</span>
						<span class="menu__item-label">ดูตัวอย่างงาน</span>
					</a>
					<a class="menu__item" href="Awards.html">
						<span class="menu__item-name">Awards</span>
						<span class="menu__item-label">ผลงานที่ได้รับรางวัล</span>
					</a>
					<a class="menu__item" href="About.html">
						<span class="menu__item-name">About& Other works</span>
						<span class="menu__item-label">เกี่ยวกับเรา และงานอื่นๆ</span>
					</a>
					<a class="menu__item" href="#">
						<span class="menu__item-name">Download</span>
						<span class="menu__item-label">แบ่งปันไฟล์เพื่อใช้ในงานออกแบบ</span>
					</a>
					<a class="menu__item" href="#">
						<span class="menu__item-name">Contact</span>
						<span class="menu__item-label">ติดต่อเราได้ที่</span>
					</a>
					<a class="menu__item" href="#">
						<span class="menu__item-name">English</span>
						<span class="menu__item-label">Change language </span>
					</a>
		</ul>
	</nav>
</div>
	


	<div id="container">
  <h1>  Keep in Touch </h1>
  <div class="underline">


  
  </div>
  <br>

<div class="iconBox">
 <div class="iconB1"> <a href="https://dribbble.com/PrangNoMa" target="_blank"><img src="img/contact1.png"></a> </div>
 <div class="iconB2"><a href="https://www.behance.net/prangjung" target="_blank"> <img src="img/contact2.png"></a></div>
 <div class="iconB3"> <a href="mailto:sakulrat.11@gmail.com?Subject=Hello%20Prang%20I'd to chat about " target="_top"> <img src="img/contact3.png"> </a> </div> 
 <div class="iconB4"><a href="https://twitter.com/PrangNoMa" target="_blank" > <img src="img/contact4.png"></a></div>


</div>
 
  <form action="contactform.php" method="post" id="contact_form">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="ใส่ชื่อของคุณ" name="name" id="name_input" required>
    </div>
    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="ใส่อีเมล์ของคุณ" name="email" id="email_input" required>
    </div>
    <div class="telephone">
      <label for="name"></label>
      <input type="text" placeholder="เบอร์โทรศัพท์เพื่อติดต่อ" name="telephone" id="telephone_input" required>
    </div>
    <div class="subject">
      <label for="subject"></label>
      <select placeholder="หัวข้อที่พูดคุย" name="subject" id="subject_input" required>
        <option disabled hidden selected>หัวข้อที่พูดคุย</option>
        <option>อยากเริ่มทำโปรเจค</option>
        <option>สอบถามราคางาน</option>
        <option>สัพเพเหระ</option>
      </select>
    </div>
    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="อยากบอกว่า..." id="message_input" cols="30" rows="5" required></textarea>
    </div>

    <div class="submit">
      <input type="submit" value="ส่งข้อความ" name="submit" id="form_button" />
    </div>
  </form><!-- // End form -->
</div><!-- // End #container -->




	<script src="js/charming.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/demo.js"></script>
		<script src="js/demo-yona.js"></script>
	<script src='js/jquery.min.js'></script>
	


	
	<script >$(".menu-toggle").on('click', function() {
  $(this).toggleClass("on");
  $('.menu-section').toggleClass("on");
  $("nav ul").toggleClass('hidden');
});
//# sourceURL=pen.js
</script>
</body>
</html>