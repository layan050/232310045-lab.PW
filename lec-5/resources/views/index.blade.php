<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lecture 5</title>
</head>
<body>
    <!-- <h3>Array exercise I</h3> -->
    <!-- <script>
        function cobarray(){
            const name = new Array("Layan" , "Remaz" , "Sara" , "Atheer" , "Raghad");
            document.writeln(name[1]);
        }
    </script>
    <script>
        cobarray();
    </script> -->
    <!-- <h3>Array exercise II</h3>
    Calling Array data using a For Loop command <br />
    <script language="JavaScript">
    var nilai = new Array(3);
    nilai[0] = 10;
    nilai[1] = 20;
    nilai[2] = 30;
    for (a = 0; a < 3; a++) {
    document.writeln("<B> Value number " + [a + 1] + ": " + nilai[a] + "<BR>");
  }
</script> -->


<!-- <h3 align="center">Date Object Exercise</h3>
<script language="JavaScript">
  var days = new Array(
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
    "Sunday"
  );
  var months = new Array(
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  );

  var t = new Date();
  var today_day = days[t.getDay() - 1];  // ⚠️ might be a bug, see below!
  var date = t.getDate();
  var this_month = months[t.getMonth()];
  var year = t.getYear(); // ⚠️ old method, see below!
  var hour = t.getHours();
  var minute = t.getMinutes();
  var second = t.getSeconds();

  document.write("<font size=5 face=arial>");
  document.write(
    "<b><center>Today is: " +
      today_day +
      ", Date: " +
      date +
      " " +
      this_month +
      " " +
      year
  );
  document.write("<hr width=700>");
  document.write("</font>");
  document.write("<font size=3 face=arial>");
  document.write(
    "<b><center>Current time = " + hour + ":" + minute + ":" + second
  );
  document.write("</font>");
</script> -->

<!-- <h3 align="center">Date Object Exercise METHOD 2</h3>
<script>
  const days = [
    "Sunday",     // index 0
    "Monday",     // index 1
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday"
  ];

  const months = [
    "January",    // index 0
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December"
  ];

  const t = new Date();
  const todayDay = days[t.getDay()];
  const date = t.getDate();
  const thisMonth = months[t.getMonth()];
  const year = t.getFullYear();
  const hour = String(t.getHours()).padStart(2, '0');
  const minute = String(t.getMinutes()).padStart(2, '0');
  const second = String(t.getSeconds()).padStart(2, '0');

  document.write(`<div style="font-family: Arial; font-size: 20px; text-align: center;">`);
  document.write(`<b>Today is: ${todayDay}, Date: ${date} ${thisMonth} ${year}</b><br>`);
  document.write(`<hr style="width: 700px;">`);
  document.write(`<span style="font-size: 16px;"><b>Current time = ${hour}:${minute}:${second}</b></span>`);
  document.write(`</div>`); -->
<!-- </script> -->

<!-- <h3>Exercise Using the Math Object</h3>
<script>
  var a = 10;
  var b = 5;

  // Get the larger of the two numbers
  var larger = Math.max(a, b);
  document.write("Between " + a + " and " + b + ", the larger is " + larger + "<br>");

  // Calculate exponentiation: b to the power of a
  var power = Math.pow(b, a);
  document.write(b + " raised to the power of " + a + " is " + power + "<br>");

  // Generate a random number between 0 and 50000
  var visitorNumber = Math.round(Math.random() * 50000);
  document.write("You are visitor number " + visitorNumber + ".<br>");

  // Calculate the square root of that random number
  var squareRoot = Math.sqrt(visitorNumber);
  document.write("The square root of " + visitorNumber + " is " + squareRoot);
</script> -->
<!-- 🟢 const: استخدميه دائمًا إذا ما ناوية تغيري القيمة.

🟡 let: استخدميه إذا بتغيري القيمة لاحقًا.

🔴 var: تجنّبيه، إلا لو كان عندك سبب قديم أو شي معين. -->



