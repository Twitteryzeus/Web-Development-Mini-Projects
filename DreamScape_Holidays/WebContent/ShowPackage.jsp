<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Packages for you</title>
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
<body style="background-color: orange; ">
<%session=request.getSession(false);
if(session==null)
{
	response.sendRedirect("Login.html");
}
%>
<ul>
  <li><a href="WelcomeAdmin.jsp">Home</a></li>
  <li><a href="EnterDetails.html">Enter Details</a></li>
  <li><a href="ManagePackage.jsp">Manage Package</a></li>
  <li><a href="FlightDetails.jsp">Flight Details</a></li>
</ul>
<%String n=request.getParameter("pname");
String t=request.getParameter("total");
int a=Integer.parseInt(request.getParameter("amount"));
int budget=a/Integer.parseInt(t);

try
{
	int flag=0;
	Class.forName("com.mysql.jdbc.Driver");
	Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
	Statement st = con.createStatement();
	ResultSet rst = st.executeQuery("select * from Available_packages where Tour_Cost_Per_Person<="+(int)budget+"");
	flag=1;
	if(flag==1)
	{%>
	<br>
	<br>
	<table border="1" style="border: solid;" align="center">
			<tr>
			<td>Destination_Place</td>
			<td>Tour_Cost_Per_Person</td>
			<td>Tour_Days</td>
			<td>Package_Inclusions</td>
			<td>Number_of_Days</td>
			<td>Number_of_Nights</td>
			<td>Air_Flight_Cost_Include</td>
			<td>Book</td>
			</tr>
			
		<% while(rst.next())
		{
			if(rst.getString(9).equals("a"))
			{
			%>
			<tr>
			<td><%=rst.getString(2) %></td>
			<td><%=rst.getString(3)%></td>
			<td><%=rst.getInt(4)%></td>
			<td><%=rst.getString(5)%></td>
			<td><%=rst.getInt(6)%></td>
			<td><%=rst.getInt(7)%></td>
			<td><%=rst.getString(8)%></td>
			<td><a href="book?name=<%=n %>&Destination=<%=rst.getString(2)%>&Price=<%=rst.getString(3)%>&tdays=<%=rst.getInt(4)%>&includes=<%=rst.getString(5) %>&Days=<%=rst.getInt(6)%>&Nights=<%=rst.getInt(7)%>&flight=<%=rst.getString(8)%>">Book</a></td>
			</tr>
		<%}
		
		}%>
			</table><%  
		
	}
	else
	{
		try
		{
			Thread.sleep(2000);
		}
		catch(Exception e){}
		out.println("No packages matches your choice....we are sorry!!!");
	}
}
catch(Exception e){}

%>

</body>
</html>