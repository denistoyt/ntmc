// Modal Window
const modalLinks = document.querySelectorAll('.recept-modal-btn');
const body = document.querySelector('body');
const lockPadding = document.querySelectorAll('.lock-padding');

let unlock = true;

const timeout = 800;
// Get All Modal Links
if(modalLinks.length > 0) {
    for (let i = 0; i < modalLinks.length; i++) {
        const modalLink = modalLinks[i];
        modalLink.addEventListener('click', function(e) {
            const modalName = modalLink.getAttribute('href').replace('#', '');
            const currentModal = document.getElementById(modalName);
            modalOpen(currentModal);
            e.preventDefault();
        });
    }
}
// Close Btn
const modalCloseIcn = document.querySelectorAll('.close-popup');
if (modalCloseIcn.length > 0) {
    for(let i = 0; i < modalCloseIcn.length; i++) {
        const el = modalCloseIcn[i];
        el.addEventListener('click', function(e) {
            modalClose(el.closest('.popup'));
            e.preventDefault();
        });
    }
}
// Open Modal
function modalOpen(currentModal) {
    if(currentModal && unlock) {
        const modalActive = document.querySelector('.popup.open');
        if(modalActive) {
            modalClose(modalActive, false);
        }
        else {
            bodyLock();
        }
        currentModal.classList.add('open');
        currentModal.addEventListener('click', function(e) {
            if(!e.target.closest('.popup__content')) {
                modalClose(e.target.closest('.popup'));
            }
        });
    }
}