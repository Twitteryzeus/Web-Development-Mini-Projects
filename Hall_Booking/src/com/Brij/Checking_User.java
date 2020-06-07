package com.Brij;
import java.sql.*;
import java.io.IOException;
import javax.servlet.jsp.JspWriter;
import javax.servlet.jsp.tagext.SimpleTagSupport;


import org.apache.jasper.el.JspELException;

public class Checking_User extends SimpleTagSupport{
	private String uname;
	private String pwd;
	public Checking_User() {
		// TODO Auto-generated constructor stub
	}
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
	
	public void doTag() throws IOException, JspELException
	{
		try
		{
			Class.forName("com.mysql.jdbc.Driver");
			Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
			Statement st = con.createStatement();
			ResultSet rst = st.executeQuery("select * from dept_admin where uname='"+uname+"' and password='"+pwd+"'");
			JspWriter out = getJspContext().getOut();
			
			if(rst.next())
			{
				out.println("<script>window.location.href='WelcomeAdmin.jsp?dept="+rst.getString(4)+"'</script>");
			}
			else
			{
				out.println("<script>window.location.href='Login.html'</script>");
			}

		}
		catch(Exception e){}
	}

}
