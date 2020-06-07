

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.*;

import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class Welc_Student
 */
@WebServlet("/Welc_Student")
public class Welc_Student extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Welc_Student() {
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
							+"<title>Welcome '"+n+"'</title>"
							+"</head>"
							+"<body style=background-image: url('IMG-20180608-WA0047.jpg');>"
							+"<marque><h1 align=center>Welcome "+n+"</h1></marque>"
							+"<h3 align=center>Your Leave Table</h3>");
						Class.forName("com.mysql.jdbc.Driver");
						Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
						Statement st = con.createStatement();
						ResultSet rst= st.executeQuery("select * from leave_master where uname='"+n+"' and valid='v'");
							out.println( "<center><table style=width:75%; border=1>"
							  +"<tr>"
							    +"<th>Reason</th>"
							    +"<th>Sdate</th>"
							    +"<th>Edate</th>"
							    +"<th>Stime</th>"
							    +"<th>ETime</th>"
							    +"<th>Status</th>"
							    +"<th>Uname</th>"
							  +"</tr>");
							  while(rst.next())
							  {
								out.println("<tr>"
							    +"<td>'"+rst.getString(2)+"'</td>"
							    +"<td>'"+rst.getString(3)+"'</td>"
							    +"<td>'"+rst.getString(4)+"'</td>"
							    +"<td>'"+rst.getString(5)+"'</td>"
							    +"<td>'"+rst.getString(6)+"'</td>"
							    +"<td>'"+rst.getString(7)+"'</td>"
							    +"<td>'"+rst.getString(8)+"'</td>"
							    +"</tr>"
							    );
							  }
							  out.println(
								"</table>"
								+"<br/>"
								+"<h3 style=text-align: left><a href=Leave.html><input type=submit value='Apply for Leave'></a></h3>"
								+"<h3 style=text-align: left><a href=close><input type=submit value='Logout'></a></h3>"
							    +"</center></body>"
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
