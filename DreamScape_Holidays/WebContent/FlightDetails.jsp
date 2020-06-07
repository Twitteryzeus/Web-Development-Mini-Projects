<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"
    import="java.sql.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Flight Details</title>
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
<body style="background-color: orange;">
<ul>
  <li><a href="WelcomeAdmin.jsp">Home</a></li>
  <li><a href="EnterDetails.html">Enter Details</a></li>
  <li><a href="ManagePackage.jsp">Manage Package</a></li>
  <li><a href="FlightDetails.jsp">Flight Details</a></li>
</ul>
<%try
{
	Class.forName("com.mysql.jdbc.Driver");
	Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
	Statement st = con.createStatement();
	ResultSet rst = st.executeQuery("select * from Tbl_D_Holidays");
	%>
	<h2 align="center">Flight Details of Customer</h2>
	<br>
	<br>
	<table border="1" style="border: solid;" align="center">
	<tr>
	<th>Package ID</th>
	<th>Name</th>
	<th>Going to</th>
	</tr>
	
	<% while(rst.next())
	{
		%>
		<tr>
		<td><%=rst.getInt(1) %></td>
		<td><%=rst.getString(2) %></td>
		<td><%=rst.getString(3) %></td>
		</tr>
		<% 
					 
	}
	 %></table><% 
}
catch(Exception e){}%>
</body>
</html>