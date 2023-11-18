<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CGPA Calculator</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="calculator-box">
        <h1>Cumulative Grade Point Average (CGPA) CALCULATOR</h1>
        <p>
        </p>

        <div id="course-wrapper">
          <form class="key-0">
            <p> <label id="course-row" for="courses">Subject:</label> 
             <label id="credit-row" for="credit-units">Credit Units:</label>
           <label id="grade-row" for="grade">Grades: </label></p>
              <input
                type="text"
                placeholder="Subject"
                class="courses key-0"
                required/>
<!--<label for="credit-units">Credit Units:</label> -->
              <input
                type="number"
                class="credit-units key-0"
                placeholder="Credit Units"
                value=""
                required
              />
<!--<label for="grade">Grade: </label> -->
              <select class="grade key-0" required>
                <option class="grade" value="select">Select</option>
                <option class="grade" value="10">O</option>
                <option class="grade" value="9">A+</option>
                <option class="grade" value="8">A</option>
                <option class="grade" value="7">B+</option>
                <option class="grade" value="6">B</option>
                <option class="grade" value="5">C</option>
              </select>
          </form>
        </div>
        <!-- <section class"btn">+ Add Subject</section> -->
        <div class="btn">
          <button onclick="addCourse()">+ Add Subject</button>
          <button onclick="removeCourse()">- Remove Subject</button>
          <button onclick="calcCgpa()">Calculate CGPA</button>
        </div>
        <div class="lastp">
          <p id="cgpa-calc">Your CGPA is:</p>
        </div>
      </div>
</strong>
</div>
    					<h2><a class="btn" href="Example.html">Example</a></h2>
  <script  src="./script.js"></script>

</body>
</html>
