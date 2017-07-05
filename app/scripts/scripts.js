function backToTop() {
  $("html, body").animate({
    scrollTop: 0
  }, "slow");
}

const backToTopListener = document.querySelectorAll('.back-button');
backToTopListener.forEach(button => button.addEventListener('click', backToTop));


function extendArticle(e) {
  const link = e.target.id;
  const article = document.querySelector(`#${link}`).previousElementSibling;
  const lorem =
    "Proin iaculis mauris at nibh dignissim, vitae commodo neque bibendum. Praesent imperdiet molestie eros a elementum. Etiam feugiat odio diam, sed placerat augue mattis pharetra. Nunc hendrerit condimentum arcu, vel sollicitudin nunc congue dapibus. Duis ut vehicula quam. Nunc mattis eget ex et pellentesque. Curabitur erat massa, rhoncus sit amet purus eget, tincidunt molestie mi.";
  article.innerHTML += lorem;
}

const readMore = document.querySelectorAll('.article__extend');
readMore.forEach(link => link.addEventListener('click', extendArticle));


function changeColor() {
  const paragraph = document.querySelectorAll('.article__content');
  const caption = document.querySelectorAll('.figure__caption');
  paragraph.forEach(p => changeColorTimer(p, 3000));
  caption.forEach(figcaption => changeColorTimer(figcaption, 3000));
}

function changeColorTimer(paragraph, time) {
  $(paragraph).html($(paragraph).html().replace(' ipsum ', ` <span class="span span--red">ipsum</span> `));
  const spans = document.querySelectorAll('.span');
  [].forEach.call(spans, function(el) {
    el.classList.add("span--red");
  });
  clearTimeout(x);
  var x = setTimeout(
    function() {
      const spans = document.querySelectorAll('.span--red');
      [].forEach.call(spans, function(el) {
        el.classList.remove("span--red");
      });
    }, time);
}

const pushButton = document.querySelectorAll('.btn');
pushButton.forEach(button => button.addEventListener('click', changeColor));


function sendData(event) {
  event.preventDefault();

  $.ajax({
    type: 'post',
    url: 'post.php',
    data: $('form').serialize(),
    success: function(data) {
      document.getElementById("form").innerHTML = '<p style="text-align: center; margin: 0 auto;">' + data + '</p>';
    }
  });
}

const submitForm = document.querySelectorAll('.contact__form');
submitForm.forEach(form => form.addEventListener('submit', sendData));
