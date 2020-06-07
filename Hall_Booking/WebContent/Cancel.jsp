<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"
    import="java.sql.*"
    import="java.util.*"
    import="java.util.Date"
    import="java.text.ParseException"
    import="java.text.SimpleDateFormat"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Cancel</title>
</head>
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
<body style="background-image: url('chuttersnap-ck09NUHnn1Q-unsplash.jpg');">
<ul>
  <li><a href="WelcomeAdmin.jsp">Home</a></li>
  <li><a href="HallBook.jsp">Book Hall</a></li>
  <li><a href="Cancel.jsp">Cancel</a></li>
</ul>
<% try
{
	Class.forName("com.mysql.jdbc.Driver");
	Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
	Statement st = con.createStatement();
	ResultSet rst = st.executeQuery("select * from Hall_booking_master");
	
	%>
	<br><br>
	<table border="1" style="border: solid; color: white;" align="center" >
	<tr>
	<th>Hid</th>
	<th>Event_name</th>
	<th>Event_title</th>
	<th>Number_of_participant</th>
	<th>Department</th>
	<th>Organized_by</th>
	<th>Event_date</th>
	<th>Event_time</th>
	<th>Hall_name</th>
	<th>Booking_date</th>
	<th>Status</th>
	<th>Cancel</th>
	</tr>
	
	<% 
	while(rst.next())
	{%>
	<tr>
	<td><%=rst.getInt(1) %></td>
	<td><%=rst.getString(2) %></td>
	<td><%=rst.getString(3) %></td>
	<td><%=rst.getString(4) %></td>
	<td><%=rst.getString(5) %></td>
	<td><%=rst.getString(6) %></td>
	<td><%=rst.getString(7) %></td>
	<td><%=rst.getString(8) %></td>
	<td><%=rst.getString(9) %></td>
	<td><%=rst.getString(10) %></td>
	<td><%=rst.getString(11) %></td>
	<td><a href="cancel?id=<%=rst.getInt(1)%>"><button>Cancel</button></a></td>
	<%} %>
	</tr>
</table><%
	}
catch(Exception e){}
			%>
</body>
</html>