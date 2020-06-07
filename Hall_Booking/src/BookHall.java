

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.*;

import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class BookHall
 */
@WebServlet("/BookHall")
public class BookHall extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public BookHall() {
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
		String ename=request.getParameter("ename");
		String etitle=request.getParameter("etitle");
		String strength=request.getParameter("strength");
		String dept=request.getParameter("dept");
		String orgby=request.getParameter("by");
		String edate=request.getParameter("edate");
		String etime=request.getParameter("etime");
		String hname=request.getParameter("hname");
		String bdate=request.getParameter("bdate");
		System.out.println("Again");
		System.out.println(hname+" "+strength);
		if(hname=="Srimca_hall"&&Integer.parseInt(strength)>150)
		{
			out.println("<p>Srimca Hall has only 150 seats</p>");
			try {
				Thread.sleep(2000);
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			response.sendRedirect("WelcomeAdmin.jsp");
		}
		else if(hname=="JD_hall"&&Integer.parseInt(strength)>400)
		{
			out.println("<p>JD_hall has only 400 seats</p>");
			try {
				Thread.sleep(2000);
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			response.sendRedirect("WelcomeAdmin.jsp");
		}
		else if(hname=="Manjula_hall"&&Integer.parseInt(strength)>600)
		{
			out.println("<p>Manjula_Hall has only 600 seats</p>");
			try {
				Thread.sleep(2000);
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			response.sendRedirect("WelcomeAdmin.jsp");
		}
		else if(hname=="Pushpam_hall"&&Integer.parseInt(strength)>850)
		{
			out.println("<p>Pushpam_hall has only 850 seats</p>");
			try {
				Thread.sleep(2000);
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			response.sendRedirect("WelcomeAdmin.jsp");
		}
		
		try
		{
			Class.forName("com.mysql.jdbc.Driver");
			Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
			System.out.println("insert");
			Statement st = con.createStatement();
			ResultSet rst = st.executeQuery("select event_title,department from Hall_booking_master where hall_name='"+hname+"'");
			if(rst.next())
			{
				out.println("<h2 align=center>This hall is already booked by '"+rst.getString(2)+"' for '"+rst.getString(1)+"'</h2>");
				Thread.sleep(2000);
				out.println("<script>window.location.href='WelcomeAdmin.jsp'</script>");
			}
			PreparedStatement pst = con.prepareStatement("insert into Hall_booking_master(event_name,event_title,number_of_participant,department,organized_by,event_date,event_time,hall_name,booking_date,Status) values(?,?,?,?,?,?,?,?,?,?)");
			pst.setString(1, ename);
			pst.setString(2, etitle);
			pst.setString(3, strength);
			pst.setString(4, dept);
			pst.setString(5, orgby);
			pst.setString(6, edate);
			pst.setString(7, etime);
			pst.setString(8, hname);
			pst.setString(9, bdate);
			pst.setString(10, "a");
			pst.executeUpdate();
			//st.execute("insert into Hall_booking_master(event_name,event_title,number_of_participant,department,organized_by,event_date,event_time,hall_name,booking_date,Status) values('"+ename+"','"+etitle+"','"+strength+"','"+dept+"','"+orgby+"','"+edate+"','"+etime+"','"+hname+"','"+bdate+"','a'");
			System.out.println("inserted"+hname);
			response.sendRedirect("WelcomeAdmin.jsp");
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
