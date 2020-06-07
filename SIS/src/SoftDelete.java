

import java.io.*;
import java.sql.*;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class SoftDelete
 */
@WebServlet("/SoftDelete")
public class SoftDelete extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public SoftDelete() {
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
		HttpSession ss = request.getSession(false);
		if(ss!=null)
		{
		int i=Integer.parseInt(request.getParameter("id2"));
		try
		{
			Class.forName("com.mysql.jdbc.Driver");
			Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
			Statement st = con.createStatement();
			//System.out.println("Ri");
			ResultSet rst = st.executeQuery("select valid from leave_master where lid='"+i+"'");
			if(rst.next())
			{
			if("v".equals(rst.getString(1)))
			{
				Statement st1 = con.createStatement();
				st1.executeUpdate("update leave_master set valid='i' where lid='"+i+"'");
			}
			else
			{
				Statement st2 = con.createStatement();
				st2.executeUpdate("update leave_master set valid='v' where lid='"+i+"'");
			}
			}
			RequestDispatcher rd = request.getRequestDispatcher("Welc_Faculty");
			rd.forward(request, response);
		}
		catch(Exception e){
			System.out.println(e);
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
