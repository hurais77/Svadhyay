<?php
include('db.php');
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Add Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      body {
        background-color: #eee;
      }
      input,
      textarea {
        border: 1px;
        width: 40%;
        border-radius: 5px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.07), 0 2px 4px rgba(0, 0, 0, 0.07),
          0 4px 8px rgba(0, 0, 0, 0.07), 0 8px 16px rgba(0, 0, 0, 0.07),
          0 16px 32px rgba(0, 0, 0, 0.07), 0 32px 64px rgba(0, 0, 0, 0.07);
        font-weight: bold;
      }
      label {
        margin-top: 3%;
        width: 100%;
      }
    </style>
    <?php 
    include('navbar_teacher.html');
    ?>
  </head>
  <body>
    <center>
      <h1>Add Quiz</h1>
      <form action="addQuiz.php" method="POST" enctype="multipart/form-data">
        <label>Enter Question 1 </label><br />
        <textarea
          name="q1"
          rows="5"
          cols="50"
          placeholder="Question 1"
        ></textarea>
        <label>Option 1 </label><br />
        <input type="text" name = "c11">
        <label>Option 2 </label><br />
        <input type="text" name = "c12">
        <label>Option 3 </label><br />
        <input type="text" name = "c13">
        <label>Option 4 </label><br />
        <input type="text" name = "c14">
        <label>Answer </label><br />
        <input type="text" name = "ans1">
        <br /><br>

        
        
        <label>Enter Question 2 </label><br />
        <textarea
          name="q2"
          rows="5"
          cols="50"
          placeholder="Question 2"
        ></textarea>
        <label>Option 1 </label><br />
        <input type="text" name = "c21">
        <label>Option 2 </label><br />
        <input type="text" name = "c22">
        <label>Option 3 </label><br />
        <input type="text" name = "c23">
        <label>Option 4 </label><br />
        <input type="text" name = "c24">
        <label>Answer </label><br />
        <input type="text" name = "ans2">
        <br /><br>

        <label>Enter Question 3 </label><br />
        <textarea
          name="q3"
          rows="5"
          cols="50"
          placeholder="Question 3"
        ></textarea>
        <label>Option 1 </label><br />
        <input type="text" name = "c31">
        <label>Option 2 </label><br />
        <input type="text" name = "c32">
        <label>Option 3 </label><br />
        <input type="text" name = "c33">
        <label>Option 4 </label><br />
        <input type="text" name = "c34">
        <label>Answer </label><br />
        <input type="text" name = "ans3">
        <br /><br>

        <label>Enter Question 4 </label><br />
        <textarea
          name="q4"
          rows="5"
          cols="50"
          placeholder="Question 4"
        ></textarea>
        <label>Option 1 </label><br />
        <input type="text" name = "c41">
        <label>Option 2 </label><br />
        <input type="text" name = "c42">
        <label>Option 3 </label><br />
        <input type="text" name = "c43">
        <label>Option 4 </label><br />
        <input type="text" name = "c44">
        <label>Answer </label><br />
        <input type="text" name = "ans4">
        <br /><br>

        <label>Enter Question 5 </label><br />
        <textarea
          name="q5"
          rows="5"
          cols="50"
          placeholder="Question 5"
        ></textarea>
        <label>Option 1 </label><br />
        <input type="text" name = "c51">
        <label>Option 2 </label><br />
        <input type="text" name = "c52">
        <label>Option 3 </label><br />
        <input type="text" name = "c53">
        <label>Option 4 </label><br />
        <input type="text" name = "c54">
        <label>Answer </label><br />
        <input type="text" name = "ans5">
        <br /><br>

        <label>Enter Question 6 </label><br />
        <textarea
          name="q6"
          rows="5"
          cols="50"
          placeholder="Question 6"
        ></textarea>
        <label>Option 1 </label><br />
        <input type="text" name = "c61">
        <label>Option 2 </label><br />
        <input type="text" name = "c62">
        <label>Option 3 </label><br />
        <input type="text" name = "c63">
        <label>Option 4 </label><br />
        <input type="text" name = "c64">
        <label>Answer </label><br />
        <input type="text" name = "ans6">
        <br /><br>

        <label>Enter Question 7 </label><br />
        <textarea
          name="q7"
          rows="5"
          cols="50"
          placeholder="Question 7"
        ></textarea>
        <label>Option 1 </label><br />
        <input type="text" name = "c71">
        <label>Option 2 </label><br />
        <input type="text" name = "c72">
        <label>Option 3 </label><br />
        <input type="text" name = "c73">
        <label>Option 4 </label><br />
        <input type="text" name = "c74">
        <label>Answer </label><br />
        <input type="text" name = "ans7">
        <br /><br>

        <label>Enter Question 8</label><br />
        <textarea
          name="q8"
          rows="5"
          cols="50"
          placeholder="Question 8"
        ></textarea>
        <label>Option 1 </label><br />
        <input type="text" name = "c81">
        <label>Option 2 </label><br />
        <input type="text" name = "c82">
        <label>Option 3 </label><br />
        <input type="text" name = "c83">
        <label>Option 4 </label><br />
        <input type="text" name = "c84">
        <label>Answer </label><br />
        <input type="text" name = "ans8">
        <br /><br>

        <label>Enter Question 9 </label><br />
        <textarea
          name="q9"
          rows="5"
          cols="50"
          placeholder="Question 9"
        ></textarea>
        <label>Option 1 </label><br />
        <input type="text" name = "c91">
        <label>Option 2 </label><br />
        <input type="text" name = "c92">
        <label>Option 3 </label><br />
        <input type="text" name = "c93">
        <label>Option 4 </label><br />
        <input type="text" name = "c94">
        <label>Answer </label><br />
        <input type="text" name = "ans9">
        <br /><br>

        <label>Enter Question 10 </label><br />
        <textarea
          name="q10"
          rows="5"
          cols="50"
          placeholder="Question 10"
        ></textarea>
        <label>Option 1 </label><br />
        <input type="text" name = "ca1">
        <label>Option 2 </label><br />
        <input type="text" name = "ca2">
        <label>Option 3 </label><br />
        <input type="text" name = "ca3">
        <label>Option 4 </label><br />
        <input type="text" name = "ca4">
        <label>Answer </label><br />
        <input type="text" name = "ansa">
        <br /><br>
        
        <?php
        include('select_all.php');
        ?>
        <select
          class="form-control"
          name="subject"
          id="dropdown"
          style="width: 20%"
        ></select>
        <br />
        <input type="submit" name="upload " value="Upload Quiz Questions" />
      </form>
    </center>
    <script type="text/javascript">
      var x = document.getElementById('dropdown');
      <?php $row=mysqli_fetch_array($res); ?>

      var maths = "<?php echo $row['maths'] ?>";
      var phy = "<?php echo $row['phy'] ?>";
      var chem = "<?php echo $row['chem'] ?>";
      var bio = "<?php echo $row['bio'] ?>";
      var gk = "<?php echo $row['gk'] ?>";
      var comp = "<?php echo $row['comp'] ?>";

      if(maths == 1)
      {
      var option = document.createElement('option');
      option.value = "maths";
      option.innerHTML = "Maths";
      x.appendChild(option);
      }
      if(phy == 1)
      {
      var option = document.createElement('option');
      option.value = "phy";
      option.innerHTML = "PHY";
      x.appendChild(option);
      }
      if(chem == 1)
      {
      var option = document.createElement("option");
      option.value = "chem";
      option.innerHTML = "CHEMISTRY";
      x.appendChild(option);
      }
      if(bio == 1)
      {
      var option = document.createElement("option");
      option.value = "bio";
      option.innerHTML = "BIOLOGY";
      x.appendChild(option);
      }
      if(gk == 1)
      {
      var option = document.createElement("option");
      option.value = "gk";
      option.innerHTML = "GK";
      x.appendChild(option);
      }
      if(comp == 1)
      {
      var option = document.createElement("option");
      option.value = "comp";
      option.innerHTML = "COMPUTER";
      x.appendChild(option);
      }
    </script>
  </body>
</html>

