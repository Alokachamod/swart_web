function changeView() {
  var signUpBox = document.getElementById("signUpBox");
  var signInBox = document.getElementById("signInBox");

  signUpBox.classList.toggle("d-none");
  signInBox.classList.toggle("d-none");
}

function signup() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");
  var password = document.getElementById("password");
  var mobile = document.getElementById("mobile");

  var form = new FormData();
  form.append("f", fname.value);
  form.append("l", lname.value);
  form.append("e", email.value);
  form.append("p", password.value);
  form.append("m", mobile.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;

      if (response == "success") {
        Swal.fire({
          title: "Successful",
          text: "Registration Successful",
          icon: "success",
        });
      } else {
        Swal.fire({
          title: "Registration Unsuccessful",
          text: response,
          icon: "error",
        });
      }
    }
  };
  request.open("POST", "signupProcess.php", true);
  request.send(form);
}

function signin() {
  var email = document.getElementById("email2");
  var password = document.getElementById("password2");
  var rememberme = document.getElementById("rememberme");

  var form = new FormData();
  form.append("e", email.value);
  form.append("p", password.value);
  form.append("r", rememberme.checked);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;

      if (response == "success") {
        window.location = "index.php";
      } else {
        Swal.fire({
          title: "Sign in Unuccessful",
          text: response,
          icon: "error",
        });
      }
    }
  };

  request.open("POST", "signInProcess.php", true);
  request.send(form);
}

function forgotPassword() {
  var email = document.getElementById("email2");

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var text = request.responseText;

      if (text == "Success") {
        Swal.fire({
          title: "Successful",
          text: "Verification code has sent successfully. Please check your Email.",
          icon: "success",
        });

        var modal = document.getElementById("fpmodal");
        forgotPasswordModal = new bootstrap.Modal(modal);
        forgotPasswordModal.show();
      } else {
        Swal.fire({
          title: "unsuccess",
          text: this.text,
          icon: "error",
        });
      }
    }
  };

  request.open("GET", "forgotPasswordProcess.php?e=" + email.value, true);
  request.send();
}

function showPassword1() {
  var textfield = document.getElementById("np");
  var button = document.getElementById("npb");

  if (textfield.type == "password") {
    textfield.type = "text";
    button.innerHTML = "Hide";
  } else {
    textfield.type = "password";
    button.innerHTML = "Show";
  }
}

function showPassword2() {
  var textfield = document.getElementById("rnp");
  var button = document.getElementById("rnpb");

  if (textfield.type == "password") {
    textfield.type = "text";
    button.innerHTML = "Hide";
  } else {
    textfield.type = "password";
    button.innerHTML = "Show";
  }
}

function showPw() {
  var textfield = document.getElementById("pw");
  var button = document.getElementById("pwBtn");

  if (textfield.type == "password") {
    textfield.type = "text";
    button.innerHTML = '<i class="bi bi-eye-slash-fill text-white"></i>';
  } else {
    textfield.type = "password";
    button.innerHTML = '<i class="bi bi-eye-fill text-white"></i>';
  }
}

function resetPassword() {
  var email = document.getElementById("email2");
  var newPassword = document.getElementById("np");
  var retypePassword = document.getElementById("rnp");
  var verification = document.getElementById("vcode");

  var form = new FormData();
  form.append("e", email.value);
  form.append("n", newPassword.value);
  form.append("r", retypePassword.value);
  form.append("v", verification.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;
      if (response == "success") {
        alert("Password updated successfully.");
        forgotPasswordModal.hide();
      } else {
        alert(response);
      }
    }
  };

  request.open("POST", "resetPasswordProcess.php", true);
  request.send(form);
}

function signout() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;
      if (response == "success") {
        window.location.reload();
      }
    }
  };

  request.open("GET", "signOutProcess.php", true);
  request.send();
}

function adminChange() {
  window.location = "adminSignIn.php";
}

function customerside() {
  window.location = "index.php";
}

var av;
function adminVerification() {
  var email = document.getElementById("e");

  var form = new FormData();
  form.append("e", email.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;
      if (response == "Success") {
        Swal.fire({
          title: "Successful",
          text: "Please take a look at your email to find the VERIFICATION CODE.",
          icon: "success",
        });
        var adminVerificationModal =
          document.getElementById("verificationModal");
        av = new bootstrap.Modal(adminVerificationModal);
        av.show();
      } else {
        Swal.fire({
          title: "Unsuccessful",
          text: response,
          icon: "alert",
        });
      }
    }
  };

  request.open("POST", "adminVerificationProcess.php", true);
  request.send(form);
}

function verify() {
  var code = document.getElementById("vcode");

  var form = new FormData();
  form.append("c", code.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;
      if (response == "success") {
        av.hide();
        window.location = "dashboard.php";
      } else {
        Swal.fire({
          title: "Unsuccessful",
          text: response,
          icon: "alert",
        });
      }
    }
  };

  request.open("POST", "verificationProcess.php", true);
  request.send(form);
}

//admin panel

// document.addEventListener("DOMContentLoaded", function() {
//     // Example to dynamically set the username
//     var username = "Admin"; // Replace with dynamic username if needed
//     document.getElementById("username").textContent = username;
// });

//user profile

var passwordInput = document.getElementById("password");
var showPasswordButton = document.getElementById("showPassword");

showPasswordButton.addEventListener("click", function() {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    showPasswordButton.textContent = "Hide";
  } else {
    passwordInput.type = "password";
    showPasswordButton.textContent = "Show";
  }
});

function userProfileUpdate(){
    var
}

//user management

document.addEventListener("DOMContentLoaded", () => {
  const userTableBody = document.getElementById('userTableBody');
  const userForm = document.getElementById('userForm');
  let users = [];

  function renderUsers() {
      userTableBody.innerHTML = '';
      users.forEach((user, index) => {
          const row = document.createElement('tr');
          row.innerHTML = `
              <td>${index + 1}</td>
              <td>${user.name}</td>
              <td>${user.email}</td>
              <td>${user.role}</td>
              <td>
                  <button class="btn btn-warning btn-sm" onclick="editUser(${index})">Edit</button>
                  <button class="btn btn-danger btn-sm" onclick="deleteUser(${index})">Delete</button>
              </td>
          `;
          userTableBody.appendChild(row);
      });
  }

  function addUser(user) {
      users.push(user);
      renderUsers();
  }

  function editUser(index) {
      const user = users[index];
      document.getElementById('userName').value = user.name;
      document.getElementById('userEmail').value = user.email;
      document.getElementById('userRole').value = user.role;
      $('#userModal').modal('show');

      userForm.onsubmit = function (event) {
          event.preventDefault();
          users[index] = {
              name: document.getElementById('userName').value,
              email: document.getElementById('userEmail').value,
              role: document.getElementById('userRole').value,
          };
          $('#userModal').modal('hide');
          renderUsers();
      };
  }

  function deleteUser(index) {
      users.splice(index, 1);
      renderUsers();
  }

  userForm.onsubmit = function (event) {
      event.preventDefault();
      const newUser = {
          name: document.getElementById('userName').value,
          email: document.getElementById('userEmail').value,
          role: document.getElementById('userRole').value,
      };
      addUser(newUser);
      $('#userModal').modal('hide');
      userForm.reset();
  };
});