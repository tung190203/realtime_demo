import './bootstrap';
Echo.channel('notification')
.listen('UserSessionChange',(e)=>{
    const notiElm= document.getElementById('notification')
    notiElm.innerText = e.message;
    notiElm.classList.remove('invisible');
    notiElm.classList.remove('alert-success');
    notiElm.classList.remove('alert-danger');
    notiElm.classList.add('alert-'+e.type);
})