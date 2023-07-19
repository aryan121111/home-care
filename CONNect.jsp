<%@ page import ="java.sql.*"%>
<%
String  name = request.getParameter("nm")
String phone = request.getParameter("pn")
String college name = request.getParameter("cn")
String event name = request.getParameter("en")
String activity name = request.getParameter("an")
String city name = request.getParameter("tb")

try{
	Class.forname("com.mysql.jdbc.Driver");
	Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/upllive_db","root","Aryan@123");
	PreparedStatement ps = conn.prepareStatement("insert into sunrega(nm,pn,cn,en ,an,tb");
	ps.setString(1,name);
	ps.setString(2,phone);
	ps.setString(3,college name);
	ps.setString(4,event name);
	ps.setString(5,activity name);
	ps.setString(6,city name);
	int x = ps.executeUpdate();
	if(x>0){
		out.println("Registration done successfully...");
}else
        out.println("Registration Failed...")
}catch(Exception e){
	out.println(e);
}
%>