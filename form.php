<hmtl>




<body style="padding:100px 300px;">

<link href="bootstrap.css" type="text/css" rel="stylesheet" />

<div class="form-group">

<form role="form" class="form-horizontal" action="load.php" method="post" enctype="multipart/form-data">
  
  
  
  <div class="form-group">
  <label>Name:
  </label>
  <input type="text" class="form-control" id="focusedInput" placeholder="Name" name="name">
  </div>
  
  <div class="form-group">
  <label>
		Roll No.:
  </label>
  <input type="text" class="form-control" id="focusedInput" placeholder="Roll No." name="roll">
  </div>
 
 <div class="form-group">
 <label>Department:</label>
 <select class="form-control">
  <option>Electrical Engineering</option>
  <option>Computer Science</option>
  <option>Mechanical Engineering</option>
  <option>Naval Architecture</option>
  <option>Biotechnology</option>
  <option>XXXXXXXXX</option>
  </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  
  <div class="form-group">
  <label>Interests:
  </label> 
  <textarea class="form-control" rows="4">
  
   </textarea>
   </div>
  
  <div class="form-group">
    <label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>


  </div>
  
<input type="submit" name="submit" value="Submit">
  </form>

  </div>
</body>

</html>