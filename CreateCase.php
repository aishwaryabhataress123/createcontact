<html>
<head>
<style>
.header{
}
.logo{
}
.menu{
background-color:#04C5F9;
width:100%;
height:40px;
color:white;
}
ul{
 list-style-type:none;
}
li a{
float:left;
  display: block;
  text-align: center;
  padding: 12px 25px;
}
li a:hover{
  background-color:white;
  color:#04C5F9;
}
a.active{
      background-color:white;
  color:#04C5F9;
}
.mainframe{
}
</style>
</head>
  
<h1>
All Raised Cases
</h1>
<body>
<form action="/action_page.php">
  Contact Name:<br>
  <input type="text" name="ContactName">
  <br>
  Account Name:<br>
  <input type="text" name="AccountName">
  <br>
  <fieldset>
          <p>
             <label>Select Status</label>
             <select id = "Status">
               <option value = "1">New</option>
             </select>
             
             <label>Select Priority</label>
             <select id = "Priority">
               <option value = "1">Medium</option>
             </select>
             
             <label>Select Origin</label>
             <select id = "Case Origin">
               <option value = "1">Phone</option>
             </select>
          </p>  
  </fieldset>
  Subject:<br>
  <input type="text" name="Subject">
  <br>
  Description:<br>
  <input type="text" name="Description">
  <br> 
    <input type="submit" value="Submit">
    <br>
    </form>
</body>
</html>
