document.addEventListener('DOMContentLoaded', function() {
  const input = document.getElementById("s1_body");
  const counter = document.getElementById("s1_counter");
  const maxLength = input ? input.getAttribute('maxlength') : null;

  if (input) {
    input.addEventListener("input", function() {
      const remaining = maxLength - input.value.length;
      counter.innerHTML = "残り " + remaining + " 文字";
    });
  }
//   console.log(maxLength);
//   console.log(input);
//   console.log(counter);
});

document.addEventListener('DOMContentLoaded', function() {
  const input = document.getElementById("s2_body");
  const counter = document.getElementById("s2_counter");
  const maxLength = input ? input.getAttribute('maxlength') : null;

  if (input) {
    input.addEventListener("input", function() {
      const remaining = maxLength - input.value.length;
      counter.innerHTML = "残り " + remaining + " 文字";
    });
  }
//   console.log(maxLength);
//   console.log(input);
//   console.log(counter);
});


document.addEventListener('DOMContentLoaded', function() {
  const input = document.getElementById("s3_body");
  const counter = document.getElementById("s3_counter");
  const maxLength = input ? input.getAttribute('maxlength') : null;

  if (input) {
    input.addEventListener("input", function() {
      const remaining = maxLength - input.value.length;
      counter.innerHTML = "残り " + remaining + " 文字";
    });
  }
//   console.log(maxLength);
//   console.log(input);
//   console.log(counter);
});


document.addEventListener('DOMContentLoaded', function() {
  const input = document.getElementById("s4_body");
  const counter = document.getElementById("s4_counter");
  const maxLength = input ? input.getAttribute('maxlength') : null;

  if (input) {
    input.addEventListener("input", function() {
      const remaining = maxLength - input.value.length;
      counter.innerHTML = "残り " + remaining + " 文字";
    });
  }
//   console.log(maxLength);
//   console.log(input);
//   console.log(counter);
});


document.addEventListener('DOMContentLoaded', function() {
  const input = document.getElementById("s5_body");
  const counter = document.getElementById("s5_counter");
  const maxLength = input ? input.getAttribute('maxlength') : null;

  if (input) {
    input.addEventListener("input", function() {
      const remaining = maxLength - input.value.length;
      counter.innerHTML = "残り " + remaining + " 文字";
    });
  }
//   console.log(maxLength);
//   console.log(input);
//   console.log(counter);
});
