const myName = ('Gifriend Talumingan');
let age = 19;

console.log('My name is', myName, ' and I am', age, 'years old');

const skills = document.querySelectorAll('.li-skills');


document.addEventListener('DOMContentLoaded', function() {
    var skillElements = document.querySelectorAll('.li-skills');
    skillElements.forEach(function(skillElement) {
        skillElement.addEventListener('click', function() {
            var skillName = this.getAttribute('data-skill');
            alert('I have learned how to use ' + skillName);
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var imageContainers = document.querySelectorAll('.image-container');
    imageContainers.forEach(function(imageContainer) {
        imageContainer.addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.1)';
            this.style.transition = 'transform 0.5s';
        });

        imageContainer.addEventListener('mouseout', function() {
            this.style.transform = 'scale(1)';
            this.style.transition = 'transform 0.5s';
        });
    });
});

const instagramLink = document.getElementById("instagram-link");
const whatsappLink = document.getElementById("linkedind-link");
const facebookLink = document.getElementById("facebook-link");

instagramLink.addEventListener("click", () => {
  console.log("Instagram link clicked!");
});

whatsappLink.addEventListener("click", () => {
  console.log("linkedin link clicked!");
});

facebookLink.addEventListener("click", () => {
  console.log("Facebook link clicked!");
});


// const form = document.getElementById("contact-form");
// const nameInput = document.getElementById("name");
// const emailInput = document.getElementById("email");
// const messageInput = document.getElementById("message");
// const nameError = document.getElementById("name-error");
// const emailError = document.getElementById("email-error");
// const messageError = document.getElementById("message-error");

// form.addEventListener("submit", function(event) {
//   event.preventDefault();

//   let isValid = true;

//   if (nameInput.value.trim() === "") {
//     nameError.textContent = "Name is required.";
//     isValid = false;
//   } else {
//     nameError.textContent = "";
//   }

//   if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(emailInput.value)) {
//     emailError.textContent = "Invalid email address.";
//     isValid = false;
//   } else {
//     emailError.textContent = "";
//   }

//   if (messageInput.value.trim() === "") {
//     messageError.textContent = "Message is required.";
//     isValid = false;
//   } else {
//     messageError.textContent = "";
//   }

//   if (isValid) {
//     const formData = new FormData(form);
//      const name = formData.get("name");
//      const email = formData.get("email");
//      const message = formData.get("message");
 
//      // You can send the form data to a server here using AJAX or Fetch API.
//      // For demonstration purposes, we will just display the form data in an alert.
//      alert(`Name: ${name}\nEmail: ${email}\nMessage: ${message}`);

//      nameInput.value = "";
//      emailInput.value = "";
//      messageInput.value = "";
//    }
//  });