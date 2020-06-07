package com.Brij;

import java.io.*;

import javax.servlet.http.HttpServlet;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse; 
import javax.servlet.http.HttpSession;
import javax.servlet.jsp.JspException;  
import javax.servlet.jsp.JspWriter;  
import javax.servlet.jsp.tagext.SimpleTagSupport;

import sun.misc.Request;


public class Checking_User extends SimpleTagSupport {

	private String uname;
	private String pwd;
	
	public String getUname() {
		return uname;
	}

	public void setUname(String uname) {
		this.uname = uname;
			}

	public String getPwd() {
		return pwd;
	}

	public void setPwd(String pwd) {
		this.pwd = pwd;
		
	}
	
	public void doTag() throws JspException, IOException
	{
		
		JspWriter out = getJspContext().getOut();
		if(this.uname.equals("admin")&&this.pwd.equals("admin"))
		{
			
			
			out.println("<script>window.location.href='WelcomeAdmin.jsp'</script>");
		}
		else
		{
			
			out.println("<script>window.location.href='Login.html'</script>");
		}
	}
	
	

}
