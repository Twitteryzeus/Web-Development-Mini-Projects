<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"
    import="java.sql.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Manage Package</title>
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
<body style="background-image: url('bgimg2.jpg'); ">
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
<br>
<br>
<%

try
{
	int flag=0;
	Class.forName("com.mysql.jdbc.Driver");
	Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
	Statement st = con.createStatement();
	ResultSet rst = st.executeQuery("select * from Available_packages");
	flag=1;
	if(flag==1)
	{%>
	<br>
	<br>
	<table border="1" style="border: solid; background: transparent;" align="center">
			<tr>
			<td>Destination_Place</td>
			<td>Tour_Cost_Per_Person</td>
			<td>Tour_Days</td>
			<td>Package_Inclusions</td>
			<td>Number_of_Days</td>
			<td>Number_of_Nights</td>
			<td>Air_Flight_Cost_Include</td>
			<td>Status</td>
			<td>Active</td>
			<td>Deactive</td>
			</tr>
			
		<% while(rst.next())
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
			<td><%=rst.getString(9)%></td>
			<td><a href="toggle?id=a&uid=<%=rst.getInt(1) %>"><input type="submit" value="change"></a></td>
			<td><a href="toggle?id=d&uid=<%=rst.getInt(1) %>"><input type="submit" value="change"></a></td>
			</tr>
		<%} %>
			</table>  
		
		
	<% }
	else
	{
		try
		{
			Thread.sleep(2000);
		}
		catch(Exception e){}
		out.println("Oops....something went wrong");
	}
}
catch(Exception e){}

%>
</body>
</html>