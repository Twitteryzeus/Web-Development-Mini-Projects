
import javax.mail.*;
import javax.mail.internet.*;

import java.util.*;
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
 * Servlet implementation class ApplyLeave
 */
@WebServlet("/ApplyLeave")
public class ApplyLeave extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ApplyLeave() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see Servlet#init(ServletConfig)
	 */
	public void init(ServletConfig config) throws ServletException {
		// TODO Auto-generated method stub
		System.out.println("Running");
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
	 final String senderEmailID = "gameocaine@gmail.com";
	 final String senderPassword = "Wolverine139";
	 String receiverEmailID = null;
	 static String emailSubject = "Test Mail";
	 static String emailBody = ":)";
	 final String emailSMTPserver = "smtp.gmail.com";
	 final String emailServerPort = "465";
	 
	protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		System.out.println("Running");
		HttpSession session = request.getSession(false);
		if(session!=null)
		{
		String un= (String) session.getAttribute("uname");
		System.out.println(un);
		String r=request.getParameter("reason");
		String sd=request.getParameter("sdate");
		String ed=request.getParameter("edate");
		String sti=request.getParameter("stime");
		String et=request.getParameter("etime");
		System.out.println(un);
		try
		{
			Class.forName("com.mysql.jdbc.Driver");
			Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
			Statement st = con.createStatement();
			System.out.println("Running");
			st.executeUpdate("insert into leave_master(reason,sdate,edate,stime,etime,status,uname,valid) values('"+r+"','"+sd+"','"+ed+"','"+sti+"','"+et+"','P','"+un+"','v')");
			this.receiverEmailID="bvlakkad@gmail.com"; 
			  // Subject
			  this.emailSubject="Leave for "+un+"";
			  // Body
			  this.emailBody="Reason : "+r+" \n"
			  		+ "From Date : "+sd+" \n"
			  		+ "To Date : "+ed+" \n"
			  		+ "From Time : "+sti+" \n"
			  		+ "To : "+et+" ";
			  Properties props = new Properties();
			  props.put("mail.smtp.user",senderEmailID);
			  props.put("mail.smtp.host", emailSMTPserver);
			  props.put("mail.smtp.port", emailServerPort);
			  props.put("mail.smtp.starttls.enable", "true");
			  props.put("mail.smtp.auth", "true");
			  props.put("mail.smtp.socketFactory.port", emailServerPort);
			  props.put("mail.smtp.socketFactory.class", "javax.net.ssl.SSLSocketFactory");
			  props.put("mail.smtp.socketFactory.fallback", "false");
			  SecurityManager security = System.getSecurityManager();
			  try{  
			  Authenticator auth = new SMTPAuthenticator();
			  Session session2 = Session.getInstance(props, auth);
			  MimeMessage msg = new MimeMessage(session2);
			  msg.setText(emailBody);
			  msg.setSubject(emailSubject);
			  msg.setFrom(new InternetAddress(senderEmailID));
			  msg.addRecipient(Message.RecipientType.TO,
			  new InternetAddress(receiverEmailID));
			  Transport.send(msg);
			  System.out.println("Message send Successfully:)"); }
			  
			  catch (Exception mex){
			  mex.printStackTrace();}
			  
			  
			  
		}
		catch(Exception e){
			response.setContentType("text/html");
			PrintWriter out = response.getWriter();
			out.println("<h4 align=center>Something went wrong</h4>");
			out.println("<br/>");
			out.println("<p>"+e+"</p>");
		}
		RequestDispatcher rd = request.getRequestDispatcher("Welc_Student");
		rd.include(request, response);
		}
		else
		{
			response.sendRedirect("Login.html");
		}
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	public class SMTPAuthenticator extends javax.mail.Authenticator
	{
	  public PasswordAuthentication getPasswordAuthentication()
	  {
		  return new PasswordAuthentication(senderEmailID, senderPassword);
	  }
	}
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
