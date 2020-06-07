import com.itextpdf.text.BaseColor;
import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Element;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import com.itextpdf.text.pdf.PdfWriter;
import java.io.*;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import com.itextpdf.text.*;
import java.io.FileNotFoundException;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 * Servlet implementation class FindStudent
 */
@WebServlet("/FindStudent")
public class FindStudent extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public FindStudent() {
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
		PrintWriter out = response.getWriter();
		try
		{
			String i=request.getParameter("id3");
			Class.forName("com.mysql.jdbc.Driver");
			Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
			Statement st = con.createStatement();
			ResultSet rst= st.executeQuery("select * from leave_master where uname='"+i+"'");
				out.println("<br>"
				 +"<center><table style=width:75%; text-align: left; border=1>"
				  +"<tr>"
				    +"<th>Reason</th>"
				    +"<th>Sdate</th>"
				    +"<th>Edate</th>"
				    +"<th>Stime</th>"
				    +"<th>ETime</th>"
				    +"<th>Name</th>"
				    +"<th>Status</th>"
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
				    +"</tr>"
				    );
				  }
	        }
			catch(Exception e){out.println("Oops....Something went wrong");}
		out.print("</table><br/><a href=facul><input type=submit value=GoBack></a></center>");
		try {
			String i=request.getParameter("id3");
       	 Document document = new Document();
       	 PdfWriter.getInstance(document, new FileOutputStream("C://Users/BRIJESH/Desktop/AdvJAVA/Leave_Report_of_"+i+".pdf"));
       	System.out.println("Done123");
       	 document.open();
	            Paragraph p = new Paragraph();
	            p.add("Leave Report");
	            
	            p.setAlignment(Element.ALIGN_CENTER);
	            document.add(p);
	            document.add(Chunk.NEWLINE);
	            document.add(Chunk.NEWLINE);
	            System.out.println("Done456");
      	  PdfPTable table = new PdfPTable(new float[] { 4,7,7,7,7,7,7,7,7 });
      	  table.getDefaultCell().setHorizontalAlignment(Element.ALIGN_CENTER);
      	  table.addCell("Leave Id");
         table.addCell("Reason");
         table.addCell("From Date");
         table.addCell("End Date");
         table.addCell("Start Time");
         table.addCell("End Time");
         table.addCell("Status");
         table.addCell("UName");
         table.addCell("Valid");
         
      	  table.setHeaderRows(1);
      	System.out.println("Done980");
      	  PdfPCell[] cells = table.getRow(0).getCells(); 
      	  for (int j=0;j<cells.length;j++){
      	     cells[j].setBackgroundColor(BaseColor.GRAY);
      	  }
      	  Class.forName("com.mysql.jdbc.Driver");
      	  Connection con=DriverManager.getConnection("jdbc:mysql://localhost/demo1","root","");
      	  String q="select * from leave_master where uname='"+i+"'";
      	  Statement st=con.createStatement();
      	  ResultSet rs=st.executeQuery(q);
                while(rs.next()){
          	     table.addCell(String.valueOf(rs.getInt(1)));
                   table.addCell(rs.getString(2));
                   table.addCell(rs.getString(3));
                   table.addCell(rs.getString(4));
                   table.addCell(rs.getString(5));
                   table.addCell(rs.getString(6));
                   table.addCell(rs.getString(7));
                   table.addCell(rs.getString(8));
                   table.addCell(rs.getString(9));
                }
                System.out.println("Done123");
                document.add(table);
      	  document.close();
      	  System.out.println("Done");
      	  con.close();
       } catch (Exception e) {
           e.printStackTrace();
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
