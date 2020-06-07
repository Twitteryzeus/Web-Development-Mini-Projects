<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"
    import="java.sql.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Hall Booking</title>
</head>
<script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || charCode==8)
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

    </script>
    <script language="Javascript" type="text/javascript">

        function onlyNumbers(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 47 && charCode < 58)|| charCode==8)
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

    </script>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111111;
}
</style>
<body style="background-image: url('lotus_evija_2019_electric_hypercar_4k_8k.jpg');">
<ul>
  <li><a href="WelcomeAdmin.jsp">Home</a></li>
  <li><a href="HallBook.jsp">Book Hall</a></li>
  <li><a href="Cancel.jsp">Cancel</a></li>
</ul>
<%long millis=System.currentTimeMillis();  
java.sql.Date date=new java.sql.Date(millis); %>
<form action="book">
<p align="center">Enter Event Name <input type="text" name="ename" required="required" style="background: transparent;"></p>
<p align="center">Enter Event Title <input type="text" name="etitle" onkeypress="return onlyAlphabets(event,this);" style="background: transparent;" required="required"></p>
<p align="center">Enter Number of Participants <input type="text" name="strength" onkeypress="return onlyNumbers(event,this);" style="background: transparent;" required="required"></p>
<p align="center">Enter Department <input type="text" name="dept" onkeypress="return onlyAlphabets(event,this);" style="background: transparent;" required="required"></p>
<p align="center">Organised By <input type="text" name="by" onkeypress="return onlyAlphabets(event,this);" style="background: transparent;" required="required"></p>
<p align="center">Event Date <input type="date" min="<%=date %>" name="edate" required="required" style="background: transparent;"></p>
<p align="center">Event Time <select name="etime" style="background: transparent;">
<option value="9:00AM">9:00AM</option>
<option value="9:30AM">9:30AM</option>
<option value="10:00AM">10:00AM</option>
<option value="10:30AM">10:30AM</option>
<option value="11:00AM">11:00AM</option>
<option value="11:30AM">11:30AM</option>
<option value="12:00PM">12:00PM</option>
<option value="12:30PM">12:30PM</option>
<option value="1:00PM">1:00PM</option>
<option value="1:30PM">1:30PM</option>
<option value="2:00PM">2:00PM</option>
<option value="2:30PM">2:30PM</option>
<option value="3:00PM">3:00PM</option>
<option value="3:30PM">3:30PM</option>
<option value="4:00PM">4:00PM</option>
<option value="4:30PM">4:30PM</option>
</select></p>
<p align="center">Hall Name <select name="hname" style="background: transparent;">
<option value="Srimca_hall">Srimca_hall</option>
<option value="JD_hall">JD_hall</option>
<option value="Manjula_hall">Manjula_hall</option>
<option value="Pushpam_hall">Pushpam_hall</option>
</select></p>
<p align="center">Booking Date <input type="date" name="bdate" value="<%=date %>" readonly="readonly" style="background: transparent;"></p>
<center><button>Submit</button></center>
</form>
</body>
</html>