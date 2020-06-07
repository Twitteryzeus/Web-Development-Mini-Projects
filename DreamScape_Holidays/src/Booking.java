

import java.io.*;
import java.sql.*;

import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class Booking
 */
@WebServlet("/Booking")
public class Booking extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Booking() {
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
		PrintWriter out = response.getWriter();
		String n=request.getParameter("name");
		String Destination=request.getParameter("Destination");
		String price=request.getParameter("Price");
		String tdays=request.getParameter("tdays");
		String includes=request.getParameter("includes");
		String days=request.getParameter("Days");
		String nights=request.getParameter("Nights");
		String flights=request.getParameter("flight");
		try
		{
			Class.forName("com.mysql.jdbc.Driver");
			Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
			Statement st1 = con.createStatement();
			ResultSet rst = st1.executeQuery("select Customer_name from Tbl_D_Holidays where Customer_name='"+n+"' and Destination_Place='"+Destination+"'");
			if(rst.next())
			{
				out.println("<p>This Package already exists on your name</p>");
				System.out.println("It's done!!!");
				Thread.sleep(2000);
				response.sendRedirect("EnterDetails.html");
			}
			else
			{
				Statement st = con.createStatement();
				st.executeUpdate("insert into Tbl_D_Holidays(Customer_name,Destination_Place,Tour_Cost_Per_Person,Tour_Days,Package_Inclusions,Number_of_Days,Number_of_Night,Air_Flight_Cost_Include) values('"+n+"','"+Destination+"','"+price+"','"+tdays+"','"+includes+"','"+days+"','"+nights+"','"+flights+"')");
				System.out.println("Done");
				out.println("FlightBook Successfully");
				Thread.sleep(2000);
				response.sendRedirect("EnterDetails.html");
			}
		}
		catch(Exception e){out.println(e);}
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