<!-- <h3>String Object Exercise</h3>
<script>
  const name = "Layan Khaled Bakrman";
  const length = name.length;
  const substring = name.substring(1, 4);
  const uppercase = name.toUpperCase();
  const nameLink = name.link("Layan.html");

  document.writeln("My name is = " + name + "<br>");
  document.writeln("The length of my name is " + length + " characters <br>");
  document.writeln("Method BIG = " + name.big() + "<br>");
  document.writeln("Method SMALL = " + name.small() + "<br>");
  document.writeln("Method SUB = " + name.sub() + "<br>");
  document.writeln("Method SUP = " + name.sup() + "<br>");
  document.writeln("Method BOLD = " + name.bold() + "<br>");
  document.writeln("Method ITALIC = " + name.italics() + "<br>");
  document.writeln("Method FONTCOLOR = " + name.fontcolor("red") + "<br>");
  document.writeln("Method LOWERCASE = " + name.toLowerCase() + "<br>");
  document.writeln("Method UPPERCASE = " + uppercase + "<br>");
  document.writeln("Method SUBSTRING = " + substring + "<br>");
  document.writeln("Method STRIKE = " + name.strike() + "<br>");
  document.writeln("Method CharAT = " + name.charAt(3) + "<br>");
  document.writeln("Method Link = " + nameLink + "<br>");
  document.writeln("Index of letter 'c' = " + name.indexOf("c") + "<br>");

  const start = name.indexOf("V");
  const end = name.length;
  document.writeln("Remaining word = " + name.substring(start, end) + "<br>");
</script> -->


<!-- 
<h3>Document Object Exercise</h3>
<hr />
With this command, the text in this document will be white.<br />
<script>
  const name = "Febry D F";
  document.bgColor = "pink";
  document.fgColor = "gray";
  document.title = "Learning the Document Object";
  document.linkColor = "red";
  document.vlinkColor = "green";
  document.alinkColor = "white";
  
  const nameLink = name.link("https://www.linkedin.com/in/febri-d-2b9537b1/");
  
  document.writeln("Link color = " + nameLink + "<br>");
</script> -->


<!-- <h3>Window Object Exercise</h3>
<hr />
<script>
  window.status = "Welcome";
  window.alert("Welcome");
  
  const number = window.prompt("Please enter a number:", 0);
  document.write("Your favorite number is = <strong>" + number + "</strong><br>");
  
  const gender = window.confirm("Are you male?");
  
  if (gender) {
    document.write("Nice to meet you!");
  } else {
    document.write("Alright then!");
  }
  
  window.close();
</script> -->




<!-- <CENTER>
    <H3>Document Object Exercise</H3><hr>
    Opening a Web Page with `window.open` and `window.location`
</CENTER>
<SCRIPT LANGUAGE="JavaScript">
    function openPage1() {
        window.open("utsb.html");
    }

    function openPage2() {
        window.location = "kunci_jawaban_uts.html";
    }
</SCRIPT>

<FORM METHOD="POST">
    <P><CENTER>
        <INPUT TYPE="button" VALUE="UTS Answer Key A" ONCLICK="openPage1()">
        <INPUT TYPE="button" VALUE="UTS Answer Key B" ONCLICK="openPage2()">
    </P></CENTER>
</FORM> -->



<!-- <script language="JavaScript">
    function changeColor(color) {
        alert("You selected the color " + color);
        document.bgColor = color;
    }
</script>

<h1 align="center">Event OnClick Exercise</h1>
<hr width="500" color="black" noshade />
<h3 align="center">Select your favorite color.</h3>

