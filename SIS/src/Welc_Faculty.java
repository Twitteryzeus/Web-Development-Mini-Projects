

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class Welc_Faculty
 */
@WebServlet("/Welc_Faculty")
public class Welc_Faculty extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Welc_Faculty() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see Servlet#init(ServletConfig)
	 */
	public void init(ServletConfig config) throws ServletException {
		// TODO Auto-generated method stub
	}

	/**
	 * @see Servlet#destroy()
	 */
	public void destroy() {
		// TODO Auto-generated method stub
	}

	/**
	 * @see HttpServlet#service(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.setContentType("text/html");
		HttpSession ss = request.getSession(false);
		if(ss!=null)
		{
		String n = (String) ss.getAttribute("uname");
		PrintWriter out = response.getWriter();
					try
					{
						out.println("<!DOCTYPE html>"
							+"<html>"
							+"<head>"
							+"<title>Grant Leave</title>"
							+"</head>"
							+"<body style=background-image: url('IMG-20180608-WA0047.jpg');>"
							+"<h1 align=center>Welcome "+n+"</h1>"
							+"<h3 align=center>Your Student's Leave Table</h3>"
							 );
						Class.forName("com.mysql.jdbc.Driver");
						Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
						Statement st = con.createStatement();
						ResultSet rst= st.executeQuery("select * from leave_master");
							out.println( "<center><table style=width:75%; text-align: left; border=1>"
							  +"<tr>"
							    +"<th>Reason</th>"
							    +"<th>Sdate</th>"
							    +"<th>Edate</th>"
							    +"<th>Stime</th>"
							    +"<th>ETime</th>"
							    +"<th>Name</th>"
							    +"<th>Status</th>"
							    +"<th>Toggle</th>"
							    +"<th>Valid</th>"
							    +"<th>Delete</th>"
							    +"<th>View Report</th>"
							  +"</tr>");
							  while(rst.next())
							  {
								out.println("<tr>"
							    +"<td> '"+rst.getString(2)+"'</td>"
							    +"<td> '"+rst.getString(3)+"'</td>"
							    +"<td> '"+rst.getString(4)+"'</td>"
							    +"<td> '"+rst.getString(5)+"'</td>"
							    +"<td> '"+rst.getString(6)+"'</td>"
							    +"<td> '"+rst.getString(8)+"'</td>"
							    +"<td> '"+rst.getString(7)+"'</td>"
							    +"<td> <a href=toggle?id="+rst.getInt(1)+"><input type=submit value=Toggle></a></td>"
							    +"<td>'"+rst.getString(9)+"'</td>"
							    +"<td> <a href=soft?id2="+rst.getInt(1)+"><input type=submit value=Delete></a></td>"
							    +"<td><a href=find?id3="+rst.getString(8)+"><input type=submit value=View></a></td>"
								);
							  }
							  out.println("</tr>"
								+"</center></table>"
								+"<br/>"
								+"<h3 style=text-align: left><a href=close><input type=submit value=Logout></a></h3>"
							    +"</body>"
							    +"</html>");
					}
					catch(Exception e)
					{
						out.println("<h2 align=center>Oops....something went wrong</h2>");
					}
		}
		else
		{
			response.sendRedirect("Login.html");
		}
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}

}
