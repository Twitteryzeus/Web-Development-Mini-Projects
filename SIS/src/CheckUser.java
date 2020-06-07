

import java.io.*;
import java.util.Base64; 
import javax.crypto.Cipher; 
import javax.crypto.KeyGenerator; 
import javax.crypto.SecretKey; 
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import java.sql.*;

/**
 * Servlet implementation class CheckUser
 */
@WebServlet("/CheckUser")
public class CheckUser extends HttpServlet {
	private static final long serialVersionUID = 1L;
	static Cipher cipher;  
    /**
     * @see HttpServlet#HttpServlet()
     */
    public CheckUser() {
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
		try
		{
			KeyGenerator keyGenerator = KeyGenerator.getInstance("AES");
			keyGenerator.init(128);
			SecretKey secretKey = keyGenerator.generateKey();
			cipher = Cipher.getInstance("AES");
		}
		catch(Exception e)
		{}
		
		response.setContentType("text/html");
		String un = request.getParameter("uname");
		String pd = request.getParameter("pwd");
		try
		{
			Class.forName("com.mysql.jdbc.Driver");
			Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
			System.out.println("Run");
			Statement st = con.createStatement();
			ResultSet rst = st.executeQuery("select count(uid),role from credentials where uname='"+un+"' and pswd=MD5('"+pd+"')");
			System.out.println("Run");
			//int i = rst.getInt(0);
			if(rst.next())
			{
				String r=rst.getString(2);
				System.out.println("Value of r="+r);
				HttpSession session = request.getSession(true);
				session.setAttribute("uname", un);
				session.setAttribute("pswd",pd);
				session.setAttribute("role", r);
				System.out.println("Value of r="+r);				
				if(r.equals("Student"))
				{
					RequestDispatcher rd = request.getRequestDispatcher("Welc_Student");
					rd.forward(request, response);
				}
				else
				{
					RequestDispatcher rd = request.getRequestDispatcher("Welc_Faculty");
					rd.forward(request, response);
				}
			}
			else
			{
				RequestDispatcher rd = request.getRequestDispatcher("Login.html");
				rd.include(request, response);
			}
		}
		catch(Exception e){
			//PrintWriter out = response.getWriter();
			//out.println("<h4>Oops.....something went wrong</h4>");
			//out.println("<br/>");
			//out.println(e);
			RequestDispatcher rd = request.getRequestDispatcher("Login.html");
			rd.include(request, response);
		}
		//out.println("End of Program");
	}
	
	public static String encrypt(String plainText, SecretKey secretKey)
			throws Exception {
		byte[] plainTextByte = plainText.getBytes();
		cipher.init(Cipher.ENCRYPT_MODE, secretKey);
		byte[] encryptedByte = cipher.doFinal(plainTextByte);
		Base64.Encoder encoder = Base64.getEncoder();
		String encryptedText = encoder.encodeToString(encryptedByte);
		return encryptedText;
	}
	
	public static String decrypt(String encryptedText, SecretKey secretKey)
			throws Exception {
		Base64.Decoder decoder = Base64.getDecoder();
		byte[] encryptedTextByte = decoder.decode(encryptedText);
		cipher.init(Cipher.DECRYPT_MODE, secretKey);
		byte[] decryptedByte = cipher.doFinal(encryptedTextByte);
		String decryptedText = new String(decryptedByte);
		return decryptedText;
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
