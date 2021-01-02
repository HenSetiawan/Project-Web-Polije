const keywordSearch=document.querySelector('.keyword-input');
const viewDataKos=document.querySelector('.view-data-kos');
keywordSearch.addEventListener('keyup',()=>{
    const url=keywordSearch.dataset.url;
    const keyword=keywordSearch.value;

    fetch(`${url}/home/search/${keyword}`)
    .then(response=>{
        return response.text()
    })
    .then(result=>{
        viewDataKos.innerHTML=result;
    })
})