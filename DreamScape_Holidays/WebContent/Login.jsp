<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Checking</title>
</head>
<body>
<%String name=request.getParameter("name");
String pwd=request.getParameter("pwd");%>

<%@taglib uri="WEB-INF/CheckUser.tld" prefix="B"%>
<B:Mycust uname="<%=name %>" pwd="<%=pwd %>"></B:Mycust>
</body>
</html>