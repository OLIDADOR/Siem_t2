$(document).ready(function() {
  initMessageClosers();
});

function initMessageClosers() {
  $('.msg_close').click(function() {
    $(this).parent().fadeOut();
  });
}
