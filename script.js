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

var passwordInput = document.getElementById("passwordup");
var showPasswordButton = document.getElementById("showPasswordup");

showPasswordButton.addEventListener("click", function () {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    showPasswordButton.textContent = "Hide";
  } else {
    passwordInput.type = "password";
    showPasswordButton.textContent = "Show";
  }
});

function changeImage() {
  var view = document.getElementById("viewImg"); //img tag
  var file = document.getElementById("profileimg"); //file chooser

  file.onchange = function () {
    var file1 = this.files[0];
    var url = window.URL.createObjectURL(file1);
    view.src = url;
  };
}
function userProfileUpdate() {
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var mobile = document.getElementById("mobile");
  var line1 = document.getElementById("line1");
  var line2 = document.getElementById("line2");
  var province = document.getElementById("province");
  var district = document.getElementById("district");
  var city = document.getElementById("city");
  var pcode = document.getElementById("pcode");
  var image = document.getElementById("profileimg");

  var f = new FormData();
  f.append("fn", fname.value);
  f.append("ln", lname.value);
  f.append("m", mobile.value);
  f.append("l1", line1.value);
  f.append("l2", line2.value);
  f.append("p", province.value);
  f.append("d", district.value);
  f.append("c", city.value);
  f.append("pc", pcode.value);

  if (image.files.length == 0) {
    var confirmation = confirm(
      "Are you sure You don't want to update Profile Image?"
    );

    if (confirmation) {
      alert("you have not selected any image.");
    }
  } else {
    f.append("image", image.files[0]);
  }

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
        Swal.fire({
          title: "Successful",
          text: "Update successfully",
          icon: "success",
        });
        window.location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "updateProfileProcess.php", true);
  r.send(f);
}

//user management

function blockUser(email) {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var response = request.responseText;

      if (response == "Blocked") {
        document.getElementById("ub" + email).innerHTML = "Unblock";
        document.getElementById("ub" + email).classList = "btn btn-success";
      } else if (response == "Unblocked") {
        document.getElementById("ub" + email).innerHTML = "Block";
        document.getElementById("ub" + email).classList = "btn btn-danger";
      } else {
        alert(response);
      }
    }
  };

  request.open("GET", "blockUserProcess.php?email=" + email, true);
  request.send();
}

function userDelete(email) {
  if (confirm("Are you sure you want to delete this user?")) {
    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
      if (request.readyState === 4 && request.status === 200) {
        var response = request.responseText;
        if (response === "deleted") {
          alert("User deleted successfully.");
          // Optionally, you can remove the user row from the table
          var row = document.getElementById("row_" + email);
          row.parentNode.removeChild(row);
        } else {
          alert("Failed to delete user. Error: " + response);
        }
      }
    };

    request.open("GET", "deleteUserProcess.php?email=" + email, true);
    request.send();
  }
}

//product management
function apmodelb() {
  var addProductModal =
          document.getElementById("apmodel");
        pm = new bootstrap.Modal(addProductModal);
        pm.show();
}

//add product
function changeProductImage() {

  var image = document.getElementById("imageuploader");

  image.onchange = function () {

      var file_count = image.files.length;

      if (file_count <= 3) {

          for (var x = 0; x < file_count; x++) {
              var file = this.files[x];
              var url = window.URL.createObjectURL(file);

              document.getElementById("i" + x).src = url;
          }

      } else {
          alert("please select 3 or less than 3 images");
      }

  }
}

function addProduct() {
  var title = document.getElementById("title");
  var desc = document.getElementById("desc");
  var price = document.getElementById("price");
  var qty = document.getElementById("qty");
  var image = document.getElementById("imageuploader");

  var f = new FormData();

  f.append("t", title.value);
  f.append("d", desc.value);
  f.append("p", price.value);
  f.append("q", qty.value);

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {
      f.append("image" + x, image.files[x]);
  }

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
      if (r.readyState == 4) {
          var t = r.responseText;
          if (t == "Product image saved successfully") {
              window.location.reload();
          } else {
              alert(t);
          }
      }
  }

  r.open("POST", "addProductProcess.php", true);
  r.send(f);
}

function apmodelu(){
  var updatedata =  document.getElementById("pid");

  var f = new FormData();

  f.append("pid", updatedata.value);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "open model") {
        var productupdatemodel =
        document.getElementById("pupdate");
      upm = new bootstrap.Modal(productupdatemodel);
      upm.show();
      } else {
        alert(t);
      }
    }
  }
r.open("POST","updatemodelopenprocess.php",true);
r.send(f)
}

