
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICSD11</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="styledate.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
   <!-- <script src="index.js"></script> -->

</head>
<body>
    <header>
    
    <nav>
    <img src="pics/logo.png" alt="Logo" style="width:150px; height: 100px" align="left">
    <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Agenda</a>
         <ul class="submenu">
              <li><a href="register.php">KG2</a></li>
              <li><a href="register.php">KG3</a></li>
              <li><a href="#">Grades</a>
                   <ul class="submenu2">
                     <li><a href="register.php">Grade1</a></li>
                     <li><a href="register.php">Grade2</a></li>
                     <li><a href="register.php">Grade3</a></li>
                     <li><a href="register.php">Grade4</a></li>
                     <li><a href="register.php">Grade5</a></li>
                     <li><a href="register.php">Grade6</a></li>
                     <li><a href="register.php">Grade7</a></li>
                     <li><a href="register.php">Grade8</a></li>
                     <li><a href="register.php">Grade9</a></li>
                 </ul>
              </li>
         </ul>
        </li>
        <li><a href="#">Training Cources</a>
           <ul class="menu2">
           <li><a href="register.php">Accounting For Non-Specialists</a></li>
              <li><a href="register.php">Advanced Digital Marketing </a></li>
              <li><a href="#">Nurse Assistant </a></li>
              <li><a href="#">Health Assistant </a></li>
              <li><a href="#">Pharmacist Assistant </a></li>
              <li><a href="#">Microsoft Office </a></li>
              <li><a href="#">Graphic Design </a></li>
              <li><a href="#">Photography And Video </a></li>
          </ul>
        </li>
        <li><a href="#">Speech Therapy</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>
    </header>

    <script>
    function newFunction() {
        document.getElementById("myform").reset();
    }
</script>

       <h1>AgendaAcademy Registration</h1>
       <form id="myform">
	   <div class="reg">
<table id="tableid" align="center" cellpadding="30">
<tr>
    <td>First Name:</td>
	<td><input type="text" name="Firstname" maxlength="50" id="input1" placeholder="Type your First Name"> </td>
</tr>

<tr>
    <td>Last Name:</td>
	<td><input type="text" name="Lastname" maxlength="50" id="input1" placeholder="Type your Last Name"> </td>
</tr>

<tr>
    <td>Select Ur Grade:</td>
	<td class="csel"><select name="ngrade" width="300px" required>
    <option value="">--Please choose your Grade--</option>
    <option value="KG2">KG2</option>
    <option value="KG3">KG3</option>
    <option value="Grade1">Grade1</option>
    <option value="Grade2">Grade2</option>
    <option value="Grade3">Grade3</option>
    <option value="Grade4">Grade4</option>
	<option value="Grade5">Grade5</option>
    <option value="Grade6">Grade6</option>
    <option value="Grade7">Grade7</option>
    <option value="Grade8">Grade8</option>
	<option value="Grade9">Grade9</option>
    </select></td>
</tr>

<tr>
     <td>Gender</td>
	 <td><input type="radio" name="Gender" value="Male" required> Male &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	     <input type="radio" name="Gender" value="Female" required> Female</td>
</tr>

<tr>
    <td> Day of Birthday:</td>
    <td><input class="input-field" type="text" placeholder="Select your date of birthday" id="selectedDate" required readonly/></td>
</tr>

<tr>
    <td id="dateDropdown"><select id="bday"></select>
	 <select id="bmonth" onchange="yearandmonth(this)"></select>
      <select id="byear" onchange="yearandmonth(this)"></select>
      <button onclick="onOkClick()">Ok</button></td>
</tr>

<tr>
    <td>School Name:</td>
	<td><input type="text" name="Schoolname" maxlength="50" id="input1" placeholder="Type your School Name" required> </td>
</tr>

<tr>
     <td>The Language:</td>
	 <td><input type="radio" name="Gender2" value="French" required> French &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	     <input type="radio" name="Gender2" value="English" required> English</td>
</tr>

<tr>
    <td>Notes:</td>
    <td>
	 <textarea id="areaschool" name="areaschool" rows="4" cols="32" placeholder="Some Notes..."></textarea>
	</td>
</tr>

<tr>
    <td><input type = "button" id="reset_btn" onclick = "newFunction()" value = "Reset" ></td>
    <td><input name="submit_btn" type="submit" id="signup_btn" value="Register"/></td><br>
    <td class="btn"><a href="index.php"><input type="button" id="back_btn" value="Back To Home"/></a></td>
</tr>

</table>
</div>
</form>
<br>

<footer>
<div class="footer-content">

<h3>About Us</h3>
<p>The AgendaAcademy was made to improve the skills of children and youths as a result of their social life.
    Which are improving their skills, improving their creativity, for a better society fill of skilled and we trained persons.
</p>
<ul class="socials">
    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#"><i id="insta" class="fab fa-instagram"></i></a></li>
    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
</ul>
</div>

<div class="footer-bottom">
    <p>Copyright &nbsp; Designed By; 2023 &nbsp; |&nbsp;<a href="#">&nbsp;Ali Hellani&nbsp;</a>&nbsp;|&nbsp; Leb</p>
</div>

</footer>
</body>

<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
   const bday = $("#bday");
   const bmonth = $("#bmonth");
   const byear = $("#byear");
    const selectedDate = $("#selectedDate");

    window.onload = function () {

      yearDropdown();
      monthDropdown();
      dayDropdown();
	  
      $("#dateDropdown").toggle();

      $("#selectedDate").click(function () {
        $("#dateDropdown").toggle();
      });
    };

    function yearDropdown() {

      const currentYear = new Date().getFullYear();

      for (let i = currentYear; i >= 1950; i--) {
        const option = document.createElement("OPTION");
        option.innerHTML = i;
        option.value = i;
        byear.append(option);
      }
    }

    function monthDropdown() {
      const monthNames = [
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
        "December",
      ];
      for (let i = 0; i < monthNames.length; i++) {
        const option = document.createElement("OPTION");
        option.innerHTML = monthNames[i];
        option.value = i;
        bmonth.append(option);
      }
    }

    function dayDropdown() {
      bday.empty();
      const year = byear.val();
      const month = parseInt(bmonth.val()) + 1;

      const days = new Date(year, month, 0).getDate();

      for (let d = 1; d <= days; d++) {
        const option = document.createElement("OPTION");
        option.innerHTML = d;
        option.value = d;
        bday.append(option);
      }
    }

    function yearandmonth($event) {
      this.dayDropdown();
    }

    function onOkClick() {
      const y = byear.val();
      const m = bmonth.val();
      const d = bday.val();

      const date = new Date(y, m, d);
      selectedDate.val(date.toLocaleDateString());
      $("#dateDropdown").hide();
    }

</script>
<script>
      function newFunction(){
        var element = document.getElementById("tableid");
         element.reset()
      }
   </script>
</html>