<center>
    <form>
        <input type="button" value="Blue" onClick="changeColor('lightblue')" />
        <input type="button" value="Pink" onClick="changeColor('pink')" />
        <input type="button" value="Brown" onClick="changeColor('burlywood')" />
        <input type="button" value="Gray" onClick="changeColor('darkgray')" />
        <input type="button" value="Orange" onClick="changeColor('peachpuff')" />
        <input type="button" value="White" onClick="changeColor('white')" />
    </form>
    
    <form>
        <img
            name="coolFan"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/LOGO_IBIK.png/1200px-LOGO_IBIK.png"
            height="72"
        /><br /><br />
        <input
            type="BUTTON"
            value="Off"
            onClick="coolFan.src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJBZAVVaKE_AQgGYMov1VMtwOQ_vdCtKqikg&s'"
        />
        <input
            type="BUTTON"
            value="On"
            onClick="coolFan.src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPKQPJXgpsvoJ3uWp5F6tWir2VMmHhCp4Hnw&s'"
        />
    </form>
</center> -->




<!-- <h1 align="center">OnFocus and OnBlur Event Exercise</h1>
<hr width="600" color="black" noshade size="10" />

<font face="arial">
  <h3 align="center">R E G I S T R A T I O N</h3>
  <hr width="600" color="black" noshade size="2" />

  <center>
    <form name="f" method="get">
      <table>
        <tr>
          <td width="31%">Student ID (NIM)</td>
          <td width="7%">:</td>
          <td width="62%">
            <input
              type="text"
              name="inim"
              size="9"
              onFocus="console.log('Please fill in your Student ID (NIM)');"
              onBlur="validateNIM()"
            />
          </td>
        </tr>
        <tr>
          <td>Name</td>
          <td>:</td>
          <td>
            <input
              type="text"
              name="inama"
              size="23"
              onFocus="console.log('Please fill in your Name');"
              onBlur="validateName()"
            />
          </td>
        </tr>
        <tr>
          <td>Address</td>
          <td>:</td>
          <td>
            <input
              type="text"
              name="ialamat"
              size="34"
              onFocus="console.log('Please fill in your Address');"
              onBlur="validateAddress()"
            />
          </td>
        </tr>
      </table>

      <hr width="600" color="black" noshade size="2" />
      <p>
        <input type="button" value="Submit" onclick="thankYou()" />
        <input type="reset" value="Reset" />
      </p>
    </form>
  </center>
</font>

<script>
  function validateNIM() {
    if (document.f.inim.value == "") {
      alert("You haven't entered your Student ID (NIM).");
    }
  }

  function validateName() {
    if (document.f.inama.value == "") {
      alert("You haven't entered your Name.");
    }
  }

  function validateAddress() {
    if (document.f.ialamat.value == "") {
      alert("You haven't entered your Address.");
    }
  }

  function thankYou() {
    if (
      document.f.inim.value != "" &&
      document.f.inama.value != "" &&
      document.f.ialamat.value != ""
    ) {
      alert("Thank you for submitting your information.");
    } else {
      alert("Please complete all the fields first.");
    }
  }
</script> -->





<form name="searchForm" onsubmit="search(event)">
  <center>
    <table>
      <tr>
        <td colspan="4" bgcolor="lightblue">
          <h1 align="center">S e a r c h - E n g i n e</h1>
          <hr color="black" size="4" />
        </td>
      </tr>
      <tr>
        <td><b>Search using</b></td>
        <td>
          <img
            src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_92x30dp.png"
            alt="Google Logo"
          />
        </td>
        <td><input name="keyword" size="40" type="text" /></td>
        <td>
          <input type="submit" value="Search .. !!" />
          <input type="reset" value="Reset" />
        </td>
      </tr>
      <tr>
        <td colspan="4" bgcolor="gray">
          <hr color="black" size="4" />
        </td>
      </tr>
    </table>
  </center>
</form>
<script>
  function search(event) {
    event.preventDefault();
    var query = document.searchForm.keyword.value;
    var result =
      "https://www.google.com/search?q=" + encodeURIComponent(query);
    window.open(
      result,
      "google",
      "height=500,width=750,scrollbars=yes,location=yes"
    );
  }
</script>






</body>
</html>