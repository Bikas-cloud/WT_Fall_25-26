<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration form</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
      }
      div {
        margin: 0;
        height: 80vh;
        width: 60vw;
        background-color: #faf9f2;
        margin-left: 20vw;
        border-radius: 2px solid black;
      }
      h1 {
        margin-left: 13%;
        padding-top: 15px;
      }
      p {
        margin: 0;
        padding: 0;
        font-weight: 300;
        margin-left: 15px;
        margin-top: 10px;
      }
      input {
        width: 90%;
        height: 3vh;
        margin-left: 15px;
        border: 1px solid black;
        border-radius: 5px;
      }
      button {
        margin-left: 15px;
        margin-top: 10px;
        background-color: blue;
        color: white;
      }
      #inner {
        margin: 0;
        height: 30%;
        width: 92%;
        background-color: rgb(153, 207, 153);
        margin: 8px 15px 0px 15px;
        border: 2px solid rgb(40, 175, 37);
        border-radius: 5px;
      }
      .second {
        margin: 0;
        height: 40vh;
        width: 60vw;
        background-color: #faf9f2;
        margin-left: 20vw;
        border-radius: 2px solid black;
      }
      .activity-input {
        margin-top: 20px;
        height: 15%;
      }
      .activity {
        margin: 0;
        height: 20%;
        width: 92%;
        background-color: rgb(255, 199, 199);
        margin: 8px 15px 0px 15px;
        border: 2px solid rgb(240, 233, 233);
        border-radius: 5px;
      }
      .actremove {
        margin-left: 320px;
        margin-top: 18px;
        background-color: red;
        color: white;
      }
    </style>
  </head>
  <body>
    <div>
      <h1>Participant Registration</h1>
      <p class="name">Full Name:</p>
      <input type="text" />
      <p class="Email">Email:</p>
      <input type="text" />
      <p class="Phone">Phone Number:</p>
      <input type="text" />
      <p>Password:</p>
      <input type="password" />
      <p>Confirm Password:</p>
      <input type="password" /><br />
      <button class="btn1">Register</button>
      <div id="inner"></div>
    </div>
    <div class="second">
      <h1>Activity selection</h1>
      <p>Activity Name:</p>
      <input type="text" />
      <button>Add Activity</button>
      <div class="activity">
        <button class="actremove">Remove</button>
      </div>
    </div>
   <script>
  const nameInput = document.querySelectorAll("input")[0];
  const emailInput = document.querySelectorAll("input")[1];
  const phoneInput = document.querySelectorAll("input")[2];
  const passInput = document.querySelectorAll("input")[3];
  const confirmPassInput = document.querySelectorAll("input")[4];

  const output = document.getElementById("inner");

  document.querySelector(".btn1").addEventListener("click", function () {
    if (
      nameInput.value === "" ||
      emailInput.value === "" ||
      phoneInput.value === "" ||
      passInput.value === "" ||
      confirmPassInput.value === ""
    ) {
      alert("Please fill all the fields");
      return;
    }

    if (!emailInput.value.includes("@")) {
      alert("Please enter a valid email");
      return;
    }

    if (phoneInput.value.length < 10) {
      alert("Phone number must be at least 10 digits");
      return;
    }

    if (passInput.value !== confirmPassInput.value) {
      alert("Passwords do not match!");
      return;
    }

    if (passInput.value.length < 6) {
      alert("Password must be at least 6 characters long");
      return;
    }

    output.innerHTML = `
      <h3 style="margin-left: 4%;">Registration Successful!</h3>
      <p>Name: ${nameInput.value}</p>
      <p>Email: ${emailInput.value}</p>
      <p>Phone: ${phoneInput.value}</p>
    `;
  });
</script>

  </body>
</html>
