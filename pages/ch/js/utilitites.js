function id(elem) {
  return document.getElementById(elem);
}
id('showForm').style.display = 'none';
id('hideForm').onclick = function () {
 id('showForm').style.display = '';
  id('postform').style.display = 'none';
}
id('showForm').onclick = function () {
  id('showForm').style.display = 'none';
  id('postform').style.display = '';
}
id('toTop').onclick = function () {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
  console.log('➡️⬅️➡️⬅️➡️⬅️➡️➡️⬅️➡️➡️⬅️➡️');
}

const imgElement = document.querySelectorAll('.AttImg')[0];

imgElement.onclick = function() {
  this.classList.toggle('bigPic');
}