import java.io.*;
import javax,servlet.http.*;

public class C4f_001 extends HttpServlet {
 String name; 

 proctected void doGet(HttpServletRequest req, HttpServletResponce res) 
	 throws ToException {
	 PrintWriter out = res.getWeiter();
	 out.print("<body>name=");
	 try {
	   name = req.getParameter("name")	;
	   Thread.sleep(3000);
	   out.print(escapeHTML(name)) ;
	 } catch (InterruptesException e) {
	   out.println(e);
	 }
         out.println("</body>")	 ;
	 out.close();
 }
}
