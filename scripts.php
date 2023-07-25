<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>














<script>$(function() {
  var $speed = 200;
  var $class = 'opened';
  var $class_open = '.faq-answer';

  $(document).ready(function() {
    $('.flex').on('click', function() {
      $ul = $(this).closest('ul');
      $answer = $(this).closest('li').find($class_open);

      if (!$(this).closest('li').hasClass($class)) {

        $ul.find('li').each(function() {
          if ($(this).hasClass($class))
            $(this).removeClass($class).find($class_open).slideUp($speed);
        });
      }

      $answer
        .slideToggle($speed)
        .closest('li')
        .toggleClass($class);
    });
  });
});</script>
<!--faq-->


<script>
  function addRemoveClassToBrElements() {
    var brElements = document.getElementsByTagName('br');
    for (var i = 0; i < brElements.length; i++) {
      brElements[i].classList.add('remove-me');
    }
  }

  function removeBrElements() {
    var removeElements = document.getElementsByClassName('remove-me');
    while (removeElements.length > 0) {
      removeElements[0].parentNode.removeChild(removeElements[0]);
    }
  }
  window.addEventListener('resize', function() {
    if (window.innerWidth === 540) {
      addRemoveClassToBrElements();
      removeBrElements();
    }
  });
</script>

<script>
  $(window).scroll(function() {
    if ($(document).scrollTop() > 100) {
      $('.navbar').addClass('mini-header');
    } else {
      $('.navbar').removeClass('mini-header');
    }
  });
</script>

<script>
  var elements = document.addEventListener("DOMContentLoaded", function() {
    var input = document.querySelector(".maskphone");
  
    input.addEventListener("input", mask);
    input.addEventListener("focus", mask);
    input.addEventListener("blur", mask);
  
    function mask(event) {
      var blank = "+_ (___) ___-__-__";
  
      var i = 0;
      var val = this.value.replace(/\D/g, "").replace(/^8/, "7").replace(/^9/, "79");
  
      this.value = blank.replace(/./g, function(char) {
        if (/[_\d]/.test(char) && i < val.length) return val.charAt(i++);
  
        return i >= val.length ? "" : char;
      });
  
      if (event.type == "blur") {
        if (this.value.length == 2) this.value = "";
      } else {
        setCursorPosition(this, this.value.length);
      }
    };
  
    function setCursorPosition(elem, pos) {
      elem.focus();
  
      if (elem.setSelectionRange) {
        elem.setSelectionRange(pos, pos);
        return;
      }
  
      if (elem.createTextRange) {
        var range = elem.createTextRange();
        range.collapse(true);
        range.moveEnd("character", pos);
        range.moveStart("character", pos);
        range.select();
        return;
      }
    }
  });
</script>