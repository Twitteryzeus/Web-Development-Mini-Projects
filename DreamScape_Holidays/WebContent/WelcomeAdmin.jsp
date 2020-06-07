<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Welcome Admin</title>
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
<%
session=request.getSession(true);
session.setAttribute("admin", "admin");
%>
<ul>
  <li><a href="WelcomeAdmin.jsp">Home</a></li>
  <li><a href="EnterDetails.html">Enter Details</a></li>
  <li><a href="ManagePackage.jsp">Manage Package</a></li>
  <li><a href="FlightDetails.jsp">Flight Details</a></li>
</ul>
<h1 align="center" style="font-size: xx-large;">Welcome Admin</h1>
</body>
</html>