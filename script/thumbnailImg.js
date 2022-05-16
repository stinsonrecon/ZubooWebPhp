let link = document.querySelectorAll('.other-product-link-img');
let imgBox = document.querySelector('.imgBox>img');

link.forEach(el => {
        el.addEventListener('mouseover', (e) => imgBox.src = el.href);
});